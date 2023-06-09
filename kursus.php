<html>
    <head>
    <h1>Menampilkan Tabel</h1>
    </head>

    <body>
        <center>
        <h3>Data pengguna</h3>
        <table border="1" class="table">
            <tr>
                <th>nama kegiatan</th>
                <th>penyelnggara</th>
                <th>tanggal mulai</th>
                <th>tanggal selesai</th>
                <th>keterangan</th>
                <th>gambar tempat kursus</th>
                <th>admin</th>
                <th>harga paket kursus</th>
        <?php
            include "sql.php";
            $query_mysql = mysqli_query($db,"SELECT * FROM kursus");
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>\
                <td><?php echo $data['nama_kegiatan']; ?></td>
                <td><?php echo $data['penyelnggara']; ?></td>
                <td><?php echo $data['tanggal_mulai']; ?></td>
                <td><?php echo $data['tanggal_selesai']; ?></td>
                <td><?php echo $data['keterangan']; ?></td>
                <td><?php echo $data['gambar_tempat_kursus']; ?></td>
                <td><?php echo $data['admin']; ?></td>
                <td><?php echo $data['harga_paket_kursus']; ?></td>
                <td><a href="delete.php?nama_kegiatan=<?= $data  ?>" class="btn btn-danger">Delete Data</a>
</td>
            </tr>

            <?php } ?>
    
        <table>
        </center>
    <body>
<html>