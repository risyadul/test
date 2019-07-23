<?php

require "../conn.php";
require_once "../../vendor/autoload.php";
$faker = Faker\Factory::create('id_ID');

for ($i=0; $i <= 100 ; $i++) { 
    $result = mysqli_query($conn, "INSERT INTO merk 
    VALUES(NULL, '$faker->text')");
}

// $merk = $_POST['nama_merk'];

// $query = "INSERT INTO merk set nama_merk = '$merk'";

// $result = mysqli_query($conn, $query);

if ($result) {
    header("Location: ../../view/merk_produk/index.php");
}else{
    echo "gagal";
}