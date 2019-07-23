<?
require "../conn.php";

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$id_merk = $_POST['id_merk'];
$id_kategori = $_POST['id_kategori'];

$query = "UPDATE produk SET id_produk = '$id_produk', nama_produk = '$nama_produk', warna = '$warna', jumlah = '$jumlah', harga = '$harga', id_merk = '$id_merk', id_kategori = '$id_kategori' WHERE id_produk = '$id_produk'";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location:../../view/produk/index.php");
}else{
    echo "Erorr :" . $result . "<br>" . mysqli_error($conn) ;
}