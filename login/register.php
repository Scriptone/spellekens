<?php

include "config.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM tbllogin WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO tbllogin (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-EF4ZEFP8NR"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-EF4ZEFP8NR');
	</script>

	<link rel="icon" type="image/x-icon" href="../logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/styles.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" sizes="32x32" href="#">

	<title>Spellekens</title>
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


	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-groep">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-groep">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-groep">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>"
					required>
			</div>
			<div class="input-groep">
				<input type="password" placeholder="Confirm Password" name="cpassword"
					value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-groep">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="./">Login Here</a>.</p>

			<div class="input-groep">

				<button name="home" class="btnHome"> <a href="#">Home</a></button>
			</div>
		</form>

	</div>
</body>

</html>