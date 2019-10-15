
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: leden.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><title>Ceud mile fàite, one hondred thousand welcomes</title>
<link rel="stylesheet" href="./assets/styles/logoutHeader.css" />


    <meta charset="UTF-8" />
    <title>Welcome</title>
    <link rel="shortcut icon" href="../assets/imgs/favicon.ico" type="image/x-icon">

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Rosario&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/styles/logoutHeader.css" />
   <link rel="stylesheet" href="./assets/styles/repertoire.css">
  </head>
  <body>
    <div class="page-header">
      <h4>Welkom op het leden portaal</h4>
      <div class="btns">
      <button class="btn"><a href="welcome.php">Terug</a></button>
      <button class="btn"><a href="logout.php">Afmelden</a></button>
    </div>
    </div> 

<h1>Band Repertoire 2019 - 2020</h1>
<h2>Lijst van de Tunes: <a href="repertoire/repertoire%202019%202020.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" /></a> </h2>
<div id="main-text">

  <div class="container-table">
<table   height="2289" align="center" cellpadding="2" cellspacing="0" id="TuneTable" style="border: 0px solid DarkBlue; font-family: Verdana; font-size: 8pt; width: 100%; border-collapse: collapse;">
<tbody>
<tr style="border-style: none; color: DarkBlue; height: 12px;">
<td colspan="6" style="border-style: none; font-weight: bold; height: 12px;">Print
formats zijn in pdf <img src="images/pdf.gif" title=".pdf file" height="17" width="17" />,bagpipe
repertoire ook in bww (opent niet rechtstreeks) <img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /> voor <a href="#bpp" class="style6">bagpipe player</a>
(klik voor download).</td>
</tr>

<tr class="tableheader" style="border-style: solid; border-width: 1px; color: White; background-color: DarkBlue; height: 12px; position: sticky;">
<td style="border-style: solid; border-width: 1px; height: 12px;" width="30%">Tune </td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center" width="9%">Type</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center" width="18%">Pipes</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center" width="18%">Snare Drums </td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center" width="9%">Mid Section </td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center" width="10%">MP3 File</td>
</tr>

<tr style="border-style: solid; border-width: 1px; background-color: rgb(225, 236, 238); height: 12px;">
  <td colspan="6" class="style14" style="border-style: solid; border-width: 1px; height: 12px;">Standaard Tunes:</td>
  
