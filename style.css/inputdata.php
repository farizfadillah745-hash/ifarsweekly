<?php
require'fungsi.php';

if (isset($_POST["kirim"]))
{
    if(tambahdata($_POST) > 0)
    {
        echo "<script> 
        alert('Data berhasil ditambahkan!');
        window.location.href='mahasiswa.php;
        </script>"; 
    }else{
        echo "<script> 
        alert('Data gagal ditambahkan!');
        window.location.href='mahasiswa.php;
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa | WEB INFORMATIKA 2026</title>
</head>
<body>
    <h1>
            Data Mahasiswa
        </h1>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                 <td> 
                    <a href="index.php">Home</a>
                 </td>
                 <td>
                    <a href="Profile.php">Profile</a>
                 </td>
                 <td> 
                    <a href="content.php">Contact</a>
                 </td>
                 <td>
                    <a href="mahasiwa.php">Data Mahasiswa</a>
                 </td>
            </tr>
        </table>
        <h2>Input Data Mahasiswa</h2>
        <form>
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td> <input type="text" name="nama" id="nama" /></td>
                </tr>
                <tr>
                    <td><label for="nim">NIM</label></td>
                    <td>:</td>
                    <td><input type="text" name="nim" id="nim" /> </td>
                </tr>
                <tr>
                    <td><label for="prodi">Program Studi</label></td>
                    <td>:</td>
                    <td><input type="number" name="prodi" id="" >prodi </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td><input type="number" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="nohp">NO. HP</label></td>
                    <td>:</td>
                    <td><input type="file" name="no_hp" id="no_hp"></td>
                </tr>
            </table>
            <button type="submit" name="kirim" value="Kirim Data">
        </form>
        <hr>
</body>
</html>