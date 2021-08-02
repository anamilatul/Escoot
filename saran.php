<!DOCTYPE html>
<html lang="en">
<head>
<title>Electric Scooter</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {  box-sizing: border-box;
}
body {
  margin: 0;}
/* Style the header */
.header {
  background-color: #E0E6F8;
  padding: 20px;
  text-align: center;
}
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #2E2E2E;
}
/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #FFFFFF;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
</style>

</head>
<body background="n.jpg" >

<div class="header">
	<h1>Idn Electric Scooter</h1>
	<p>Menjual Berbagai Macam Skuter Listrik</p>
</div>

<div class="topnav">
	<a href="http://localhost/uas">Home</a>
	<a href="http://localhost/uas/pesan.php">Pemesanan</a>
	<a href="http://localhost/uas/buku_tamu.html">Buku Tamu</a>
</div>
	<h2 align="left">Data dari penulis buku tamu di Idn Electric Scooter</h2>
	<p align="left">Tabel data dari penulis buku tamu : </p>
<?php
	if (isset($_GET['submit'])) {
		echo"<table border=1>
		<tr><td>Nama Lengkap</td><td>:".$_GET['nama_lengkap']."</td></tr>
		<tr><td>Saran</td><td>:</td></tr>
		<tr><td colspan=2>".$_GET['saran']."</td></tr>
	</table>";
	}else{
		echo"<h2>Halaman ini tidak bisa dipanggil secara langsung</h2>";
	}
?>
	

</body>
</html>