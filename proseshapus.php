<?php
# koneksi
include_once("koneksi.php");
# ID hapus
$idhapus = $_GET['id_buku'];
# menulis query
$qry = "DELETE FROM buku WHERE id_buku = '$idhapus'";
# menjalankan query
$hapus = mysqli_query($koneksi,$qry);
# mengalihkan halaman
header("location:index.php");
?>