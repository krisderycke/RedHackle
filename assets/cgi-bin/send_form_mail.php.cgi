#!/usr/bin/php
<?php
/* *************************************************************** */
/* 'send_form_mail.php.cgi' versendet E-Mails, die mit dem STRATO- */
/* Kontaktformular erstellt werden.                                */
/* STRATO - CGI 2017 "Kontaktformular"                             */
/* STRATO-AG Berlin v 2.2 / 01.11.2017                             */
/*                                                                 */
/* --------------------------------------------------------------- */

session_start();

$_SESSION['mandant'] = 'strato';

// Sprache und Kundendomain ID festlegen
if ( isset($_POST['lang']) && in_array( $_POST['lang'], array('de', 'en', 'es', 'fr', 'it', 'nl')) ) {
    $lang = $_POST['lang'];
}
else {
    $lang = 'de';
}

$cust_domain = preg_replace('/^www\./', '', $_SERVER['SERVER_NAME']);
$cust_dom_id = md5( $cust_domain );

// Regulaere Ausdruecke definieren
$regx['HTTP_REFERER'] = '/^(http\:\/\/)?(www\.)?([a-zA-Z0-9\-\_\.]+\.[a-zA-Z]{2,6})(\/.+)$/';
$regx['email']        = '/^(?!.*\.\..*|^\+.*|.*\+@.*|.+@\..+|.+@\-.+)([a-zA-Z0-9\_\-\.\+]+)(@)([a-zA-Z0-9äöüÄÖÜ.\-\_]{1,70})(\.)([a-zA-Z]{2,6}|museum|travel)$/';
$regx['d_keys']       = '/^((.+email)|(.+subject)|(s_name)|(s_phone)|(reciepient)|(s_message)|(reg_check))$/';
$regx['t_keys']       = '/(form_type)|(required)|(redirect)|(lang)/';
$regx['required']     = '/(required\[.*\])/';
$regx['redirect']     = '/^(http\:\/\/)?(www\.)?([a-zA-Z0-9\303\244\303\266\303\274\303\204\303\226\303\234.\-\_]{1,70})(\.)([a-zA-Z]{2,6}|museum|travel)(\/)?(.+)?$/';

// Lokale Variablen definieren
$hidden_action      = 'send';
$_SESSION['alerts'] = array();
$_DATEN['post']     = array();

// Standardwerte definieren
if (preg_match( $regx['HTTP_REFERER'], $_SERVER['HTTP_REFERER'], $h_matches )) {
	$h_host = $h_matches[3];
} else {
	$h_host = $_SERVER['HTTP_HOST'];
}
$form_sender = 'formmailer@' . $h_host;

if( $_SESSION['mandant'] != 'strato' && isset( $_POST['from_email'] ) ) {

    # Absender check, falls es nicht STRATO ist
    $email_match_from  = preg_match( $regx['email'], $_POST['from_email'], $e_matches_from );
    $domain_match_from = $e_matches_from[3] . $e_matches_from[4] . $e_matches_from[5];
    $dom_match_id_from = md5( $domain_match_from );

    if( $email_match_from === FALSE ) {
        $hidden_action  = 'alert';
        $_SESSION['alerts']['send_form_mail_alert'] = $alerts['mail_not_sent_err'] . "<br />";
        $_SESSION['alerts']['back_link'] = '<a href="javascript:history.back()">' . $alerts['back'] . '</a>';
    }
    elseif( $dom_match_id_from != $cust_dom_id ) {
        $hidden_action  = 'alert';
        $_SESSION['alerts']['send_form_mail_alert'] = $alerts['mail_not_sent_err'] . "<br />";
        $_SESSION['alerts']['back_link'] = '<a href="javascript:history.back()">' . $alerts['back'] . '</a>';
    }

    $form_sender = $_POST['from_email'];
}

$std_reciep = 'webmaster@' . $h_host;

// Usereingaben waschen und in ein Zwischenarray hinzufuegen
foreach( $_POST as $p_key => $p_val ) {

    if( !preg_match( $regx['required'], $p_key ) ) {
        $_DATEN['post'][$p_key] = wash_user_input( $p_val );
    }

    $_DATEN['post']['r_email'] = wash_user_input( $_POST['r_email'] );

    if( !empty( $_POST['reciepient'] ) ) {
        $_DATEN['post']['r_email'] = wash_user_input( $_POST['reciepient'] );
    }

    unset( $_DATEN['post']['reciepient'] );
}

