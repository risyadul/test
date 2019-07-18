<?php
require "conn.php";

$sql = "SELECT * FROM produk JOIN 
		merek ON produk.idMerek = merek.idMerek JOIN
		katagoriproduk ON produk.idKatagori = katagoriproduk.idKatagori";

$query = mysqli_query($conn, $sql);

if (isset($_POST["submit"])) {
	$namaProduk = $_POST['namaProduk'];
	$warna = $_POST['warna'];
	$jumlah = $_POST['jumlah'];
	$namaKatagori = $_POST['namaKatagori'];
	$namaMerek = $_POST['namaMerek'];

	$table1 = "INSERT INTO merek VALUES('', $namaMerek)";
	mysqli_query($conn, $table1);

	$table2 = "INSERT INTO katagoriproduk VALUES('', $namaKatagori)";
	mysqli_query($conn, $table2);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>tugas</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<h1 class="text-center">Data Produk</h1>

	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Produk
</button>

<br><br>

	<table class="table table-hover">
		<tr>
			<th>ID PRODUK</th>
			<th>NAMA PRODUK</th>
			<th>JUMLAH</th>
			<th>MEREK</th>
			<th>KATAGORI</th>
		</tr>
		<tr>
			<?php foreach ($query as $data) : ?>
				<td><?= $data['idProduk'] ?></td>
				<td><?= $data['namaProduk'] ?></td>
				<td><?= $data['jumlah'] ?></td>
				<td><?= $data['nama_merek'] ?></td>
				<td><?= $data['namaKatagori'] ?></td>
			<?php endforeach ?>
		</tr>
	</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
		  <div class="form-group">
		    <label for="namaProduk">Nama Produk</label>
		    <input type="text" name="namaProduk" class="form-control" id="namaProduk" aria-describedby="emailHelp" placeholder="Masukan Nama Produk">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Warna</label>
		    <input type="text" name="warna" class="form-control" id="exampleInputPassword1" placeholder="Masukan Warna">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Jumlah</label>
		    <input type="number" name="jumlah" class="form-control" id="exampleInputPassword1" placeholder="Masukan Jumlah">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Nama Katagori</label>
		    <input type="text" name="namaKatagori" class="form-control" id="exampleInputPassword1" placeholder="Masukan Katagori">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Nama Merek</label>
		    <input type="text" name="namaMerek" class="form-control" id="exampleInputPassword1" placeholder="Masukan Merek">
		  </div>
		<div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
	     </div>
		</form>
      </div>
      
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>