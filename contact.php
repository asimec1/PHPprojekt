<!DOCTYPE html>
<html>
<head>
		
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
		
        <meta name="author" content="vedranmihalic96@gmail.com">
		<!-- favicon meta -->
		<link rel="icon" href="icon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="icon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Kontakt</title>
	</head>
<body>
	<header>
	<html>
	<header>
	<div class="hero-image"></div>
	<nav>
		<ul>
		  <li><a href="index.php">Početna</a></li>
		  <li><a href="news.html">Novosti</a></li>
		  <li><a href="contact.php">Kontakt</a></li>
		  <li><a href="about-us.php">O nama</a></li>
		  <li><a href="register.php">Registracija</a></li>
		  <li><a href="signin.php">Prijava</a></li>
		  
		</ul>
		</nav>
	</header>
	<main>
		<h1>Kontakt</h1>
		<div id="contact">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.7890741539636!2d15.966758816056517!3d45.795453279106205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68b5d094979%3A0xda8bfa8459b67560!2sUl.+Vrbik+VIII%2C+10000%2C+Zagreb!5e0!3m2!1shr!2shr!4v1509296660756" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			
				<label for="fname">Ime *</label>
				<input type="text" id="fname" name="firstname" placeholder="Vaše ime.." required>

				<label for="lname">Prezime *</label>
				<input type="text" id="lname" name="lastname" placeholder="Vaše prezime.." required>
				
				<label for="lname">E-mail adresa *</label>
				<input type="email" id="email" name="email" placeholder="Vaša e-mail adresa.." required>

				<label for="country">Država</label>
				<select id="country" name="country">
				  <option value="">Please select</option>
				  <option value="BE">Belgium</option>
				  <option value="HR" selected>Hrvatska</option>
				  <option value="LU">Luxembourg</option>
				  <option value="HU">Hungary</option>
				</select>

				<label for="subject">Predmet</label>
				<textarea id="subject" name="subject" placeholder="Unesite poruku.." style="height:200px"></textarea>

				<input type="submit" value="Submit">
			</form>
		</div>
	</main>
	<footer>
		<p>Copyright &copy; 2021. Vedran Mihalić</p>
	</footer>
</body>
</html>