// Array mit Fehlermeldungen auslesen
$als    = new tpl_parse($lang);
$alerts = $als->text_pieces;

// Empfängerdomain ID festlegen
$email_match  = preg_match( $regx['email'], $_DATEN['post']['r_email'], $e_matches );
$domain_match = $e_matches[3] . $e_matches[4] . $e_matches[5];
$dom_match_id = md5( $domain_match );

// Empfaenger Email Adresse festlegen
if( empty( $_DATEN['post']['r_email'] ) || $email_match === FALSE ) {
    $m_reciep = $std_reciep;
}
else {

    if( empty( $_SESSION['calledDomainID'] ) ) {

        if( $domain_match != $cust_domain ) {
            $hidden_action  = 'alert';
            $_SESSION['alerts']['send_form_mail_alert'] = $alerts['mail_not_sent_err'] . "<br />";
            $_SESSION['alerts']['back_link'] = '<a href="javascript:history.back()">' . $alerts['back'] . '</a>';
        }
        else {
            $m_reciep = $_DATEN['post']['r_email'];
        }
    }
    else {

        if( $dom_match_id != $cust_dom_id ) {
            $hidden_action  = 'alert';
            $_SESSION['alerts']['send_form_mail_alert'] = $alerts['mail_not_sent_err'] . "<br />";
            $_SESSION['alerts']['back_link'] = '<a href="javascript:history.back()">' . $alerts['back'] . '</a>';
        }
        else {
            $m_reciep = $_DATEN['post']['r_email'];
        }
    }
}


$m_subject  = wash_user_input( $_DATEN['post']['s_subject'] );
$m_header   = 'Content-Type: text/plain; charset=utf-8' . "\n" . 'From: ' . $form_sender;
$m_sender   = $form_sender;

/* fallunterscheidung zwischen 'std' und 'own' */
if( $_DATEN['post']['form_type'] == 'std_form' ) {
    $m_content = utf8_encode( $_DATEN['post']['s_message'] ) .
             "\n\n" . date("d.m.Y - H:i:s")  .
             "\n" . utf8_encode( $_DATEN['post']['s_name'] ).
             "\n" . utf8_encode( $_DATEN['post']['s_phone'] ) .
             "\n" . utf8_encode( $_DATEN['post']['s_email'] );
}
elseif( $_DATEN['post']['form_type'] == 'own_form' ) {

    if( preg_match( $regx['redirect'], $_POST['redirect'] ) ) {
        $_DATEN['post']['redirect'] = wash_user_input( $_POST['redirect'] );
    }

    if( !empty( $_POST['reg_check'] ) ) {
        if( !preg_match( $regx['email'], $_POST['s_email'] ) ) {
            $hidden_action = 'warn';
            $_SESSION['alerts']['send_form_mail_alert'] .= "<b>&lt;" . wash_user_input( $_POST['s_email'] ). "&gt;</b> " .  $alerts['invalid_email_alert'] . "<br />";
            $_SESSION['alerts']['back_link'] = '<a href="javascript:history.back()">' . $alerts['back'] . '</a>';
        }
    }
    else {
        $_POST['reg_check'] = array();
    }

    if( !empty( $_POST['required'] ) && is_array( $_POST['required'] ) ) {

        foreach( $_POST['required'] as $r_key => $r_val ) {
            $_DATEN['required'][$r_key] = $r_val;
            $_DATEN['labels']           = array_flip( $_DATEN['required'] );
        }

        foreach( $_DATEN['post'] as $d_key => $d_val ) {

            if( in_array( $d_key, $_DATEN['required'] ) ) {

                if( empty( $d_val ) ) {
                    $hidden_action = 'warn';
                    $_SESSION['alerts']['send_form_mail_alert'] .= $alerts['field'] . "<b>" . wash_user_input( $_DATEN['labels'][$d_key] ) ." (" . wash_user_input( $d_key ) . ") ". "</b>" . $alerts['fill_reqired_alert'] . "<br />";
                    $_SESSION['alerts']['back_link'] = '<a href="javascript:history.back()">' . $alerts['back'] . '</a>';
                }
            }
        }
    }
    else {
        $_POST['required'] = array();
    }

    $m_content = wash_user_input( utf8_encode( $_DATEN['post']['s_message'] ) );

    foreach( $_DATEN['post'] as $d_key => $d_val ) {
        if( !preg_match( $regx['d_keys'], $d_key ) && !preg_match( $regx['t_keys'], $d_key ) ) {
            $m_content .= "\n" . wash_user_input( utf8_encode( $d_key ) ) . " => " . utf8_encode( $d_val );
        }
    }

    $m_content .= "\n\n" . date("d.m.Y - H:i:s")  .
        "\n" . wash_user_input( utf8_encode( $_DATEN['post']['s_name'] ) ) .
        "\n" . wash_user_input( utf8_encode( $_DATEN['post']['s_phone'] ) ) .
        "\n" . wash_user_input( utf8_encode( $_DATEN['post']['s_email'] ) );
}
else {
    $m_content = '';

    foreach( $_DATEN['post'] as $d_key => $d_val ) {
        if( !preg_match( $regx['t_keys'], $d_key ) ) {
            $m_content .= "\n" . wash_user_input( $d_key ) . " => " . ( $d_val );
        }
    }
}

