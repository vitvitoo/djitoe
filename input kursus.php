<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <center>
<form action="" method= "post">
<table>
    <tr>
        <td>nama kegiatan</td>
        <td><input type="text" name= "nama_kegiatan">  </td>
    </tr>
    <tr>
        <td>penyelenggara</td>
        <td><input type="text" name= "penyelnggara">  </td>
    </tr>
    <tr>
        <td>tanggal mulai</td>
        <td><input type="date" name= "tanggal_mulai">  </td>
    </tr>
     <tr>
        <td>tanggal selesai</td>
        <td><input type="date" name= "tanggal_selesai">  </td>
    </tr>
     <tr>
        <td>keterangan</td>
        <td><input type="text" name= "keterangan">  </td>
    </tr>
     <tr>
        <td>gambar</td>
        <td><input type="file" name= "gambar_tempat_kursus">  </td>
    </tr>
     <tr>
        <td>admin</td>
        <td><input type="text" name= "admin">  </td>
    </tr>
     <tr>
        <td>harga paket khusus</td>
        <td><input type="text" name= "harga_paket_kursus">  </td>
    </tr>
    <tr>
        <td></td>
        <td><input type= "submit" value="simpan" name="proses"></td>
    </tr>
</table>
</form>
</center>

<?php

if(isset($_POST['proses'])){
$nama_kegiatan = $_POST['nama_kegiatan'];
$penyelenggara = $_POST['penyelnggara'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_selesai = $_POST['tanggal_selesai'];
$keterangan = $_POST['keterangan'];
$gambar_tempat_kursus = $_FILES['gambar_tempat_kursus']['name'];
$admin = $_POST['admin'];
$harga_paket_kursus = $_POST['harga_paket_kursus'];


$koneksi = mysqli_connect("localhost", "root", "", "pendidikan_non_formal");
$query = "INSERT INTO kursus (nama_kegiatan, penyelnggara, tanggal_mulai, tanggal_selesai, keterangan, gambar_tempat_kursus, admin, harga_paket_kursus) VALUES ('$nama_kegiatan', '$penyelenggara', '$tanggal_mulai', '$tanggal_selesai', '$keterangan', '$gambar_tempat_kursus', '$admin', '$harga_paket_kursus')";
mysqli_query($koneksi, $query);


header("Location: halaman_lain.php");
}   
?>

</body>
</html>



