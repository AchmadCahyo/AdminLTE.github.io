<?php
include "../conn.php";

if (isset($_POST['tambah'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
}

$sql = "INSERT INTO siswa_data (nis, nama, ttl, gender, alamat) VALUES ('$nis', '$nama', '$ttl', '$gender', '$alamat')";

// echo $sql;

$query = mysqli_query($conn, $sql);

if ($query) {
    header('location: ../starter2.php?status=sukses');
} else {
    header('location: ../starter2.php?status=gagal');
}
?>