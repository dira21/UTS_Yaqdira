<?php
#1 Meng-koneksikan PHP ke MYSQL
include("koneksi.php"); 

#2 Mengambil value dari form tambah
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

#3 Query Insert(proses tambah data)
$query = "UPDATE buku SET judul_buku='$judul_buku', pengarang='$pengarang', tahun_terbit='$tahun_terbit', kategori='$kategori' WHERE id_buku='$id_buku'";

$edit = mysqli_query($koneksi, $query);

#4 Jika berhasil triggernya apa?
if($edit){
    header("location:index.php");
}else{
    echo "Data gagal diedit";
}
?> 