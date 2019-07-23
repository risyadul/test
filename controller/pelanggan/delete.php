<?
require "../conn.php";

$id = $_GET['id'];

$query = "DELETE FROM pelanggan WHERE id_pelanggan = $id";

$result = mysqli_query($conn, $query);

if ($result) {
    header("Location:../../view/pelanggan/index.php");
}else{
    echo "Erorr : " . $query . "<br>" . mysqli_error($conn);
}