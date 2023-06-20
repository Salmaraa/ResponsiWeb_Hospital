<?php
$servername = "localhost"; 
$port = 3306; 
$username = "root"; 
$password = ""; 
$database = "hospital"; 

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $database, $port);

// Memeriksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
