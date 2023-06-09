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
        <td>nama pengguna</td>
        <td><input type="text" name= "nama_pengguna">  </td>
    </tr>
    <tr>
        <td>email pengguna</td>
        <td><input type="text" name= "email_pengguna">  </td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="text" name= "password_pengguna">  </td>
    </tr>
    <tr>
        <td></td>
        <td><input type= "submit" value="simpan" name="proses"></td>
    </tr>
</table>
</form>
</center>

</body>
</html>




<?php
include "sql.php";

if (isset($_POST['proses'])){
    
    mysqli_query($host,"INSERT INTO pengguna SET
    nama_pengguna = '$_POST[nama_pengguna]',
    email_pengguna= '$_POST[email_pengguna]',
    password_pengguna = '$_POST[password_pengguna]'");
}
?>