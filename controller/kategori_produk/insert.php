<?php

require "../conn.php";
require_once "../../vendor/autoload.php";
$faker = Faker\Factory::create('id_ID');

for ($i=0; $i <= 100 ; $i++) { 
    $result = mysqli_query($conn, "INSERT INTO kategori_produk 
    VALUES(NULL, '$faker->text')");
}


// $nama_kategori = $_POST['nama_kategori'];

// $sql = "INSERT INTO kategori_produk SET nama_kategori = '$nama_kategori'";

if ($result) {
    header("Location:../../view/kategori_produk/index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
