<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	echo "<img src='logo-square.png' height='60' style='float: left; margin-right: 10px;' />";
	echo "<h1>Server Connection Information version 2.0</h1>";
	
	echo "===> Test MySQL connection...<br />";
	$servername = "mysql";
	$username = "docker";
	$password = "docker";
	echo " hostname: ".$servername."<br />";
	echo " username: ".$username."<br />";
	echo " password: ".$password."<br />";
	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	    echo "Connection failed: ". $conn->connect_error."<br />";
	} else {
		echo "Connected successfully<br />";	
	}
	echo "<br />";
	echo "===> Check server info...<br />";
	echo "Server hostname: ".gethostname()."<br />";
	echo "Server address: ".$_SERVER['SERVER_ADDR']."<br />";
#	echo phpinfo();
?>