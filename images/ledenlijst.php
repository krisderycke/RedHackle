<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">


<script type="text/JavaScript">
<!--

	var dhtmlgoodies_tooltip = false;
	var dhtmlgoodies_tooltipShadow = false;
	var dhtmlgoodies_shadowSize = 6;
	var dhtmlgoodies_tooltipMaxWidth = 40;
	var dhtmlgoodies_tooltipMinWidth = 80;
	var dhtmlgoodies_iframe = false;
	var tooltip_is_msie = (navigator.userAgent.indexOf('MSIE')>=0 && navigator.userAgent.indexOf('opera')==-1 && document.all)?true:false;
	
function showTooltip(e,tooltipTxt)
	{
		var bodyWidth = Math.max(document.body.clientWidth,document.documentElement.clientWidth) - 20;
	
		if(!dhtmlgoodies_tooltip){
			dhtmlgoodies_tooltip = document.createElement('img');
			dhtmlgoodies_tooltip.id = 'dhtmlgoodies_tooltip';
			dhtmlgoodies_tooltipShadow = document.createElement('img');
			dhtmlgoodies_tooltipShadow.id = 'dhtmlgoodies_tooltipShadow';
			
			document.body.appendChild(dhtmlgoodies_tooltip);
			document.body.appendChild(dhtmlgoodies_tooltipShadow);	

			if(tooltip_is_msie){

				dhtmlgoodies_iframe = document.createElement('IFRAME');
				dhtmlgoodies_iframe.frameborder='5';
				dhtmlgoodies_iframe.style.backgroundColor='#FFFFFF';
				dhtmlgoodies_iframe.src = '#'; 	
				dhtmlgoodies_iframe.style.zIndex = 100;
				dhtmlgoodies_iframe.style.position = 'absolute';
				document.body.appendChild(dhtmlgoodies_iframe);
			}
		}
		
		dhtmlgoodies_tooltip.style.display='block';
		dhtmlgoodies_tooltipShadow.style.display='block';
		if(tooltip_is_msie)dhtmlgoodies_iframe.style.display='block';		
		
		var st = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
		if(navigator.userAgent.toLowerCase().indexOf('safari')>=0)st=0; 
		var leftPos = 0;
		var downPos = 0;
		
		if(e.pageX || e.pageY){  
			leftPos = e.pageX;
			downPos = e.pageY;  
		} else {  
			leftPos = e.clientX + document.documentElement.scrollLeft;
			downPos = e.clientY + document.documentElement.scrollTop; 
				} 
				
		dhtmlgoodies_tooltip.setAttribute("src", tooltipTxt);
		dhtmlgoodies_tooltip.style.width = null;	// Reset style width if it's set 
		dhtmlgoodies_tooltip.style.left = leftPos + 30 + 'px';
		dhtmlgoodies_tooltip.style.top = downPos + 'px';

		dhtmlgoodies_tooltipShadow.style.width = null;
		dhtmlgoodies_tooltipShadow.style.left =  leftPos + 20 + dhtmlgoodies_shadowSize + 'px';
		dhtmlgoodies_tooltipShadow.style.top = downPos + dhtmlgoodies_shadowSize + 'px';
		
		if(dhtmlgoodies_tooltip.offsetWidth>dhtmlgoodies_tooltipMaxWidth){	/* Exceeding max width of tooltip ? */
			dhtmlgoodies_tooltip.style.width = dhtmlgoodies_tooltipMaxWidth + 'px';
		}
		
		var tooltipWidth = dhtmlgoodies_tooltip.offsetWidth;		
		if(tooltipWidth<dhtmlgoodies_tooltipMinWidth)tooltipWidth = dhtmlgoodies_tooltipMinWidth;
		
		dhtmlgoodies_tooltip.style.width = tooltipWidth + 'px';
		dhtmlgoodies_tooltipShadow.style.width = dhtmlgoodies_tooltip.offsetWidth + 'px';
		dhtmlgoodies_tooltipShadow.style.height = dhtmlgoodies_tooltip.offsetHeight + 'px';		
		
		if((leftPos + tooltipWidth)>bodyWidth){
			dhtmlgoodies_tooltip.style.left = (dhtmlgoodies_tooltipShadow.style.left.replace('px','') - ((leftPos + tooltipWidth)-bodyWidth)) + 'px';
			dhtmlgoodies_tooltipShadow.style.left = (dhtmlgoodies_tooltipShadow.style.left.replace('px','') - ((leftPos + tooltipWidth)-bodyWidth) + dhtmlgoodies_shadowSize) + 'px';
		}
		
		if(tooltip_is_msie){
			dhtmlgoodies_iframe.style.left = dhtmlgoodies_tooltip.style.left;
			dhtmlgoodies_iframe.style.top = dhtmlgoodies_tooltip.style.top;
			dhtmlgoodies_iframe.style.width = dhtmlgoodies_tooltip.offsetWidth + 'px';
			dhtmlgoodies_iframe.style.height = dhtmlgoodies_tooltip.offsetHeight + 'px';
		}
	}
	
