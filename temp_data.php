<?php

 
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "healthy_db"; 

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) { 
	die("Connection failed: " . mysqli_connect_error()); 
} 

echo "Database connection is OK<br>"; 

if(isset($_POST["bt"])) {

	$bt = $_POST["bt"];


	$sql = "INSERT INTO temperature_sensor (Celsius) VALUES (".$bt.")"; 

	if (mysqli_query($conn, $sql)) { 
		echo "\nNew record created successfully"; 
	} else { 
		echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
	}
}

?>