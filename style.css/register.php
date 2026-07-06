<?php
include "koneksi.php";

if(isset($_POST['register'])){

$nama=$_POST['nama'];
$username=$_POST['username'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

mysqli_query($conn,"INSERT INTO users(nama,username,password)
VALUES('$nama','$username','$password')");

header("Location: login.php");

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>

<body>

<h2>Register</h2>

<form method="POST">

Nama
<input type="text" name="nama">

<br><br>

Username
<input type="text" name="username">

<br><br>

Password
<input type="password" name="password">

<br><br>

<button name="register">
Daftar
</button>

</form>

<a href="login.php">Login</a>

</body>
</html>