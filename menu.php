<?php 
	print '
	<ul>
	<li><a href="index.php">Početna</a></li>
	<li><a href="news.html">Vijesti</a></li>
	<li><a href="contact.php">Kontakt</a></li>
	<li><a href="about-us.php">O nama</a></li>
	<li><a href="register.php">Registracija</a></li>
	<li><a href="signin.php">Prijava</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=5">Register</a></li>
			<li><a href="index.php?menu=6">Sign In</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=7">Admin</a></li>
			<li><a href="signout.php">Sign Out</a></li>';
		}
		print '
	</ul>';
?>