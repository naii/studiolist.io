<?php 

	session_start();
	session_unset(); # create session variables
	session_destroy();
	header("Location: ../index.php")