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

/*Style untuk Galeri */
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 250px;
  min-height: 500px;
  
}

div.gallery:hover {
  border: 1px solid #777;
  
}

div.gallery img {
  width: 100%;
  height: auto;
}
div.name {
	Padding: 15px;
	text-align: center;

}
div.name a {
	color: black;
	font-weight: bold;
	
}
div.name a:hover {
	color: blue;
}
div.desc {
  padding: 15px;
  text-align: justify;

}

div.price {
	padding: 15px;
	text-align: Right;
	color: red;

}
/*Style Untuk tombol beli*/

div.beli {
	Padding: 15px;
	text-align: center;
	color: white;
	background-color: #2E9AFE;

}
div.beli a {
	color: White;
	font-weight: bold;

}
div.beli a:hover {
	color: #0431B4;

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

<div class="row" >
	<div class="column">
		<h2 align="center">Galeri Produk</h2>
		
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM t_barang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
//    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	echo '
	<div class="gallery">
			<div class="name"><a href="pesan.php?id_barang='.$row['id_barang'].'">'.$row['nm_barang'].'</a></div>
			<img src="produk/'.$row['ft_barang'].'" alt="XIAOMI MIJIA" width="600" height="400">
			<div class="desc">'.$row['deskripsi'].'</div>
			<div class="price">Rp.'.$row['harga'].'</div>
			<div class="beli" ><a href="pesan.php?id_barang='.$row['id_barang'].'">
				<buttton type="button">Beli</button>
			</div>
	</div>
	';


  }
} else {
  echo "0 results";
}

$conn->close();
?>
		

	</div>
</div>

</body>
</html>
	