</tr>
<!-- <tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr> -->
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Red Hackle Pipe Band</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">3/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/12.%20Red%20Hackle%20Pipe%20Band.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/12.%20Red%20Hackle%20Pipe%20Band.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td rowspan="2" align="center" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;&nbsp;<a href="repertoire/drums/Red%20Hackle%20Breda.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.5<a href="repertoire/Red%20Hackle%20%28sd%29.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Red%20Hackle%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Red%20Hackle.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">The Breda National Tattoo</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">3/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/13.%20The%20Breda%20National%20Tattoo.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/13.%20The%20Breda%20National%20Tattoo.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Std%203_4%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">The Green Hills of Tyrol</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">3/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/14.%20The%20Green%20Hills%20of%20Tyrol.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/14.%20The%20Green%20Hills%20of%20Tyrol.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td rowspan="2" align="center" style="border-style: solid; border-width: 1px; height: 12px;">standards</td>
  <td rowspan="2" align="center" style="border-style: solid; border-width: 1px; height: 12px;"><a href="repertoire/drums/Std%203_4%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Green%20Hills%20of%20Tyrol.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">When the Battle's o'er</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">3/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/15.%20When%20the%20battle%27s%20o%27er.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/15.%20When%20the%20battle%27s%20o%27er.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/When%20the%20battle%27s%20o%27er.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Scotland the Brave</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">4/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/11.%20Scotland%20the%20Brave.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp; <a href="repertoire/pipes/11.%20Scotland%20the%20Brave.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td rowspan="2" align="center" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;&nbsp;<a href="repertoire/drums/Scotl.%20Brave%20+%20Auld%20Lang%20Syne.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.6 <a href="repertoire/Scotland%20the%20Brave%20%28sd%29.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Scotl.%20Brave%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Scotland%20the%20Brave.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Auld Lang Syne</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">4/4 slow</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/19.%20Auld%20lang%20syne.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/19.%20Auld%20lang%20syne.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Std%2024_44_68%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Auld%20Lang%20Syne.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Highland Cathedral</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">4/4 slow </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/17.%20Highland%20Cathedral.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/17.%20Highland%20Cathedral.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Amazing%20Cathedral.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.2&nbsp;&nbsp;<a href="repertoire/Highland%20Cathedral%20%28sd%29.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Highland%20Cathedral%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Highland%20Cathedral.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Amazing Grace</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">3/4 slow </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/18.%20Amazing%20Grace.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/18.%20Amazing%20Grace.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Amazing%20Cathedral.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.2&nbsp;&nbsp;<a href="repertoire/Amazing%20Grace%20%28sd%29.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Amazing%20Grace%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Amazing%20Grace.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">The Flower of Scotland</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">6/8 slow </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/16.%20The%20Flower%20of%20Scotland.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/16.%20The%20Flower%20of%20Scotland.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14 </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Flower%20+%20HappyB.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.7&nbsp;&nbsp;<a href="repertoire/Flower%20%28sd%29.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Flower%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Flower.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Happy Birthday</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">3/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/20.%20Happy%20Birthday.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/20.%20Happy%20Birthday.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/18.dst" target="_blank"> </a> &nbsp;&nbsp;<a href="repertoire/drums/Flower%20+%20HappyB.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.7&nbsp;&nbsp;<a href="repertoire/Happy%20%28sd%29.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Happy%20Birthday%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Happy%20Birthday.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: none; border-width: 1px; height: 12px;">
  <td colspan="6"  style="border-style: none; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<!-- <tr style="border-style: solid; border-width: 1px; background-color: rgb(225, 236, 238); height: 12px;"> -->
  <td colspan="6" class="style14" style="border-style: solid; border-width: 1px; height: 12px;">Band Tunes </td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Castle Dangerous </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">3/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/29.%20Castle%20Dangerous.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/29.%20Castle%20Dangerous.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td rowspan="2" align="center" style="border-style: solid; border-width: 1px; height: 12px;"><a href="repertoire/drums/18.dst" target="_blank"> </a> standards</td>
  <td rowspan="2" align="center" style="border-style: solid; border-width: 1px; height: 12px;"><a href="repertoire/drums/Std%2024_44_68%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Castle%20Dangerous.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Colin's Cattle </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">3/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/Atholl%20Highlanders.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/Atholl%20Highlanders.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>29/11/12</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Atholl%20Highlanders.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Roses for Prince Charlie</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;"><p align="center">4/4</p>    </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td rowspan="5" style="border-style: solid; border-width: 1px; height: 12px;"><div align="center">MSS set </div></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Killiekrankie</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;"><div align="center">4/4</div></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">The Rowan Tree</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;"><div align="center">4/4</div></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Rose of Allendale</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;"><div align="center">4/4</div></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">The Pikeman's March</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;"><div align="center">4/4</div></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">The Pikeman's March </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">4/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/26.%20The%20Pikeman%27s%20March.bww" target="_blank"> <img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/26.%20The%20Pikeman%27s%20March.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td rowspan="2" align="center" style="border-style: solid; border-width: 1px; height: 12px;"><a href="repertoire/drums/18.dst" target="_blank"> </a> &nbsp; <a href="repertoire/drums/Pikeman%20CullenBay.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/The%20Pikeman%27s%20March(t).pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/The%20Pikeman%27s%20March.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Cullen Bay</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">5/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/27.%20Cullen%20Bay.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/27.%20Cullen%20Bay.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>00/00/00</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Cullen%20Bay.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Liberton Polka </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">2/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/28.%20Liberton%20polka.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/28.%20Liberton%20polka.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td align="center" style="border-style: solid; border-width: 1px; height: 12px;"><a href="repertoire/drums/Liberton%20Polka.pdf" target="_blank"> <img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Liberton%20Polka.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Atholl Highlanders </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">6/8</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/Atholl%20Highlanders.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/Atholl%20Highlanders.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>29/11/12</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/18.dst" target="_blank"> </a> standards</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Std%2024_44_68%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Atholl%20Highlanders.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;"><p align="center">&nbsp;</p>    </td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Steamboat</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;"><div align="center">6/8</div></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td rowspan="3" style="border-style: solid; border-width: 1px; height: 12px;"><div align="center">MSS set</div></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Carl Manson's Welcome to Auckland</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;"><div align="center">6/8</div></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Major John Maclennan</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;"><div align="center">6/8</div></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td rowspan="2" style="border-style: solid; border-width: 1px; height: 12px;">Scotch on the Rocks</td>
  <td rowspan="2" style="border-style: solid; border-width: 1px; height: 12px;" align="center">2/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/36.%20Scotch%20on%20the%20rocks.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/36.%20Scotch%20on%20the%20rocks.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td rowspan="2" style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/18.dst" target="_blank"> </a> &nbsp;&nbsp;<a href="repertoire/drums/Scotch.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.2&nbsp;&nbsp;<a href="repertoire/Scotch%20%28sd%29.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td rowspan="2" style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Scotch%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td rowspan="2" style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Scotch.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/37.%20Scotch%20on%20the%20rocks%20%20second.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp; <a href="repertoire/pipes/37.%20Scotch%20on%20the%20rocks%20%20second.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>08/10/09</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td colspan="6" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">The Bells of Dunblane</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">4/4 slow </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/38.%20The%20Bells%20Of%20Dunblane.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/38.%20The%20Bells%20Of%20Dunblane.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Bells%20of%20Dunblane.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.3&nbsp; <a href="repertoire/Bells%20of%20Dunblane%20%28sd%29.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Bells%20of%20Dunblane%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Bells%20of%20Dunblane.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: white; height: 12px;">
  <td colspan="6" class="style14" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: rgb(225, 236, 238); height: 12px;">
