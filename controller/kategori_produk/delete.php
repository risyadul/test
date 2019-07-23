<?php
require "../conn.php";
$id = $_GET['id'];

$query = "DELETE FROM kategori_produk WHERE id_kategori = $id";

$result = mysqli_query($conn, $query);

if ($result) {
    header("Location:../../view/kategori_produk/index.php");
}else{
    echo "Gagal";
}