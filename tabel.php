<html>
<head>
    <title>Menampilkan Tabel</title>
</head>
<body>
    <center>
        <h1>Data pengguna</h1>
        <table border="1" class="table">
            <thead>
                <tr>
                    <th>nama pengguna</th> 
                    <th>email pengguna</th>
                    <th>password pengguna</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "sql.php";
                $query_mysql = mysqli_query($db, "SELECT nama_pengguna, email_pengguna, password_pengguna FROM pengguna");
                while($data = mysqli_fetch_assoc($query_mysql)){
            ?>
                <tr>
                    <td><?php echo $data['nama_pengguna']; ?></td>
                    <td><?php echo $data['email_pengguna']; ?></td>
                    <td><?php echo $data['password_pengguna']; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </center>
</body>
</html>
