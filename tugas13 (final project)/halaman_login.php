<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/halaman_login.css">
</head>
<body>
	<?php 
		include "koneksi.php";
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan']=="gagal_login") {
				echo "<script type='text/javascript'>alert('Username atau Password Salah!');</script>";
			}
		}
	?>
	<nav class="header">
		<ul>
			<li><a href="#">Lanang31</a></li>
		</ul>
	</nav>
	<h1>Selamat Datang</h1>
	<div id="login_box">
		<h2>LOG IN</h2>
		<form method="POST" action="login.php">
			<label>Username</label><br>
			<input type="text" name="username" placeholder="Username"><br>
			<label>Password</label><br>
			<input type="password" name="pass" placeholder="Password"><br>
			<input type="submit" name="masuk" value="Login">
			<input type="submit" name="daftar" class="loginbutton" value="daftar">

		</form>
	
	</div>
	<footer>
		<p>&copy Copyright 2020</p>  
        <p>ILKOM 17</p>
	</footer>
</body>
</html>