<?php
include "../conn.php";

$id = $_GET["id"];
$query = "DELETE FROM siswa_data WHERE id=$id";
// echo $query;

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Hapus Data Berhasil'); document.location.href = '../starter2.php'</script>";

}else{
    echo "Error Saat Menghapus Data";
}
mysqli_close($conn);
?>