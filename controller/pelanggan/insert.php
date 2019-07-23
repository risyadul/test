<?
require "../conn.php";
require_once "../../vendor/autoload.php";
$faker = Faker\Factory::create('id_ID');

for ($i=0; $i <= 100 ; $i++) { 
    $result = mysqli_query($conn, "INSERT INTO pelanggan 
    VALUES(NULL, '$faker->name', '$faker->address', 'L', '$faker->name', 12345)");
}
// $nama_pelanggan = $_POST['nama_pelanggan'];
// $alamat = $_POST['alamat'];
// $jenis_kelamin = $_POST['jenis_kelamin'];
// $username = $_POST['username'];
// $password = $_POST['password'];

// $query = "INSERT INTO pelanggan 
//             VALUES(NULL, '$nama_pelanggan', '$alamat', '$jenis_kelamin', '$username', '$password')";
// $result = mysqli_query($conn, $query);


if ($result) {
    header("Location: ../../view/pelanggan/index.php");
}else{
    echo "Error" . $query . "<br>" . mysqli_error($conn);
}