<?php
#1 Meng-koneksikan PHP ke MYSQL
include("koneksi.php"); 

#2 Mengambil value dari form tambah
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

#3 Query Insert(proses tambah data)
$query = "INSERT INTO buku (judul_buku, pengarang, tahun_terbit, kategori) VALUES ('$judul_buku', '$pengarang', '$tahun_terbit', '$kategori')";

$tambah = mysqli_query($koneksi, $query);

#4 Jika berhasil triggernya apa?
if($tambah){
    header("location:index.php");
}else{
    echo "Data gagal ditambah";
}
?> 