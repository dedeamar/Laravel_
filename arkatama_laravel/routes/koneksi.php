<?php
// Informasi koneksi ke database
$servername = "localhost:3306";
$username = "root";
$password = "";
$database ="arkatama_store";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password,$database);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo '';
?>
