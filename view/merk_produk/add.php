<?
session_start();
if ( !isset($_SESSION['login']) ) {
	header("Location: ../../index.php");
}
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
		<h1 class="text-center">Tambah Form Merk Produk</h1>
		<hr>
		<br>
        <!-- start form insert -->
        <form action="../../controller/merk_produk/insert.php" method="post">
            <div class="form-group row">
                <label for="merk" class="col-sm-2">Nama Merk Produk</label>
                <input class="form-control col-sm-10" type="text" class="form-control" name="nama_merk" placeholder="Masukan Nama Merk Produk">
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