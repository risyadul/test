<?php
require "../conn.php";
$id = $_GET['id'];

$query = "DELETE FROM produk WHERE id_produk = $id";

$result = mysqli_query($conn, $query);

if ($result) {
    header("Location:../../view/produk/index.php");
}else{
    echo "Gagal";
}