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
     
      <h3>impressum.</h3><br/>
	  Walter Müller<br/>
Hohe Straße 22<br/>
1007 Klapsmühltal<br/>
<br/><br/>
Telefon: 01007/4729533<br/>
Forum: <a href='http://www.freistaat-fuchsen.de/forum/thread.php?threadid=2295&hilight=WM+Sport' target='_blank'>WM-Sport Hauptsitz</a><br/>
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
