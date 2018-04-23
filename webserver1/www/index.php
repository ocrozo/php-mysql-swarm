<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	echo "<img src='logo-square.png' height='60' style='float: left; margin-right: 10px;' />";
	echo "<h1>Server Connection Information version 0.5</h1>";
	
	echo "===> Check server info...<br />";
	echo "Server hostname: ".gethostname()."<br />";
	echo "Server address: ".$_SERVER['SERVER_ADDR']."<br />";
#	echo phpinfo();
?>