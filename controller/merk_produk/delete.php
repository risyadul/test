<?php
require "../conn.php";
$id = $_GET['id'];

$query = "DELETE FROM merk WHERE id_merk = $id";

$result = mysqli_query($conn, $query);

if ($result) {
    header("Location:../../view/merk_produk/index.php");
}else{
    echo "Gagal";
}