<?php

$koneksi = mysqli_connect("localhost", "root", "", "ifreyweekly");

function tampilandata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);

    $rows = []; //lemari

    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row; //mengambil isi lemari (baju) dan menaruh ke wadah (array)
    }

    return $rows;
}
function tambahdata($data, $files)
{
    global $koneksi;

    $nama = htmlspecialchars($_POST["nama"]);
    $nim = htmlspecialchars($_POST["NIM"]);
    $prodi = htmlspecialchars($_POST["Prodi"]);
    $email = htmlspecialchars($_POST["email"]);
    $no_hp = htmlspecialchars($_POST["no_hp"]);
    $foto = htmlspecialchars($_POST["foto"]);

    $namafoto = $files["name"];
    $tempfoto = $files["tmp_name"];

    if(move_uplod_file($tmpfoto, $path))
        
    $query = "INSERT INTO mahasiswa (nama, nim, prodi, email, no_hp, foto)
     VALUES (  '', '$nama', '$nim', '$prodi', '$email', 'no_hp', 'foto')";

    $hasil = mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);

}

function hapusdata($id)
{
    global $koneksi;
    $query ="DELETE FROM mahasiswa WHERE id=$id";
    
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
function ubahdata($data, $id)
{
    global $koneksi;
    $nama = htmlspecialchars($_POST["nama"]);
    $nim = htmlspecialchars($_POST["NIM"]);
    $prodi = htmlspecialchars($_POST["Prodi"]);
    $email = htmlspecialchars($_POST["email"]);
    $no_hp = htmlspecialchars($_POST["no_hp"]);
    $foto = htmlspecialchars($_POST["foto"]);

    $query = "UPDATE mahasiswa SET
              nama ='$nama' ,
              nim ='$nim',
              jurusan ='$jurusan',
              email ='$email',
              no_hp ='$no_hp',
              foto ='$foto',
              WHERE id= '$id'

     mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
?>