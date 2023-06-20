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
$patient_name= mysqli_real_escape_string($conn, $data['name']);
$email = mysqli_real_escape_string($conn, $data['email']);
$phone = mysqli_real_escape_string($conn, $data['phone']);
$app_date = mysqli_real_escape_string($conn, $data['app_date']);
$age = mysqli_real_escape_string($conn, $data['age']);
$doctor = mysqli_real_escape_string($conn, $data['doctor']);
$message = mysqli_real_escape_string($conn, $data['message']);

$sql = "INSERT INTO appointment(name, email, phone, app_date, age, doctor,message) VALUES ('$patient_name', '$email', '$phone', '$app_date', '$age', '$doctor', '$message')";

if (mysqli_query($conn, $sql)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>