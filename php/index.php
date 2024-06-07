<?php
// Database Konfigurasi
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'barista_cafe';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
