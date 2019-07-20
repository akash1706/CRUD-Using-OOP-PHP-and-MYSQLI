<?php

class Db
{
	
    protected function connect()
	{
		$servername = "localhost";
$username = "root";
$password = "";
$dbname="employee";

// Create connection
$conn = mysqli_connect("localhost","root","","employee");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
return $conn;
	}
}

?>