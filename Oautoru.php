<?php @session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<hmtl xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>AS ROMA-O autoru</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Roma,AS roma,fudbal,stadio,totiseria a"/>
<meta name="description" content="AS Roma je italijanski fudbalski klub "/>
<meta name="copyright" content="Prava zadržana Velibor Bogdanović"/>
<meta name="author" content="Velibor Bogdanović"/>
<link rel="shortcut icon" href="slike/roma5.png"/>
<link rel="stylesheet" type="text/css" href="stil.css" />
<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="script1.js"></script>
</head>
<body>

<div id="navigacija" >
<div id="navokvir" >
	<div id="slika" >
	<a href="index.php" ><img id="slika1"  src="slike/roma4.png" alt="HOME" /></a>
	</div>
	<div id="as" > 
		<h1 id="h1" >A.S.ROMA</h1>
	</div>
	<div id="lista" >
	<?php 
		include ("meni.php");
	?>
	</div>
	
<div >
		<a id="search" href="logout.php" >Logout</a>
		
	</div>
	
	</div>
	<div class="clear" ></div>
	
</div>
<div id="okvir1" >
	
		<div id="autor">
		<div id="ja">
			<img src="slike/ja.jpg" alt="ja" />
		</div>
		<div id="Omeni" >
			<p>Moje ime je Velibor Bogdanović rodjen sam 17 novembra 1994 godine u Beogradu.Završio sam srednju elektrotehničku školu "Nikola Tesla",smer elektrotehničar multimedija.Student sam druge godine Visoke ICT škole . </p>
		</div>
		<div class="clean"></div>
	
		</div>
	
		
</div>	
<div id="footer" >
	<div id="futer">
	<ul>
	<li><a href="index.html" >Početna</a></li>
       <li><a href="galerija.html" >Galerija</a></li>
     
	   <li><a href="sitemap.xml" >Sitemap</a></li>
	    <li><a href="igraci.xml" >XML</a></li>
		<li><a href="dokumentacija.pdf" >Dokumentacija</a></li>
	  
       
	</ul>
	</div>
<div id="ikonice" >
	<a href="http:www.facebook.com/ljave94" ><img id="fb" src="slike/facebook.png" alt="Facebook-Profile" /></a>
	<a href="www.twitter.com" ><img id="tw" src="slike/twitter.png" alt="Twitter" /></a>
	<a href="www.googleplus.com" ><img id="gp" src="slike/googlePlus.gif" alt="googleplus"/></a>
	<a href="rss.xml"><img src="slike/rss.jpg"  alt="rss"/></a>
	
	
</div>	
<div id="cr"> <p>Velibor Bogdanovic 67/13Copyright®2015 </p>
</div>

</div>
</body>
</html>