<td colspan="5" class="style14" style="border-style: solid; border-width: 1px; height: 12px;">Dance
Tunes</td>
<td class="style14" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Cock of the North (Flora Mac Donalds Fancy) </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">6/8</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/33.%20The%20Cock%20of%20the%20North.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/33.%20The%20Cock%20of%20the%20North.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">standards&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td align="center" style="border-style: solid; border-width: 1px; height: 12px;"><a href="repertoire/Cock%20of%20the%20North.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Highland Laddie (Highland Laddie) </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">2/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/34.%20Highland%20Laddie.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/34.%20Highland%20Laddie.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Highland%20Laddie.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Highland%20Laddie%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Highland%20Laddie.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
<td style="border-style: solid; border-width: 1px; height: 12px;">Keel Row , Orange and Blue (Highland Fling) </td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/32.%20The%20Keel%20Row.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/32.%20The%20Keel%20Row.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/18.dst" target="_blank"> </a>&nbsp;&nbsp;<a href="repertoire/drums/SkyeBoat%20+%20Strathspeys.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.4&nbsp; <a href="repertoire/Skyeboat%20+%20Strathspeys%20%28sd%29.mp3" target="_blank"> <img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a> </td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/KeelRow+Orange(t).pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/49.%20Skye%20Boat%20Song,%20last%20part%20+%20The%20Keel%20Row%20+%20Orange%20and%20Blue.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">The Battle of the Somme, The Heights of Dargai (Scottish Lilt)</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">9/8</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/43.%20Battle%20of%20the%20Somme%20+%20Heigh.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/43.%20Battle%20of%20the%20Somme%20+%20Heigh.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
<td style="border-style: solid; border-width: 1px; height: 12px;">Whistle
o&#8217;er the Lave O&#8217;t + Orange and Blue (Seann Triubhas) </td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">4/4</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/44.%20Whistle%20o%27er%20the%20Lave%20O%27t.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/44.%20Whistle%20o%27er%20the%20Lave%20O%27t.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
<td style="border-style: solid; border-width: 1px; height: 12px;">All
the blue bonnets are over the border (The blue bonnets) </td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">6/8</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/45.%20All%20the%20Blue%20Bonnets%20are%20ov.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp; <a href="repertoire/pipes/45.%20All%20the%20Blue%20Bonnets%20are%20ov.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
<td style="border-style: solid; border-width: 1px; height: 12px;">Ghillie
Calum (The Sword Dance) </td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">4/4</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/46.%20Ghillie%20Callum.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/46.%20Ghillie%20Callum.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
<td style="border-style: solid; border-width: 1px; height: 12px;">My
Love She's But A Lassie Yet (Sailors Hornpipe)</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">2/4 hornpipe</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/47.%20My%20Love%20She%27s%20But%20A%20Lassie.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/47.%20My%20Love%20She%27s%20But%20A%20Lassie.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Liberton Polka (Village Maid) </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">2/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/28.%20Liberton%20polka.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/28.%20Liberton%20polka.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;&nbsp;<a href="repertoire/drums/Liberton%20Polka.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Liberton%20Polka.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Cock of the North (Over the Waters to Charlie) </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">6/8</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/33.%20The%20Cock%20of%20the%20North.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/33.%20The%20Cock%20of%20the%20North.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">standards&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td align="center" style="border-style: solid; border-width: 1px; height: 12px;"><a href="repertoire/Flora.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
<td style="border-style: solid; border-width: 1px; height: 12px;">Paddy's
Leather Breeches (Irish Jig) </td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">6/8 jig </td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/48.%20Paddy%27s%20Leather%20Breeches.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/48.%20Paddy%27s%20Leather%20Breeches.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
<td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;"> The Barren Rocks of Aden (Barracks Johnnie)</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">2/4 hornpipe </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/49.%20The%20Barren%20Rocks%20Of%20Aden.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/49.%20The%20Barren%20Rocks%20Of%20Aden.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: white; height: 12px;">
  <td colspan="6" class="style14" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
  </tr>
