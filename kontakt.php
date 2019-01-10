<html>
<head>
<title>WM-Sport</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="language" content="deutsch, de" />

<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="contheader">
  
  <div id="header">  <div id="headerleft"><a href="index.php">WM-Sport.fu</a></div>
<ul>
          <li><a href="index.php">Home</a></li>
            <li><a href="ich.php">Über mich</a></li>
              <li><a href="angebot.php">Angebot</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                  <li><a href="impressum.php">Impressum</a></li>

        </ul>
  </div>

</div>
<div id="contmain">
  <div id="main">
    <div id="mainleft">
       <h1 id="h1">WM-Sport</h1> 
    </div>
   
    <div id="mainright"><img src='images/logo.png'/></div>
  </div>
</div>
<div id="conttext">
  <div id="text">
    <div id="textright"><div id="time" align="right">
        <?php
            $jetzt=time();
            $zeit=date("H:i",$jetzt);
            $datum=date("d.m.Y", $jetzt);
            echo "$datum - $zeit Uhr";
        ?></div>
      <div align="right">
          <div id="platzhalter1"></div>
<br/>

      </div>
    </div>
    <div id="textleft">
     
      <h3>kontakt.</h3>
	  <br/>
	  Walter Müller<br/>
Hohe Straße 22<br/>
1007 Klapsmühltal<br/>
<br/><br/>
Telefon: 01007/4729533<br/>
Forum: <a href='http://www.freistaat-fuchsen.de/forum/thread.php?threadid=2295&hilight=WM+Sport' target='_blank'>WM-Sport Hauptsitz</a><br/>
	  
<?php
$an = "barrus@gmx.de"; // Hier bitte die Empfänger E-Mail Adresse eintragen
$form .= '


<form method="post" autocomplete="off">
<table width="50%" border="0" cellspacing="1" class="kontakt">
<tr>
<td align="right" width="30%">Ihr Name:</td>
<td ><input name="kontaktname" type="text" size="40" value="'.$_POST['kontaktname'].'"/></td>
</tr>
<tr>
<td align="right">E-Mail Adresse:</td>
<td><input name="absender" type="text" size="40" value="'.$_POST['absender'].'"/></td>
</tr>
<tr>
<td align="right">Anliegen:</td>
<td>
<select name="betreff" class="select" style="width:120px;">
<option value="Bitte w&aumlhlen..." style="padding:2px;">Bitte w&auml;hlen...</option>
<option value="Lob" style="padding:2px;cursor:pointer;">Lob</option>
<option value="Kritik" style="padding:2px;cursor:pointer;">Kritik</option>
<option value="Wunsch" style="padding:2px;cursor:pointer;">Wunsch</option>
<option value="Inhalt melden" style="padding:2px;cursor:pointer;">Inhalt melden</option>
<option value="Allgemein" style="padding:2px;cursor:pointer;">Allgemein</option>
</select></td>
</tr>
<tr>
<td align="right">Ihre Nachricht:</td>
<td><textarea name="kontaktnachricht" style="height:120px;width:280px;">'.$_POST['kontaktnachricht'].'</textarea></td>
</tr>
<tr>
<td align="right">Sicherheitscode:</td>
<td><img id="captcha" src="captcha.php"></td>
</tr>
<tr>
<td align="right">Code eintragen:</td>
<td><input type="text" name="captcha_zeichen" style="width:120px;" size="10"></td>
</tr>
<tr>
<td> </td>
<td><input type="submit" name="submit" value="Abschicken"></td>
</tr>
</table>
</form>';

if ($_REQUEST['submit'] == 'Abschicken'){
if ($_POST['kontaktname'] == '') {
$fehler .= 'Tragen Sie bitte Ihren Namen ein.<br>';
}
if ($_POST['absender'] == '') {
$fehler .= 'Sie haben Ihre E-Mail Adresse nicht eingetragen.<br>';
}
elseif (!eregi("^[a-z0-9._-]+@+[a-z0-9._-]+.+[a-z]{2,4}$",$_POST['absender'])) {
$fehler .= 'Die eingetragene E-Mail scheint ung&uuml;ltig zu sein.<br>';
}
if ($_POST['betreff'] == 'Bitte w&auml;hlen...') {
$fehler .= 'Bitte w&auml;hlen Sie Ihr Anliegen f&uuml;r diese Nachricht aus.<br>';
}
if ($_POST['kontaktnachricht'] == '') {
$fehler .= 'Sie haben keine Nachricht verfasst.<br>';
}
if ($_POST['captcha_zeichen'] != ''.$_SESSION['Captcha'].'') {
$fehler .= 'Sicherheitscode ist falsch.<br>';
}
$showfehler = '<table border=0 width="100%" cellspacing="0" cellpadding="0" class="fehler"><tr><td>'.$fehler.'</td></tr></table>';
if ($fehler == ''){
$kontaktname=$_POST['kontaktname'];
$absender=$_POST['absender'];
$betreff=$_POST['betreff'];
$kontaktnachricht=$_POST['kontaktnachricht'];
$body = "Von: $kontaktname \n E-Mail: $absender \n\n Anliegen: $betreff \n\n Nachricht:\n$kontaktnachricht";
mail($an,$betreff,$body,"From: Kontakt mockauer.de <$an>");
$form = '
<table width="100%" border="0" cellspacing="0" class="kontakt">
<tr>
<td>
<table width="100%" style="border:1px solid #4DFF4D;background-color:#B3FFB3;color:#007C01;" cellspacing="0" cellpadding="0"><tr><td><b>Nachricht wurde erfolgreich verschickt.</b></td></tr></table>
</td>
</tr>
</table>';
$showfehler = '';
}
}
else {
$fehler = '';
$showfehler = '';
}
echo ''.$showfehler.'';
echo '<br/>'.$form.'';
?><br/><br/>
    </div>
  </div>
</div>
<div id="contfooter">
  <div id="footer">

 
    <div id="footerbottom">
        &copy; WM-Sport - Diese Seite gehört zur MN Fuchsen und ist somit fiktiv.
    </div>
  </div>
</div>

</body>
</html>
