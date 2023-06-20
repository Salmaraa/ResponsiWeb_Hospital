<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$data = $_POST;
$name = mysqli_real_escape_string($conn, $data['name']);
$email = mysqli_real_escape_string($conn, $data['email']);
$subject = mysqli_real_escape_string($conn, $data['subject']);
$message = mysqli_real_escape_string($conn, $data['message']);

$sql = "INSERT INTO question(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if (mysqli_query($conn, $sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>