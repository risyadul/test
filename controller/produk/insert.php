<?php
require "../conn.php";

$nama_produk = $_POST['nama_produk'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$id_merk = $_POST['id_merk'];
$id_kategori = $_POST['id_kategori'];

$query = "INSERT INTO produk VALUES(NULL, '$nama_produk', '$warna', '$jumlah', '$harga', '$id_merk', '$id_kategori')";

$sql = mysqli_query($conn, $query);

if ($sql) {
    header('Location: ../../view/produk/index.php');
}else{
    echo "Eror" . $sql . "<br>" . mysqli_error($conn);

}