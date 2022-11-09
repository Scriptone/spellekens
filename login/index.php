<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM tbllogin WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-EF4ZEFP8NR"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-EF4ZEFP8NR');
	</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width">
	<link rel="icon" type="image/x-icon" href="../logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="./cookies/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/styles.css">
	<title>Login</title>
</head>

<body>
	<header>
		<a href="../" class="logo">
			<h1><img src="../images/logo.png" alt="Logo spellekens" width="100"> Spellekens.be</h1>
		</a>
		<button class="hamburger-menu" title="Toggle" onclick="menuToggle()">
			<i class="fa fa-bars"></i>
		</button>
		<nav>
			<ul class="nav">
				<li><a href="../"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="../about/"><i class="fa fa-user"></i>About us</a></li>
				<li><a href="./"><i class="fa fa-folder"></i>Games</a></li>
				<li><a href="../chatbot"><i class="fa fa-question-circle"></i>Help desk</a></li>
			</ul>
			<div class="nav-line"></div>
			<ul class="help">
				<li>
					<a href="../about#contactform" class="button">Contact</a>
				</li>
				<li>
					<a href="../login/index.php" class="button login"><i class="fa fa-user"></i>Login</a>
				</li>
			</ul>

		</nav>
		<script src="../JS_Bestanden/navline.js"></script>
	</header>
	<main>
		<div class="container">
			<form action="" method="POST" class="login-email">
				<p class="login-text">Login</p>
				<div class="input-groep">
					<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				</div>
				<div class="input-groep">
					<input type="password" placeholder="Password" name="password"
						value="<?php echo $_POST['password']; ?>" required>
				</div>
				<div class="input-groep">
					<button name="submit" class="btn">
						Login
				</div>
				<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
				<div class="input-groep">

					<button name="home" class="btnHome"> <a href="../">Home</a></button>
				</div>

			</form>
		</div>
		<div id="cookiePopup" class="hide">
			<img src="./cookies/img/cookie.png" />
			<p>
				Our website uses cookies to provide your browsing experience and
				relevant information. Before continuing to use our website, you agree &
				accept of our <a href="./cookie_policy/index.html">Cookie Policy & Privacy.</a>
			</p>
			<button id="acceptCookie">Accept</button>
		</div>
		<!-- Script -->
	</main>
	<footer>
		<p>Copyright &copy; 2022 Spellekens | Designed by team Spellekens | </p>
		<div class="social-icons">
			<a href="https://www.facebook.com/" title="facebook link" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="https://www.instagram.com/" title="instagram link" target="_blank"><i
					class="fa fa-instagram"></i></a>
			<a href="https://www.twitter.com/" title="twitter link" target="_blank"><i class="fa fa-twitter"></i></a>
			<a href="https://www.linkedin.com/" title="linkedin link" target="_blank"><i class="fa fa-linkedin"></i></a>
			<a href="https://www.twitch.tv/" title="twitch link" target="_blank"><i class="fa fa-twitch"></i></a>
		</div>
	</footer>
	<script src="./cookies/script.js"></script>
</body>

</html>