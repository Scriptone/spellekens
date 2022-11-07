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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="./cookies/style.css">
	<link rel="icon" type="image/png" sizes="32x32" href="#">

	<title>Spellekens</title>
</head>
<body>
	<div>

	</div>
	<div>
		
	</div>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text">Login</p>
			<div class="input-groep">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-groep">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
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
    <script src="./cookies/script.js"></script>
</body>
</html>
