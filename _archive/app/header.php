<?php 

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
	<header>
		<nav>
			<a href="">
				<img src="">
			</a>
			<!-- <ul> Menu
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
			</ul> -->
		</nav>
	</header>
	<div>

		<?php 
			if (isset($_SESSION['userId'])) {
				echo '<form action="includes/logout.inc.php" method="post">
								<button type =submit"" name="logout-submit">Logout</button>
							</form>';
			}
			else {
				echo '<form action="includes/login.inc.php" method="post">
							<input type="text" name="mailuid" placeholder="Username or email">
							<input type="password" name="pwd" placeholder="Password">
							<button type=submit"" name="login-submit">Login</button>
							</form>
							<a href="signup.php">Sign up</a>';
			}
		?>
		
	</div>
</body>
</html>