if( $hidden_action == 'send' ) {
    $m_subject1 = '=?UTF-8?B?' . base64_encode( utf8_encode( $m_subject ) ) . '?=';

    if( mail( $m_reciep, $m_subject1, $m_content, $m_header ) ) {
        $_SESSION['alerts']['send_form_mail_alert'] = $alerts['mail_sent_tnx'];

        if( !empty( $_DATEN['post']['redirect'] ) ) {
            header("Location: " . wash_user_input( $_DATEN['post']['redirect'] ) );
            exit();
        }
    }
    else {
        $_SESSION['alerts']['send_form_mail_alert'] = $alerts['err_mailsend'];
    }
}
elseif( $hidden_action == 'warn' ) {
    $_SESSION['alerts']['send_form_mail'] .= $alerts['back'];
}

// Dankeseite anzeigen
$output    = new tpl_parse($lang, $_SESSION['alerts'] );
$land_page = $output->output_txt;
echo $land_page;
unset( $_SESSION['alerts'] );
exit();


function wash_user_input($data = '', $type = 'nohtml') {
    if('' == $data) return '';
    $data = stripslashes($data);
    switch ($type) {
    case 'html':
        $data = preg_replace(
            array('!\<(/?b|i|pre|quote|code|u)\>!iu','!(\<br(\ /)?\>])|\n|\r\n!i'),
            array('[\\1]','[br]'),
            $data);
        $data = htmlspecialchars($data);
        break;
    case 'size':
        $data = preg_replace('![\ \.,]!','',$data);
        $data = preg_replace('!^([^0-9]*)([0-9]+)(m|k){0,1}!i','\\2 \\3',$data);
        list($number,$faktor) = split(' ',$data,2);
        switch ($faktor) {
        case 'M': case 'm': $data = ($number*1024*1024); break;
        case 'k': case 'K': $data = ($number*1024); break;
        default: $data = $number;
        }
        break;
    case 'nohtml':
        // Erstmal allgemein putzen
        $data = preg_replace(
            array('/<(\ )*script(.*)>/i'
                 ,'/\t/'
                 ,'/\ +/'
                 ,'/<head>.+<\/head>/i'
                 ,'/<style.*?>.+<\/style>/i'
                 ,'{<(script)>((?!</\1>).)*</\1>}is'
                 ,'/<iframe.*?>.+<\/iframe>/i'
                 ,'/<\/?(html|body|!doctype|img|span|nobr).*?>/i'
                 ,'/&nbsp;/i'
                 ,'/<\/?(b|i|u).*?>/i'
                 ,'/(style|background|color|bgcolor|width|height)=(\".+?\"|.+?)(?=\ |>)/i'
                 ,'/>/i'
                 ,'/</i'),
            array('',' ',' ','','','','',' ',' ','','','&gt;','&lt;'),
            $data);

        $data = preg_replace('/<.+>/','',$data);
    }
    return $data;
}



class tpl_parse {

   function tpl_parse($disp_lang = 'de', $text_pieces = array(), $txt_path = '', $tpl_path = '')
   {
      // Die Variablen global machen
      $this->disp_lang = $disp_lang;
      $this->text_pieces = $text_pieces;

      // Das Array '$this->textpieces' erweitern
      foreach($this->send_form_texte() as $key => $val) {
         $this->text_pieces[$key] = $val[$this->disp_lang];
      }
      $output_txt = $this->reparse_template();

      $this->output_txt = $output_txt;
   }

