<?php
include "auth.php";
?>

<!DOCTYPE html>

<html>

<head>

<title>Dashboard</title>

</head>

<body>

<h2>

Selamat Datang

<?php echo $_SESSION['nama']; ?>

</h2>

<hr>

<a href="index.php">Home</a>

|

<a href="mahasiswa.php">Data Mahasiswa</a>

|

<a href="logout.php">Logout</a>

</body>

</html>