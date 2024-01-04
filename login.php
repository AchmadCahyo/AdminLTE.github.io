<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="border border-primary mt-5 ">
            <h3 class="text-center mt-5">Form Login</h3>
            <form action="siswa/conn_login.php" method="POST" class="m-3">
                <label for="">User Name : </label>
                <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
                <br>
                <label for="">Password : </label>
                <input type="password" class="form-control" placeholder="Masukkan Password" name="pass">
                <br>
                <input type="submit" value="Masuk" class="btn btn-primary" name="masuk">
                <!-- <h6 class="text-center m-4">Belum Punya Akun?
                    <a href="form_daftar.php" class="link-underline link-underline-opacity-0"> ->Daftar Di Sini<- </a>
                </h6> -->
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>