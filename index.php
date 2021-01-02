<?php 
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
    session_start();
	
	# Database connection
	include ("dbconn.php");
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	# Classes & Functions
    include_once("functions.php");
	
print '
<!DOCTYPE html>

<body>
	<header>
	<html>
	<header>
	<div class="hero-image"></div>
	<nav>
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="news.php">News</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li><a href="about-us.php">About</a></li>
		  <li><a href="register.php">Register</a></li>
		  <li><a href="signin.php">Sign In</a></li>
		  
		</ul>
		</nav>
	</header>
	<main>
		<h1>Dobrodošli na stranicu za najnovije vjesti</h1>
		<figure>
			<img src="img/news2.jpg" alt="News" title="News">
			<figcaption>Sir Timothy John Berners-Lee OM KBE FRS FREng FRSA FBCS (<time datetime="1955-06-08">born 8 June 1955</time>), also known as TimBL, is an English engineer and computer scientist, best known as the inventor of the World Wide Web.</figcaption>
		</figure>
		<p>Berners Lee is a British computer scientist who invented the World Wide Web.</p>
		<p>Timothy John Berners Lee was born on 8 June 1955 and grew up in London. He studied physics at Oxford University and became a software engineer.</p>
		<p>In 1994, Berners Lee founded the World Wide Web Consortium at the Laboratory of Computer Science (LCS) at the Massachusetts Institute of Technology in Boston. He has served as director of the consortium since then. He also works as a senior research scientist at LCS which has now become the Computer Science and Artificial Intelligence Laboratory.</p>
		<p>Source: <a href="http://www.bbc.co.uk/history/historic_figures/berners_lee_tim.shtml" target="_blank">BBC</a></p>
		
	</main>
</body>
</html>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="Hello Example">
		<meta itemprop="description" content="Some description">
		<meta itemprop="image" content="Your URL"> 
		
		<!-- Open Graph data -->
		<meta property="og:title" content="Hello Example">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Some description">
		<meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Twitter Card data -->
		<meta name="twitter:title" content="Hello Example">
		<meta name="twitter:description" content="Some description">
		
        <meta name="author" content=" vedranmihalic96@gmail.com">
		<!-- favicon meta -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Stranica za novosti</title>
		<p>Social media:<br>
		<a href="https://www.linkedin.com/in/tim-berners-lee-b41808ab/" target="_blank"><img src="img/linkedin.svg" alt="Linkedin" title="Linkedin" style="width:24px; margin-top:0.4em"></a>
		<a href="https://twitter.com/timberners_lee" target="_blank"><img src="img/twitter.svg" alt="Twitter" title="Twitter" style="width:24px; margin-top:0.4em"></a>
		<a href="https://plus.google.com/113372414904624897851" target="_blank"><img src="img/google+.svg" alt="Google+" title="Google+" style="width:24px; margin-top:0.4em"></a>
	</p>
</main>
</body>
</html>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}

	
	print '
	</main>
	
</body>
</html>';
?>