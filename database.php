<?php
$servername = "localhost";
$admin = "root";
$password = "";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $admin, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "
CREATE TABLE customers(
   
   username varchar(255),
    password varchar(255),
	phone number int(10)
    
);

if ($conn->query($sql) === TRUE) {
    echo "Table customers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
