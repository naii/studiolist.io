<?php  
# Database (connection) handler

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "UE9y4uiYLHF6fKpGdo";
$dBName = "loginsystem";

# this line makes the connection to the database
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

# check if connection failed/didn't work
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
