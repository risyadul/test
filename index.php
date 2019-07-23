<?php

// require the Faker autoloader
require_once 'vendor/autoload.php';
// alternatively, use another PSR-4 compliant autoloader
session_start();
require "controller/conn.php";

if ( isset($_SESSION['login']) ) {
	header("Location: view/view.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM pelanggan WHERE username = '$username'";
    $sql = mysqli_query($conn,$query);
    if ( mysqli_num_rows($sql) == 1 ) {
        
        $result = mysqli_fetch_array($sql);
        if ( $result['password'] == $password ) {
            $_SESSION['login'] = true;
            header("Location: view/view.php");
        }
    }
    $error = true;
}

$faker = Faker\Factory::create('id_ID');

echo $faker->text;


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
	<!-- content -->
	<div class="container" style="padding-top: 30px;">
		<h1 class="text-center">Silahkan Login</h1>
		<hr>
		<br>
        <br><br>
        <?if (isset($error)) : ?>
            <div class="alert alert-danger" role="alert">
            Username / Password Salah !
        <?endif?>
        <form action="" method="post">
            <div class="form-group" method="post">
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
	</div>
	<!-- endcontent -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>