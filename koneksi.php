<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "reza_databas";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menutup koneksi
mysqli_close($conn);
?>