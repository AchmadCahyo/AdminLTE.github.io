<?php
include "../conn.php";

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];


    $sql = "UPDATE siswa_data SET nis = '$nis', nama = '$nama', ttl = '$ttl', gender = '$gender', alamat = '$alamat'  WHERE id = $id";

    $mysql = mysqli_query($conn, $sql);
    // echo $sql;

    if ($sql) {
        header('location: ../starter2.php');
    } else {
        die("Gagal Menyimpan Perubahan");
    }
} else {
    die("Akses Ubah Gagal");
}