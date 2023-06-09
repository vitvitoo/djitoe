
                <?php
                if (isset($_POST['submit'])) {

                    //print_r($_FILES['gambar']);
                    $kategori = $_POST['kategori'];
                    $nama = $_POST['nama'];
                    $harga = $_POST['harga'];
                    $deskripsi = $_POST['deskripsi'];
                    $nama kegiatan = $_POST['status'];

                    $filename = $_FILES['gambar']['name'];
                    $tmp_name = $_FILES['gambar']['tmp_name'];

                    $type1 = explode('.', $filename);
                    $type2 = $type1[1];

                    $newname = 'produk' . time() . '.' . $type2;

                    $tipe_izin = array('jpg', 'jpeg', 'png', 'gif');

                    if (!in_array($type2, $tipe_izin)) {

                        echo 'Format File Tidak Diizinkan';
                    } else {
                        move_uploaded_file($tmp_name, './produk/' . $newname);
                    }

                    $insert = mysqli_query($conn, "INSERT INTO product VALUES (
                                            null,
                                            '" . $kategori . "',
                                            '" . $nama . "',
                                            '" . $harga . "',
                                            '" . $deskripsi . "',
                                            '" . $newname . "',
                                            '" . $status . "',
                                            null

                                            )");
                    if ($insert) {
                        echo 'Simpan data berhasil';
                        echo '<script>window.location="data-produk.php"</script>';
                    } else {
                        echo 'Gagal';
                    }
                }

                ?>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <small>Copyright &copy; 2023 - Farmishop</small>

        </div>
    </footer>
</body>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

