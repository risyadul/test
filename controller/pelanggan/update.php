<?
require "../conn.php";

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "UPDATE pelanggan SET id_pelanggan = '$id_pelanggan', nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', username = '$username', password = '$password' WHERE id_pelanggan = '$id_pelanggan'";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location:../../view/pelanggan/index.php");
}else{
    echo "Erorr :" . $result . "<br>" . mysqli_error($conn) ;
}