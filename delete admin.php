<?php

include_once("sql.php");

$nama_kegiatan= $_GET['nama_kegiatan'];
 

$result = mysqli_query($mysqli, "SELECT * FROM kursus WHERE nama_kegiatan =$nama_kegiatan");


mysqli_query($mysqli, "DELETE FROM kursus WHERE nama_kegiatan =$nama_kegiatan");

 


header("location:kursus.php");
?>