   /**
   *  Liefert Inhalt des Templates mit ersetzten Platzhaltern
   *
   *  @return  string
   */
   function reparse_template()
   {
      $regex = '/({)([a-z0-9\_]+)(\|?)([a-zA-Z0-9\_\.\-\:\/]*)(})/';

      $tpl_cont = $this->mail_tpl();

      return preg_replace_callback (
         $regex,
         array($this,'replace_tplcont'),
         $tpl_cont );
   }

   /**
   *  Platzhalter ersetzt
   *
   *  @param   array   $matches   Such-Treffer
   *  @return  string
   */
   function replace_tplcont($matches)
   {
      if(!empty($this->text_pieces[$matches[2]])) {
         return $this->text_pieces[$matches[2]];
      } else {
         return $matches[4];
      }
   }

   function send_form_texte() {
     
        $daten = array(
            'send_form_mail_title'     => array(
                        'de' => 'STRATO Mail-Manager 2.0',
                        'en' => 'STRATO Contact form',
                        'es' => 'STRATO Formulario de contacto',
                        'fr' => 'STRATO Formulaire de contact',
                        'it' => 'STRATO Modulo per contatto',
                        'nl' => 'STRATO Contactformulier'
          ),
            'send_form_mail_title_freenet'     => array(
                        'de' => 'Mail-Manager',
                        'en' => 'Contact form',
                        'es' => 'Formulario de contacto',
                        'fr' => 'Formulaire de contact',
                        'it' => 'Modulo per contatto',
                        'nl' => 'Contactformulier'
          ),
          'send_form_mail_close_win' => array(
                 'de' => '[Fenster schlie&szlig;en]',
                 'en' => '[Close Window]',
                 'es' => '[Cerrar ventana]',
                 'fr' => '[fermer la fen&ecirc;tre]',
                 'it' => '[Chiudi finestra]',
                 'nl' => '[Venster sluiten]'
            ), 
            'wrong_re_adr_subj'     => array(
                'de' => "Ihre Mail konnte nicht versandt werden. ",
                'en' => "Your mail could not be sent. ",
                'es' => "No se ha podido enviar su e-mail. ",
                'it' => "Non &egrave; stato possibile inviare il suo messaggio. ",
                'fr' => "Votre email n&acute;a pas pu &ecirc;tre envoy&eacute;. ",
                'nl' => "Uw e-mail kon niet verstuurd worden. "
            ),
            
            'mail_not_sent_wrong_pack'     => array(
                'de' => "Eine Mail konnte nicht &uuml;ber unser Script versandt werden da ein Fehler aufgetreten ist. <br />Die angegebene Empf&auml;ngeradresse geh&ouml;rt nicht zu einer in ihrem Paket konnektierten Domain. ",
                'en' => "Due to an error an email could not be sent using the script. <br />The e-mail address specified is not connected to your domain. ",
                'es' => "No se ha podido enviar el e-mail con nuestro script debido a un error. <br />La direcci&oacute;n de destinatario introducida no pertenece a ning&uacute;n dominio conectado de su paquete. ",
                'it' => "Non &egrave; stato possibile inviare un messaggio con il nostro Script poich&eacute; si &egrave; verificato un errore. <br />L'indirizzo del destinatario non fa parte di uno dei domini connessi del suo pacchetto. ",
                'fr' => "Un mail n&acute;a pu &ecirc;tre envoy&eacute; par notre Script, car une erreur est apparue. <br />L'adresse d'expediteur indiqu&eacute; n&acute;appartient &agrave; aucun des domaines connect&eacute;s de votre pack. ",
                'nl' => "Een e-mail kon niet via ons script verstuurd worden, omdat zich een fout heeft voorgedaan. <br />Het vermelde ontvangeradres maakt geen deel uit van een domein dat zich in uw pakket bevindt. "
            ),
            'regards'     => array(
                'de' => "Viele Gr&uuml;&szlig;e, <br />Ihr Strato-Team ",
                'en' => "Kind regards, <br />your Strato-Team ",
                'es' => "Atentamente, <br />El Equipo de STRATO ",
                'it' => "Distinti Saluti, <br />il suo Team STRATO ",
                'fr' => "Merci pou votre compr&eacute;hension. <br />Votre &eacute;quipe STRATO ",
                'nl' => "Vriendelijke groeten, <br />uw STRATO team "
            ),
            'regards_freenet'     => array(
                'de' => "Viele Gr&uuml;&szlig;e, <br />Ihr Freenet-Team ",
                'en' => "Kind regards, <br />your Strato-Team ",
                'es' => "Atentamente, <br />El Equipo de Freenet",
                'it' => "Distinti Saluti, <br />il suo Team Freenet",
                'fr' => "Merci pou votre compr&eacute;hension. <br />Votre &eacute;quipe Freenet",
                'nl' => "Vriendelijke groeten, <br />uw Freenet team "
            ),    
            'mail_sent_tnx'     => array(
                'de' => "Danke, Ihre Nachricht wurde versandt! ",
                'en' => "Thank you! Your message was sent! ",
                'es' => "Gracias! Su mensaje ha sido enviado! ",
                'it' => "Grazie! Il suo messaggio &egrave; stato inviato correttamente! ",
                'fr' => "Merci! Votre message a &eacute;t&eacute; envoy&eacute;! ",
                'nl' => "Bedankt! Uw bericht is verzonden! "
            ),
            
            'mail_trans_ok'     => array(
                'de' => "Mail transfer erfolgreich ",
                'en' => "Email transfer successful ",
                'es' => "El e-mail ha sido enviado correctamente ",
                'it' => "Messaggio inviato con successo ",
                'fr' => "Email envoy&eacute; avec succ&egrave;s ",
                'nl' => "E-mail verzending succesvol "
            ),
            
            'mail_not_sent_err'     => array(
                'de' => "Ihre Nachricht konnte nicht versandt werden! Es ist ein Fehler aufgetreten. ",
                'en' => "Because of an error, your message could not be sent! ",
                'es' => "No se ha podido enviar su mensaje. Se ha producido un error. ",
                'it' => "Non &egrave; stato possibile inviare il suo messaggio! Si &egrave; verificato un errore. ",
                'fr' => "Votre message n&acute;a pu &ecirc;tre envoy&eacute;! Une erreur est apparue. ",
                'nl' => "Uw bericht kon niet worden verstuurd! Er heeft zich een fout voorgedaan. "
            ),
            
            'err_mailsend'     => array(
                'de' => "Fehler beim Mailversand ",
                'en' => "Error, Email transfer unsuccessful ",
                'es' => "Error en el env&iacute;o del e-mail ",
                'it' => "Errore durante l'operazione d'invio ",
                'fr' => "Erreur dans l'envoi de cet email ",
                'nl' => "Fout bij de e-mail verzending "
            ),
            
            'back'     => array(
                'de' => "[zur&uuml;ck]",
                'en' => "[back]",
                'es' => "[volver]",
                'it' => "[Indietro]",
                'fr' => "[Pr&eacute;c&eacute;dent]",
                'nl' => "[terug]"
            ),
            
            'wrong_email'     => array(
                'de' => "Fehlerhafte E-Mail Adresse ",
                'en' => "Incorrect e-mail address ",
                'es' => "direcci&oacute;n de e-mail incorrecta ",
                'it' => "Indirizzo email non valido ",
                'fr' => "Adresse email erron&eacute;e ",
                'nl' => "foutief e-mail adres "
            ),
            
            'invalid_email_alert'     => array(
                'de' => "Die von Ihnen eingegebene E-Mail Adresse ist falsch! Bitte geben Sie eine g&uuml;ltige E-Mail Adresse ein. ",
                'en' => "The specified e-mail address appears to be incorrect. ",
                'es' => "La direcci&oacute;n de e-mail introducida es incorrecta. Por favor, introduzca una correcta. ",
                'it' => "L'indirizzo email da lei inserito non &egrave; corretto! La preghiamo di inserirne uno giusto.&quot; ",
                'fr' => "L' adresse email que vous avez entr&eacute; est erron&eacute;e! Veuillez entrer une adresse email valide. ",
                'nl' => "Het door u aangegeven e-mail adres is niet correct! Geeft u alstublieft een geldig e-mail adres aan. "
            ),
            
            'fill_all_req_alert'     => array(
                'de' => "Bitte alle Pflichtfelder ausf&uuml;llen! ",
                'en' => "Please fill in all mandatory fields! ",
                'es' => "Por favor, rellene todos los campos obligatorios. ",
                'it' => "La preghiamo di riempire tutti i campi obbligatori! ",
                'fr' => "Veuillez remplir toutes les cases obligatoires ! ",
                'nl' => "Vult u alstublieft alle verplichte velden in! "
            ),
            
            'field'     => array(
                'de' => "Das Feld ",
                'en' => "The field ",
                'es' => "El campo ",
                'it' => "Il campo ",
                'fr' => "La case ",
                'nl' => "Het veld "
            ),
            
            'fill_reqired_alert'     => array(
                'de' => " ist ein Pflichtfeld und muss ausgef&uuml;llt werden. ",
                'en' => " is a mandatory and must be filled in. ",
                'es' => " es obligatorio y debe ser rellenado. ",
                'it' => " &egrave; obbligatorio e deve essere riempito. ",
                'fr' => " est obligatoire et doit &ecirc;tre remplie. ",
                'nl' => " is verplicht en moet daarom ingevuld worden. "
            )
        );
        return $daten;
   }

