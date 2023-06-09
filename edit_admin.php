<?php
include("sql.php");

if(isset($_POST['submit'])){
  $id = $_POST['id_kursus'];
  $nama_kegiatan = $_POST['nama_kegiatan'];
  $penyelenggara = $_POST['penyelenggara'];
  $tanggal_mulai = $_POST['tanggal_mulai'];
  $tanggal_selesai = $_POST['tanggal_selesai'];
  $keterangan = $_POST['keterangan'];
  $admin = $_POST['admin'];
  $harga_paket_khusus = $_POST['harga_paket_khusus'];

  // Check if file is uploaded
  if(isset($_FILES['gambar_tempat_kursus'])){
    $file_name = $_FILES['gambar_tempat_kursus']['name'];
    $file_size = $_FILES['gambar_tempat_kursus']['size'];
    $file_tmp = $_FILES['gambar_tempat_kursus']['tmp_name'];
    $file_type = $_FILES['gambar_tempat_kursus']['type'];
    // Check file extension
    $file_ext = strtolower(end(explode('.',$_FILES['gambar_tempat_kursus']['name'])));
    $extensions = array("jpeg","jpg","png");
    if(in_array($file_ext,$extensions) === false){
      echo "Error: Only JPEG, JPG, and PNG files are allowed.";
      exit();
    }
    // Upload file to server
    move_uploaded_file($file_tmp,"uploads/".$file_name);
  }

  $sql = "UPDATE kursus SET nama_kegiatan='$nama_kegiatan', penyelenggara='$penyelenggara', tanggal_mulai='$tanggal_mulai', tanggal_selesai='$tanggal_selesai', keterangan='$keterangan', admin='$admin', harga_paket_khusus='$harga_paket_khusus'";
  if(isset($file_name)){
    $sql .= ", gambar_tempat_kursus='$file_name'";
  }
  $sql .= " WHERE id_kursus=$id";

  if(mysqli_query($connection, $sql)){
    echo "Data berhasil diupdate.";
  } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
}

mysqli_close($db);
?>