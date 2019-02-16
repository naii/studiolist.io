<?php

 # test123 is the password for user "test"
# test234 is the password for user "test2"

if (isset($_POST['login-submit'])) { # check if user got to this page legitimately (by actually logging in)

	require "dbh.inc.php";

	$mailuid = $_POST['$mailuid'];  # user can login using email adresse or username
	$password = $_POST['$pwd'];

	if (empty($mailuid) || empty($password)) {
		#header("Location: ../index.php?error=emptyfields");
		header("Location: ../index.php?error=emptyfields&mailuid=".$mailuid);
		exit();
	}
	else {
		# $sql = "SELECT * FROM users WHERE uidUsers=?;";
		$sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";

		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else {

			# mysqli_stmt_bind_param($stmt, "s", $mailuid);
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);

			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['pwdUsers']);
				if ($pwdCheck == false) {
					header("Location: ../index.php?error=wrongpwd");
					exit();
				}
				else if ($pwdCheck == true) {
					session_start(); # login the user with a session using a global session variable
					# $_SESSION['userId'] = $row['idUsers']; # userId is the name of the session variable
					# $_SESSION['userUid'] = $row['uidUsers'];

					$_SESSION['id'] = $row['idUsers'];
         	$_SESSION['uid'] = $row['uidUsers'];
         	$_SESSION['email'] = $row['emailUsers'];
					header("Location: ../index.php?login=success");
					exit();
				}
				else {
					header("Location: ../index.php?error=wronguidpwd");
					exit();
				}
			}
			else {
				header("Location: ../index.php?error=nouser");
				exit();		
			}
		}
	}
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
	header("Location: ../signup.php");
	exit();
}