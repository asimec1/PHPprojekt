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
		  <li><a href="index.php">Početna</a></li>
		  <li><a href="news.php">Novosti</a></li>
		  <li><a href="contact.php">Kontakt</a></li>
		  <li><a href="about-us.php">O nama</a></li>
		  <li><a href="register.php">Registracija</a></li>
		  <li><a href="signin.php">Prijava</a></li>
		  
		</ul>
		</nav>
	</header>
	<main>
		<h1>Dobrodošli na stranicu za praćenje cijena goriva</h1>
		<figure>
			<img src="img/fuel.jpg" alt="News" title="News">
			<figcaption>Ovdje možete pronaći aktualne cijene goriva.</figcaption>
		</figure>
		
		
		
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
	
	<h3>Aktualne cijene</h3>
	<p>Eurosuper 95 9,09kn</p>
	<p>Eurosuper 100 9,74kn</p>
	<p>Eurodizel 8,86kn</p>
	<p>Autoplin 4,67kn</p>
	<p>Lož ulje 3,96kn</p>
	<p>Plavi dizel 4,18kn</p>
	<p>Social media:<br>
		<a href="https://www.linkedin.com/in/tim-berners-lee-b41808ab/" target="_blank"><img src="img/linkedin.svg" alt="Linkedin" title="Linkedin" style="width:24px; margin-top:0.4em"></a>
		<a href="https://twitter.com/timberners_lee" target="_blank"><img src="img/twitter.svg" alt="Twitter" title="Twitter" style="width:24px; margin-top:0.4em"></a>
		<a href="https://plus.google.com/113372414904624897851" target="_blank"><img src="img/google+.svg" alt="Google+" title="Google+" style="width:24px; margin-top:0.4em"></a>
	</p>
</main>
<footer>
		<p>Copyright &copy; 2021 Vedran Mihalić. <a href="https://github.com/Vedran96?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
	</footer>
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