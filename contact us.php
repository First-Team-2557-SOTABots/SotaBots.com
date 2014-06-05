<html>
<head>
<title>Contact Us</title>
<link type="text/css" rel="stylesheet" href="/Styles/style.css"></link>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="/Scripts/script.js"></script>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<body onLoad="init()">
<div id="wrapper">
<div id="banner">
	<a href="/index.php"><img src="/Images/Banner/banner.jpg"/></a><br/>
</div><!--banner-->
<div id="aside">
	<div id="nav">
		<ul>
			<li id="NPR"><a href="/Links/pr.php"><img src="/Images/Navigation/pr.png" width="110px"/></a></li>
			<li id="NBD"><a href="/Links/build.php"><img src="/Images/Navigation/build.png" width="110px"/></a></li>
			<li id="NPG"><a href="/Links/programming.php"><img src="/Images/Navigation/programming.png" width="110px"/></a></li>
			<li id="NMD"><a href="/Links/media.php"><img src="/Images/Navigation/media.png" width="110px"/></a></li>
			<li id="NSP"><a href="/Links/sponsors.php"><img src="/Images/Navigation/sponsors.png" width="110px"/></a></li>
			<li id="NCT"><a href="/Links/contact us.php"><img src="/Images/Navigation/contact.png" width="110px"/></a></li>
		</ul>
	</div><!--nav-->
	<div id="content">
<h1 id="CT">Contact Us!</h1>
	<p>If you would like to contact us, you may Email us at <a href="mailto:sotabots@gmail.com">sotabots@gmail.com</a>, you may also use the form below:</p>
	<form name="ContactForm" method="post" action="FormToEmail.php">
		<div id="sendMail">
			<label>Name:</label>
			<input name="name" type="text" id="name" />
			<label>Email:</label>
			<input name="email" type="text" id="email" /><br />
			<br /><label>Message/Comment:</label><br />
			<textarea name="comments" cols="100" rows="10" id="comments"></textarea><br />
			<input name="Status" type="submit" value="submit" />
		</div><!--sendMail-->
	</form>
	</div><!--content-->
</div><!--aside-->
<div id="footer">
<div style="float:left">
<a class="link" href="/index.php">SOTABots</a> <span style="color:#D3D000; font-weight:900;">//</span>  
</div><div style="float:right">
<ul>
<li><a href="https://www.facebook.com/SOTABots2557" target="_blank"><div class="facebook"></div></a></li>
<li><a href="https://twitter.com/SOTAbots" target="_blank"><div class="twitter"></div></a></li>
<li><a href="http://www.youtube.com/user/Sotabots2557" target="_blank"><img src="/Images/Footer/youtube.png" style="margin: 0 15px 30px 15px;"/></a></li>
<li><a href="http://www.flickr.com/photos/sotabots/" target="_blank"><img src="http://l.yimg.com/g/images/flickr_logo_small_white.png" style="background-color:#cccccc; margin: 0 15px 30px 15px; padding:5px;"/></a></li>
<li><a href="http://sotabots2557.wordpress.com/" target="_blank"><img src="/Images/Footer/wordpresslogo.jpg" width="132px" style="margin:0 15px 30px 15px; background-color:#cccccc; padding: 3px;"/></a></li>
<li><a href="http://www.usfirst.org/" target="_blank"><img src="/Images/Footer/first.png" style="margin: 0 15px 0 15px;"/></a></li>
</ul>
</div>
</div><!--footer-->
</div><!--wrapper-->
</body>
</html>
