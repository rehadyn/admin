<?php
include('koneksi.php');

// buat variable
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

// buat query
$sql = "INSERT INTO tb_user (nama, username, password, level) VALUES ('$name', '$username', '$password', '$level')";
$query = mysqli_query($conn, $sql);

// menolak jika sudah ada data sebelumnya

// apakah query simpan berhasil?

// muncul notifikasi berhasil
if ($query) {
    header('location:../../app/index.php?page=adduser&status=sukses');
} else {
    header('location:../../app/index.php?page=user&status=gagal');
}
?>