function hideTooltip()
	{
		dhtmlgoodies_tooltip.setAttribute("src", "");
		dhtmlgoodies_tooltip.style.display='none';
		dhtmlgoodies_tooltipShadow.style.display='none';		
		if(tooltip_is_msie)dhtmlgoodies_iframe.style.display='none';	
	}
//-->
</script>
<style>
<!--table
	{mso-displayed-decimal-separator:"\,";
	mso-displayed-thousand-separator:"\.";}
@page
	{mso-header-data:&A;
	mso-footer-data:"Page &P";
	margin:.98in .79in .98in .79in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;}
tr
	{mso-height-source:auto;}
col
	{mso-width-source:auto;}
br
	{mso-data-placement:same-cell;}
.style0
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"MS Sans Serif";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border:none;
	mso-protection:locked visible;
	mso-style-name:Standaard;
	mso-style-id:0;}
td
	{mso-style-parent:style0;
	padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"MS Sans Serif";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:locked visible;
	white-space:nowrap;
	mso-rotate:0;}
.xl22
	{mso-style-parent:style0;
	font-size:15.0pt;
	font-weight:700;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"MS Sans Serif", sans-serif;
	mso-font-charset:0;
	border:.5pt solid windowtext;}	
.xl24
	{mso-style-parent:style0;
	font-weight:700;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"MS Sans Serif", sans-serif;
	mso-font-charset:0;}
.xl25
	{mso-style-parent:style0;
	text-align:right;}
.xl26
	{mso-style-parent:style0;
	font-weight:700;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"MS Sans Serif", sans-serif;
	mso-font-charset:0;
	border:.5pt solid windowtext;}
.xl27
	{mso-style-parent:style0;
	font-weight:700;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"MS Sans Serif", sans-serif;
	mso-font-charset:0;
	text-align:right;
	border:.5pt solid windowtext;}
.xl28
	{mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl29
	{mso-style-parent:style0;
	text-align:right;
	border:.5pt solid windowtext;}
.xl30
	{mso-style-parent:style0;
	mso-number-format:"Short Date";
	border:.5pt solid windowtext;}
.xl301 {mso-style-parent:style0;
	mso-number-format:"Short Date";
	border:.5pt solid windowtext;}

#dhtmlgoodies_tooltip{
		background-color:#EEE;
		border:1px solid #000;
		position:absolute;
		display:none;
		z-index:20000;
		padding:2px;
		font-size:0.9em;
		-moz-border-radius:6px;	/* Rounded edges in Firefox */
		font-family: "Trebuchet MS", "Lucida Sans Unicode", Arial, sans-serif;
		
	}
#dhtmlgoodies_tooltipShadow{
		position:absolute;
		background-color:#555;
		display:none;
		z-index:10000;
		opacity:0.7;
		filter:alpha(opacity=70);
		-khtml-opacity: 0.7;
		-moz-opacity: 0.7;
		-moz-border-radius:6px;	/* Rounded edges in Firefox */
	}
.xl281 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl282 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl283 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl284 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl285 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl286 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl287 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl288 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl289 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl2810 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl2811 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl2812 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl2813 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl2814 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl2815 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl2816 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl2817 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
.xl2818 {mso-style-parent:style0;
	border:.5pt solid windowtext;}
-->
</style>

</head>

<?php
$d=date("d/m");
$j="Rol met de muis over de voornaam om een foto te zien";
if ($d=="15/01")
  $j="Opgelet... Tamara is jarig vandaag...!";
if ($d=="22/01")
  $j="Opgelet... Paul is jarig vandaag...!"; 
if ($d=="26/01")
  $j="Opgelet... Erwin is jarig vandaag...!"; 
if ($d=="20/02")
  $j="Opgelet... Bart v.Z. is jarig vandaag...!"; 
if ($d=="14/03")
  $j="Opgelet... Ann is jarig vandaag...!";
if ($d=="16/03")
  $j="Opgelet... Nancy Br. is jarig vandaag...!"; 
