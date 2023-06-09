<html>
    <head>
    <h1>Menampilkan Tabel</h1>
    </head>

    <body>
        <center>
        <h3>Data pengguna</h3>
        <table border="1" class="table">
            <tr>
                <th>total harga</th>
                <th>tanggal mulai</th>
                <th>tanggal selesai</th>
                <th>paket yang diambil</th>
            </tr>
        <?php
            include "sql.php";
            $query_mysql = mysqli_query($host,"SELECT * FROM tabel_pemesanan");
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $data['total_harga']; ?></td>
                <td><?php echo $data['tanggal_mulai']; ?></td>
                <td><?php echo $data['tanggal_selesai']; ?></td>
                <td><?php echo $data['paket_yang_diambil']; ?></td>
            </tr>
            <?php } ?>
    
        <table>
        </center>
    <body>
<html>