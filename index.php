<?php  
require 'conn.php';

$sql = "SELECT * FROM produk";

$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>

	<div class="container">
		<h1>Data Produk</h1>
		<table class="table abtable-hover">
			<tr>
				<th>No.</th>
				<th>Nama Produk</th>
				<th>Aksi</th>
			</tr>
			<?php $i = 1?>
			<?php foreach ($query as $data) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $data['namaProduk'] ?></td>
					<td>
						<a href="view/view.php"><button class="btn btn-info btn-sm">View Data</button></a>
					</td>
				</tr>
				<?php $i++ ?>
			<?php endforeach ?>
		</table>
	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>