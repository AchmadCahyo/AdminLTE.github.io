<?php
session_start();
include "../conn.php";

if (isset($_POST["masuk"])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    // echo $result;
    header("location: ../starter2.php");
}
?>