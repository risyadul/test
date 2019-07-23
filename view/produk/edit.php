
<?php
session_start();
require "../../controller/conn.php";

if ( !isset($_SESSION['login']) ) {
	header("Location: ../../index.php");
}

$id = $_GET['id'];
$query = "SELECT * FROM produk WHERE id_produk = $id";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Latihan Mekanisme Web</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="controller/conn.php">Cek Koneksi	</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="../view.php">Daftar Data</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Master Data
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<a class="dropdown-item" href="index.php">Merk Produk</a>
			<a class="dropdown-item" href="../kategori_produk/index.php">Kategori Produk</a>
			<a class="dropdown-item" href="../produk/index.php">Produk</a>
			<a class="dropdown-item" href="../transaksi/index.php">Transaksi</a>
			<a class="dropdown-item" href="../pelanggan/index.php">Pelanggan</a>
			</div>
		</li>
		</ul>
		<form class="form-inline my-2 my-lg-0" method="POST" >
			<button type="submit" name="cari" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
		</form>
	</div>
	</nav>
    
	<!-- content -->
	<div class="container" style="padding-top: 30px;">
		<h1 class="text-center">Edit Form Merk Produk</h1>
		<hr>
		<br>
        <!-- start form insert -->
        <form action="../../controller/produk/update.php" method="post">
            <div class="form-group row">
                <input type="hidden" name="id_produk" value="<?= $arr['id_produk'] ?>">
                <label for="merk" class="col-sm-2">Nama Produk</label>
                <input class="form-control col-sm-10" type="text" class="form-control" value="<?= $arr['nama_produk'] ?>" name="nama_produk">
            </div>
            <div class="form-group row">
                <label for="merk" class="col-sm-2">Warna</label>
                <input class="form-control col-sm-10" type="text" class="form-control" value="<?= $arr['warna'] ?>" name="warna">
            </div>
            <div class="form-group row">
                <label for="merk" class="col-sm-2">Jumlah</label>
                <input class="form-control col-sm-10" type="text" class="form-control" value="<?= $arr['jumlah'] ?>" name="jumlah">
            </div>
            <div class="form-group row">
                <label for="merk" class="col-sm-2">Harga</label>
                <input class="form-control col-sm-10" type="text" class="form-control" value="<?= $arr['harga'] ?>" name="harga">
            </div>
            <div class="form-group row">
                <label for="merk" class="col-sm-2">Id Merk</label>
                <select name="id_merk" class="custom-select col-sm-10">
                    <option selected>Open this select menu</option>
                    <?php foreach($sql as $data) : ?>
                    <option <? if($data['id_merk'] == $arr['id_merk']) : ?> selected="selected" <? endif ?>><?= $data['id_merk'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group row">
                <label for="merk" class="col-sm-2">Id Kategori</label>
                <select name="id_kategori" class="custom-select col-sm-10">
                    <option selected>Open this select menu</option>
                    <?php foreach($kategori as $data4) : ?>
                    <option <? if($data4['id_kategori'] == $arr['id_kategori']) : ?> selected="selected" <? endif ?>><?= $data4['id_kategori'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Simpan</button>
        </form>
        <!-- finish form instert -->
	</div>
	<!-- endcontent -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="../../assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>