<tr style="border-style: solid; border-width: 1px; background-color: rgb(225, 236, 238); height: 12px;">
  <td colspan="5" class="style14" style="border-style: solid; border-width: 1px; height: 12px;">Funeral Tunes</td>
  <td class="style14" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Going Home </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/53.%20Going%20Home.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/53.%20Going%20Home.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">The Day thou Gavest</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td rowspan="2" align="center" style="border-style: solid; border-width: 1px; height: 12px;"><a href="repertoire/pipes/55.%20The%20Day%20Thou%20Gavest.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/55.%20The%20Day%20Thou%20Gavest.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Abide with me </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Flowers of the Forest </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/55.%20Flowers%20of%20the%20Forest.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/55.%20Flowers%20of%20the%20Forest.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Auld Lang Syne</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">4/4 slow</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/pipes/19.%20Auld%20lang%20syne.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/19.%20Auld%20lang%20syne.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Scotl.%20Brave%20+%20Auld%20Lang%20Syne.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.6 &nbsp;<a href="repertoire/Auld%20Lang%20Syne%20%28sd%29.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Std%2024_44_68%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/Auld%20Lang%20Syne.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 met pipes &amp; drums" border="0" height="17" width="17" /></a></td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Dark Island </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td rowspan="2" align="center" style="border-style: solid; border-width: 1px; height: 12px;"><a href="repertoire/pipes/57.%20The%20Dark%20Island.bww" target="_blank"><img src="images/BMW95.ico" title=".bww voor bagpipe player" border="0" height="17" width="17" /></a>&nbsp;&nbsp;<a href="repertoire/pipes/57.%20The%20Dark%20Island.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>28/11/14</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Mist Covered Mountains </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: white; height: 12px;">
  <td colspan="6" class="style14" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: rgb(225, 236, 238); height: 12px;">
  <td colspan="5" class="style14" style="border-style: solid; border-width: 1px; height: 12px;">Drummer Scores</td>
  <td class="style14" style="border-style: solid; border-width: 1px; height: 12px;">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Drummers Standards </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">3/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Std%203_4.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.4&nbsp;&nbsp;<a href="repertoire/Std%203_4.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Std%203_4%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Drummers Standards </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">2/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Std%202_4.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.3&nbsp;&nbsp;<a href="repertoire/Std%202_4.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td rowspan="3" style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Std%2024_44_68%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Drummers Standards </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">4/4</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Std%204_4.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.4&nbsp;&nbsp;<a href="repertoire/Std%204_4.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Drummers Standards </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">6/8</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Std%206_8.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.5&nbsp;&nbsp;<a href="repertoire/Std%206_8.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Liberton Polka Intro Salute </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Liberton%20Polka%20Introplus.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Brian Boru's March </td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">6/8</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Brian%20Boru%27s%20March.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.1</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>
