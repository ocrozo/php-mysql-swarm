<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	echo "<h1>Server Information version 0</h1>";
	
	echo "===> Check server info...<br />";
	echo "Server hostname: ".gethostname()."<br />";
	echo "Server address: ".$_SERVER['SERVER_ADDR']."<br />";
#	echo phpinfo();
?>