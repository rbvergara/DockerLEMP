<?php
echo "<h1>Hello World!</h1>";

// Check MariaDB connection
$server   = "mariadb";
$username = "root";
$password = "root";
$database = "mysql";
$con = mysqli_connect($server, $username, $password, $database);
if (mysqli_connect_errno()) {
	echo "<h3 style=\"color:red; font-weight:bold;\">Failed to connect to MariaDB:</h3> " . mysqli_connect_error();
} else {
	echo "<h3 style=\"color:blue; font-weight:bold;\">Connected to MariaDB !!!</h3>";
}
