<?php
require "../conn.php";
$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

$query = "UPDATE kategori_produk SET nama_kategori='$nama_kategori' WHERE id_kategori = '$id_kategori'";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location:../../view/kategori_produk/index.php");
}else{
    echo "gagal";
}