if ($d=="24/03")
  $j="Opgelet... Julie is jarig vandaag...!"; 
if ($d=="06/04")
  $j="Opgelet... Bart v.A. is jarig vandaag...!"; 
if ($d=="17/04")
  $j="Opgelet... Robbe is jarig vandaag...!";
if ($d=="02/05")
  $j="Opgelet... Bob en Johan zijn jarig vandaag...!"; 
if ($d=="04/05")
  $j="Opgelet... Ingrid is jarig vandaag...!"; 
if ($d=="07/05")
  $j="Opgelet... Georges en Sandra zijn jarig vandaag...!";  
if ($d=="11/05")
  $j="Opgelet... Patrick S. is jarig vandaag...!"; 
if ($d=="14/05")
  $j="Opgelet... Luc is jarig vandaag...!"; 
if ($d=="15/05")
  $j="Opgelet... Patrick Ma. is jarig vandaag...!";
if ($d=="27/05")
  $j="Opgelet... Sharyn is jarig vandaag...!"; 
if ($d=="24/06")
  $j="Opgelet... Benny is jarig vandaag...!"; 
if ($d=="30/06")
  $j="Opgelet... Alec is jarig vandaag...!"; 
if ($d=="04/07")
  $j="Opgelet... Gert is jarig vandaag...!";
if ($d=="07/07")
  $j="Opgelet... Cynthia is jarig vandaag...!";
if ($d=="21/07")
  $j="Opgelet... Dirk is jarig vandaag...!"; 
if ($d=="31/07")
  $j="Opgelet... Rob en Dries zijn jarig vandaag...!"; 
if ($d=="27/08")
  $j="Opgelet... Julien is jarig vandaag...!";
if ($d=="08/09")
  $j="Opgelet... Kirsten is jarig vandaag...!"; 
if ($d=="15/09")
  $j="Opgelet... Renild is jarig vandaag...!";
if ($d=="18/09")
  $j="Opgelet... Obadja is jarig vandaag...!";
if ($d=="20/09")
  $j="Opgelet... Maïté is jarig vandaag...!"; 
if ($d=="23/09")
  $j="Opgelet... Björn is jarig vandaag...!";
if ($d=="02/10")
  $j="Opgelet... Koen is jarig vandaag...!"; 
if ($d=="08/10")
  $j="Opgelet... Nancy Bo is jarig vandaag...!";  
if ($d=="08/11")
  $j="Opgelet... Werner is jarig vandaag...!";
if ($d=="21/11")
  $j="Opgelet... Marijke v.G. is jarig vandaag...!";   
if ($d=="25/11")
  $j="Opgelet... Raymonda is jarig vandaag...!"; 
if ($d=="28/11")
  $j="Opgelet... Warre en Arne zijn jarig vandaag...!"; 
if ($d=="30/11")
  $j="Opgelet... Maarten is jarig vandaag...!"; 
if ($d=="05/12")
  $j="Opgelet... Roger is jarig vandaag...!";
if ($d=="13/12")
  $j="Opgelet... Melissa is jarig vandaag...!";
if ($d=="17/12")
  $j="Opgelet... Eefje is jarig vandaag...!";
if ($d=="23/12")
  $j="Opgelet... Elien F. is jarig vandaag...!";
 
