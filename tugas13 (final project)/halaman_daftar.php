<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Final Project Perpustakaan - Halaman Daftar [17]</title>
	<link rel="stylesheet" type="text/css" href="CSS/halaman_daftar.css">
</head>
<body style="background-color: white">
	<nav class="header">
		<ul>
			<li><a href="#">Lanang31</a></li>
			
		</ul>
	</nav>
	<h1>PENDAFTARAN</h1>
	<div id="daftar_box" style="background-color: #c5e3ff">
		<h2 style="background-color:#c3e2ff">DAFTAR</h2>
		<form method="POST" action="daftar.php" style="background-color: #c3e2ff">
			<input type="text" name="nama" placeholder="Nama">
            <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
            <input type="radio" name="jk" value="Perempuan">Perempuan
			<input type="text" name="no_hp" placeholder="Nomor Hp/Telp"></td>
            <textarea name="alamat" placeholder="Alamat"></textarea></td>
            <input type="text" name="user" placeholder="Username"></td>
            <input type="password" name="pass" placeholder="Password"></td>
			<input type="submit" name="daftar" value="Daftar"></td>
		</form>
	</div>
	<footer>
		<p>&copy Copyright 2020</p>  
        <p>ILKOM17</p>
	</footer>
</body>
</html>