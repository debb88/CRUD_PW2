<?php
$serverName = "localhost";
$username = "root";
$password = "";
$database = "comic_system";

// Membuat Koneksi 
$conn = new mysqli($serverName, $username, $password, $database);

if ($conn->connect_error) {
    die("Konkesi Error: " . $conn->connect_error);
}