   function mail_tpl() {
      return  '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>{send_form_mail_title}</title>
<style type="text/css">
<!--
ul,body,p,td,tr,table,ol,div{
font-size:12px;
font-family:Verdana;
}
a:link{
color:black;
text-decoration:underline;
font-size: 11px;
display:inline;
}
a:visited{
color:black;
text-decoration:underline;
font-size: 11px;
display:inline;
}
a:hover{
text-decoration:none;
background-color:gray;
color:white;
font-size: 11px;
display:inline;
}
a:active{
color:white;
text-decoration:underline;
font-size: 11px;
display:inline;
}
.input{
border-bottom: black 1px solid;
border-left: #297394 1px solid;
border-right: black 1px solid;
border-top: #297394 1px solid;
font-family:Verdana;
font-size: 10px;
text-align:left;
padding-left:5px;
padding-top:2px;
padding-bottom:2px;
font-weight:bolder;
color:black;
background-color:#CAD3EB;
cursor:hand;
display:inline;
}
form{
display:inline;
}
.err {
   color:red;
}
-->
</style>
<link rel="stylesheet" type="text/css" href="http://www.strato.de/css/de_main.css">
<link rel="stylesheet" type="text/css" href="http://www.strato.de/css/styles.css">
</head>
<body>
        <table width="180" border="0" cellspacing="0" cellpadding="0">
            <tr height="24">
                <td width="24" height="24">&nbsp;</td>
                <td width="400" height="24">&nbsp;</td>
                <td width="24" height="24">&nbsp;</td>
            </tr>
            <tr height="24">
                <td width="24" height="24">&nbsp;</td>
                <td width="400" height="24">
        <nobr>{send_form_mail_alert}</nobr>
    </td>
                <td width="24" height="24">&nbsp;</td>
            </tr>
            <tr height="24">
                <td width="24" height="24">&nbsp;</td>
                <td width="400" height="24">&nbsp;</td>
                <td width="24" height="24">&nbsp;</td>
            </tr>
            <tr height="24">
                <td width="24" height="24">&nbsp;</td>
                <td width="400" height="24">{back_link} </td>
                <td width="24" height="24">&nbsp;</td>
            </tr>
            <tr height="24">
                <td width="24" height="24">&nbsp;</td>
                <td width="400" height="24">&nbsp;</td>
                <td width="24" height="24">&nbsp;</td>
            </tr>
            <tr height="24">
                <td width="24" height="24">&nbsp;</td>
                <td width="400" height="24"> <a onclick="self.close()" href="#">{send_form_mail_close_win}</a> </td>
                <td width="24" height="24">&nbsp;</td>
            </tr>
        </table>
</body>
</html>';
   }
}



?>

<!--

<html>

<body>

    <form action="/cgi-bin/send_form_mail.php.cgi" method="post">
        <input type="hidden" name="r_email" value="martin@wunschname" > #<-  muss zur aufrufenden domain gehören
        <input type="hidden" name="form_type" value="own_form" >

        <input type="text" name="s_name"> für den Feldnamen des Absendernamens 
<input type="text" name="s_email"> für den Feldnamen der Absender E-Mail Adresse 
<input type="text" name="s_phone"> für den Feldnamen der Telefonnummer des Absenders 
<input type="text" name="s_subject"> für den Feldnamen für den Betreff 
<textarea name="s_message"></textarea> für den Feldnamen der Nachricht

<input type="submit" name="">
    
    </form>
    

</body>

</html>

-->
