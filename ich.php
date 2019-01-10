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
     
      <h3>über mich.</h3><br/>
	
	  <table font-size=12px>
	  <tr>
		<td>Name:</td>
		<td>&nbsp;</td>
		<td>Walter Müller</td>
		<td align='right'>  <img src='http://freistaat-fuchsen.de/forum/images/avatars/avatar-454.jpg'/></td>
	</tr>
	<tr>
		<td>Geburtsdatum:</td>
		<td>&nbsp;</td>
		<td>20.03.1970</td>
	</tr>
	<tr>
		<td>Wohnanschrift:</td>
		<td>&nbsp;</td>
		<td>1007 Klapsmühltal<br/>
Oststraße 32</td>
	</tr>
	<tr>
		<td>Telefon:</td>
		<td>&nbsp;</td>
		<td>01007/4729533 (geschäftl.)<br/>
			01007/8574637 (privat)</td>
	</tr>
	<tr>
		<td>Handy:</td>
		<td>&nbsp;</td>
		<td>02222/1248421</td>
	</tr>
	<tr>
		<td>Firma:</td>
		<td>&nbsp;</td>
		<td><a href='http://www.freistaat-fuchsen.de/forum/thread.php?threadid=2295&hilight=WM+Sport' target='_blank'>WM-Sport Hauptsitz</a></td>
	</tr>
	</table>

<br/><br/>
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
