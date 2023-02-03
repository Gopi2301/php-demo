<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number =$_POST['number'];

$sql = "INSERT INTO contacts (name, email, password, number) VALUES ('$name', '$email', '$password', '$number')";

if ($conn->query($sql) === TRUE) {
    echo "Data submitted successfully!";
} else {
    echo "Error submitting data!";
}

$conn->close();

?>