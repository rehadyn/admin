<?php
session_start();
include "koneksi.php";
// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Mengecek data pengguna di database
$sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Pengguna ditemukan ke halam index
    header("location:app/index.php?page=dashboard");
    $user =mysqli_fetch_array($result);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = $user['level'];

} else if (($username == "") || ($password == "")) {
    header("location:index.php?error=1");

} else {
    header("location:index.php?error=2");
}


// Menutup koneksi database
$conn->close();
?>