?>
<div id="main-text">
<p>Helaas wegens de nieuwe Europese wetgeving omtrent GDPR mogen we enkel nog een namenlijst publiceren...</p>
<table width=30% height="1113" border=0 cellpadding=0 cellspacing=0 style='border-collapse:
 collapse;table-layout:fixed;width:30%'>

 <tr class=xl24 height=17 style='height:12.75pt'>
  <td width="219" height=17 class=xl26 style='height:12.75pt;width:30pt'>Naam</td>
  <td width="586" class=xl26 style='border-left:none;width:30pt'>Voornaam</td>
  <td width="615" class=xl26 style='border-left:none;width:30pt'>Functie</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Jervis</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;'href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/alec.jpg');return false">Alexander</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Driessens</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/ann.jpg');return false">Ann</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Merchandising</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Dumon</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/antje.jpg');return false">Antje</td>
  <td class="xl28" style='border-top:none; border-left:none;'>LL Tenor Drummer</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Moyson</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/arne.jpg');return false">Arne</td>
  <td class="xl28" style='border-top:none; border-left:none;'>LL Piper </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Van Assche</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/bart.jpg');return false">Bart</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper (PM) </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Van Zele</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/bartvz.jpg');return false">Bart</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Vermeulen</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/bartv.jpg');return false">Bart</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Vangenechten</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/benny.jpg');return false">Benny</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Drum Major </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Zwinnen</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/bjorn.jpg');return false">Björn</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Snare Drummer </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Baets</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/bob.jpg');return false">Bob</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Florus</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/cynthia.jpg');return false">Cynthia</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Danser</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Machiels</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/dirk.jpg');return false">Dirk</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Vandamme</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/eefje.jpg');return false">Eefje</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Danser</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Faes</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/elienf.jpg');return false">Elien</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Danser</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Wuyts</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/erwin.jpg');return false">Erwin</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Drum Sergeant </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Van Tillo</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/georges.jpg');return false">Georges</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Bass Drummer </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Heyman</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/gert.jpg');return false">Gert</td>
  <td class="xl28" style='border-top:none; border-left:none;'>LL piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Baekelmans</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/ingrid.jpg');return false">Ingrid</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Dansbegeleiding</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Kelly</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/islay.jpg');return false">Islay</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Danser</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
   <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Ollieuz</td>
   <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/iris.jpg');return false">Iris</td>
   <td class="xl28" style='border-top:none; border-left:none;'>Dansbegeleiding</td>
   </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Herbots</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/johan.jpg');return false">Johan</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Booking Manager</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Wuyts</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/julie.jpg');return false">Julie</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Danser</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Van Noten</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/julien.jpg');return false">Julien</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Drum Major </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Vits</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/karla.jpg');return false">Karla</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Merchandising</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Van Dooren</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/kirsten.jpg');return false">Kirsten</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Danser</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Berteloot</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/koen.jpg');return false">Koenraad</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>De Rycke</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/kris.jpg');return false">Kris</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Traets</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/kristien.jpg');return false">Kristien</td>
  <td class="xl28" style='border-top:none; border-left:none;'>LL Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Pieterse</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/lia.jpg');return false">Lia</td>
  <td class="xl28" style='border-top:none; border-left:none;'>LL Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Cap</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/luc.jpg');return false">Luc</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Snare Drummer </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
   <td height="17" class="xl28" style='height:12.75pt; border-top:none;'>Herbots</td>
   <td class="xl28" style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/maarten.jpg');return false">Maarten</td>
   <td class="xl28" style='border-top:none; border-left:none;'>Pipe Major </td>
   </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Borms</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/machteld.jpg');return false">Machteld</td>
  <td class="xl28" style='border-top:none; border-left:none;'>LL Tenor Drummer</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Ver Elst</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/maite.jpg');return false">Maïté</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Danser</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Van Grootel</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/marijkevg.jpg');return false">Marijke</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Merchandising</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Bauwens</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/melissa.jpg');return false">Melissa</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Danser</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Boons</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/nancyb.jpg');return false">Nancy</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Snare Drummer </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Bridoux</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/nancy.jpg');return false">Nancy</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper </td>
  </tr> 
<tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Masset</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/obadja.jpg');return false">Obadja</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Tenor Drummer </td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Mahieu</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/patrickma.jpg');return false">Patrick</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Steiner</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/patrick.jpg');return false">Patrick</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Morreel</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/paul.jpg');return false">Paul</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Honorary PM</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>De Ridder</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/raymonda.jpg');return false">Raymonda</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Moyson</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/robbe.jpg');return false">Robbe</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Snare Drummer </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>De Winter</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/rob.jpg');return false">Robert</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Snare Drummer </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Van Huffel</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/roger.jpg');return false">Roger</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Snare Drummer </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>De Winter</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/sandra.jpg');return false">Sandra</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Mommens</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/sharyn.jpg');return false">Sharyn</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Danser</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Jervis</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;'href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/stuart.jpg');return false">Stuart</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Van Bockhaven</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/tamara.jpg');return false">Tamara</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Piper</td>
  </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Moyson</td>
  <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/warre.jpg');return false">Warre</td>
  <td class="xl28" style='border-top:none; border-left:none;'>Drum Major </td>
  </tr>
 <tr height=17 style='height:12.75pt'>
   <td height=17 class=xl28 style='height:12.75pt; border-top:none;'>Caryn</td>
   <td class=xl28 style='border-top:none; border-left:none; font-weight: bold;' href="#" onmouseout="hideTooltip()" onmouseover="showTooltip(event,'images/werner.jpg');return false">Werner</td>
   <td class="xl28" style='border-top:none; border-left:none;'>Snare Drummer</td>
   </tr>

 <![if supportMisalignedColumns]>
 <![endif]>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</div>
</body>

</html>
