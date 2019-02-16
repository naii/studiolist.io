<?php 

if (isset($_POST['signup-submit'])) {
	
	require 'dbh.inc.php';

	# fetch information from signup form when user signed up
	$username = $_POST['uid']; # uid is the name of the input field for the username
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	# some basic error handlers
	if (empty($username) || empty($email)  || empty($password)  ||  empty($passwordRepeat)) {
		header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email); # header() function links user back to the page referred in the parantheses
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invalidmailuid"); # don't send anything back to page
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidmail&uid=".$username);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invaliduid&mail=".$email);
		exit();
	}
	else if ($password !== $passwordRepeat) {
		header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();	
	}
	else {

		$sql = "SELECT uidUsers FROM users WHERE uidUsers=?"; # use ? as a placeholder
		$stmt = mysqli_stmt_init ($conn);  # use prepared statements to prevent SQL injection hacks
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $username); # s = string, b = boolean, i = integer
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: ../signup.php?error=usertaken&mail=".$email);
				exit();
			}
			else {
				$sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?);"; 
				$stmt = mysqli_stmt_init ($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../signup.php?error=sqlerror");
					exit();
				}
				else {

					$hashedPwd = password_hash($password, PASSWORD_DEFAULT); # use Bcrypt for secure password-hashing

					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}
	mysqli_stmt_close($stmt); # close the statement
	mysqli_close($conn); # close the SQL connection
}

else  {
	header("Location: ../signup.php");
	exit();
}

# no closing PHP statement necesary if the file only contains PHP code2