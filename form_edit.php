<?php
include "conn.php";

if (isset($_GET['edit'])) {
    header("location: index.php");
}

$id = $_GET["siswaid"];

$sql = "SELECT * FROM siswa_data WHERE id=$id";
// echo $sql;
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_array($query);

if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h2 class="text-center">Edit Data Siswa</h2>
    <br>
    <div class="container">
        <div class="border border-primary mt-3 p-3">
            <form action="siswa/conn_form_edit.php" method="POST">
                <div>
                    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
                </div>
                <br>
                <div>
                    <label for="">NIS : </label>
                    <input type="text" name="nis" class="form-control" value="<?php echo $siswa['nis'] ?>">
                </div>
                <br>
                <div>
                    <label for="">Nama : </label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $siswa['nama'] ?>">
                </div>
                <br>
                <div>
                    <label for="">Gender : </label>
                    <select name="gender" class="form-control" value="<?php echo $siswa['gender'] ?>">
                        <option value="0">Laki-Laki</option>
                        <option value="1">Perempuan</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="">Tanggal Lahir : </label>
                    <input type="date" class="form-control" name="ttl" value="<?php echo $siswa['ttl'] ?>">
                </div>
                <br>
                <div>
                    <label for="">Alamat : </label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $siswa['alamat'] ?>">
                </div>
                <input type="submit" value="Edit" class="btn btn-success" role="button" name="edit">
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>