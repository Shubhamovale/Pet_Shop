<?php

$servername = "localhost";
$username = ""; 
$password = ""; 
$dbname = "petbooking"; 


$conn = new mysqli( 'localhost','root','','','petbooking');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dogname = $_POST['dogname'];
$breed = $_POST['breed'];
$date = $_POST['date'];
$time = $_POST['time'];

// Prepare and execute SQL statement
$sql = "INSERT INTO appointments (name, email, phone, dogname, breed, date, time)
VALUES ('$name', '$email', '$phone', '$dogname', '$breed', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>