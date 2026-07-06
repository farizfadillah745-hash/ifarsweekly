<?php
session_start();

include "koneksi.php";

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");

$data=mysqli_fetch_assoc($query);

if($data){

if(password_verify($password,$data['password'])){

$_SESSION['login']=true;
$_SESSION['id']=$data['id'];
$_SESSION['nama']=$data['nama'];

header("Location: dashboard.php");

}else{

echo "Password salah";

}

}else{

echo "Username tidak ditemukan";

}

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>

<body>

<h2>Login</h2>

<form method="POST">

Username

<input type="text" name="username">

<br><br>

Password

<input type="password" name="password">

<br><br>

<button name="login">
Login
</button>

</form>

<a href="register.php">
Register
</a>

</body>
</html>