<tr style="border-style: solid; border-width: 1px; background-color: White; height: 12px;">
  <td style="border-style: solid; border-width: 1px; height: 12px;">Drum Salute 2013</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;&nbsp;<a href="repertoire/drums/Drum%20Battle%202013.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.5&nbsp;&nbsp;<a href="repertoire/Drum%20Salute%202011.mp3" target="_blank"><img src="images/mp3.gif" title=".mp3 drumscore op rustig tempo" border="0" height="17" width="17" /></a></td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center"><a href="repertoire/drums/Drum%20Battle%202013%28t%29.pdf" target="_blank"><img src="images/pdf.gif" title=".pdf file" border="0" height="17" width="17" /></a>ed.5</td>
  <td style="border-style: solid; border-width: 1px; height: 12px;" align="center">&nbsp;</td>
</tr>

</tbody>
</table>
  </div>

<div class="content">
<td colspan="3" align="center" bgcolor="#ffffff">
<p></p>
<p align="left"></p>
<p class="style7" align="left"><span class="style11">Download Bagpipe Player</span><a name="bpp" id="bpp"></a>
</p>
<p class="style7" align="left">Er zijn 3
mogelijkheden om bagpipe player te installeren, afhankelijk van welk OS
je hebt draaien op je PC :
</p>
<p class="style7" align="left">&nbsp;</p>
<p class="style7" align="left">1. voor 32-bit
machines ( zoals Windows XP of de 32-bit versie van Vista ) : best
rechtstreeks van de <a href="http://www3.telus.net/public/dougwick/BagpipePlayer.exe"><span class="style12">website</span></a> halen (
gewoon uitvoeren, dit installeert zichzelf ) </p>
<p class="style7" align="left">2. voor 64-bit
machines ( zoals Windows 7 , 8 &amp; 10 of de 64-bit versie van Vista ) kan je een <a href="Bagpipe%20Player.zip"><span class="style12">zip-file</span></a>
downloaden die je manueel moet installeren : </p>
<p class="style7" align="left">Extract en
copieer de inhoud naar "C:\Program Files (x86)\Bagpipe Player"</p>
<p class="style7" align="left">Rename/Wijzig
de naam van het bestand BGPlayer.ekse naar BGPlayer.exe <br />
<br />
Verplaats de files "BMW1, BMW2, BMW3, BMW4, BMW5, BMW6, BMW7, BMW8"
naar de locatie "c:\windows\fonts" op uw 64-bit machine. <br />
<br />
Start tenslotte eenmalig op uw 64-bit machine "C:\Program Files
(x86)\Bagpipe Player\BGPlayer.exe" als administrator (klik hiervoor met
rechter muisknop op deze file) opdat een entry ergens in het register
kan worden weggeschreven. Daarna loopt Bagpipe Player zonder probleem
voor elke gebruiker op de PC. </p>
<p class="style7" align="left">3. een nieuwe webpagina beschrijft (in 't Engels) hoe je een installatie kan doen voor zowel 32-bit als 64-bit ! Klik <a href="http://bagpipe.eotrs.dk/" target="_blank" class="style12">hier</a> </p>
<p class="style7" align="left">&nbsp;</p>
</td>
</tr>
<tr>
<td colspan="3" align="center" bgcolor="#ffffff">&nbsp;</td>
</tr>


</div>

</body>
</html>