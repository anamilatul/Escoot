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
/*Style untuk judul menu */
h2.menu {
	color : black;
	text-align : center;
}
/*Style untuk data barang */	
div.name {
	Padding: 15px;
	text-align: left;
	font-weight: bold;

}

div.desc {
  padding: 15px;
  text-align: justify;

}

div.price {
	padding: 15px;
	text-align: left;
	color: red;

}
div.diskon {
	padding: 15px;
	text-align: left;
	color: blue;
}

/* Style untuk form */

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #2E9AFE;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #819FF7;
}

.container {
  border-radius: 5px;
  padding: 20px;
}
.report {
	height : 40px;
	float : justify;
	width : 100 %;
	margin : 10px;
	padding : 6px;
	background-color : #2E9AFE;
	color : white;
	font-weight : bold;
	text-align : center;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
</head>

<body background="n.jpg">

<div class="header">
	<h1>Idn Electric Scooter</h1>
	<p>Menjual Berbagai Macam Skuter Listrik</p>
</div>

<div class="topnav">
	<a href="http://localhost/uas">Home</a>
	<a href="http://localhost/uas/pesan.php">Pemesanan</a>
	<a href="http://localhost/uas/buku_tamu.html">Buku Tamu</a>
</div>

<div class="container">
	<h2 class="menu" >Form Pemesanan</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projek";
$id_barang = "";


if (isset ($_GET['id_barang'])){
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$id_barang = $_GET['id_barang'];
	$sql = "SELECT * FROM t_barang WHERE id_barang=".$_GET['id_barang'];
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
		//    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		echo '
		<div class="row">
			<div class="col-25">
				<img src="produk/'.$row['ft_barang'].'" alt="Foto Produk" width="200" height="200">
			</div>
			<div class="col-75">
				<div class="name">'.$row['nm_barang'].'</div>
				<div class="price"><s>Rp.'.$row['harga'].'</s></div><div class="diskon">Rp.'.($row['harga']-($row['harga']*(10/100))).' (Diskon 10%)</div>
				<div class="desc">'.$row['deskripsi'].'</div>
				
			</div>
		</div>
		';


	}
	} else {
		echo "0 results";
	}
	$conn->close();
}


if (isset ($_GET['submit'])){
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO t_pesanan (id_barang, nama, hp, jumlah, alamat, kode_pos)
	VALUES ('".$_GET['id_barang']."', '".$_GET['nama']."', '".$_GET['hp']."', '".$_GET['jumlah']."', '".$_GET['alamat']."', '".$_GET['kode_pos']."' )";

	if ($conn->query($sql) === TRUE) {
		echo '
			<div class="row">
				<div class="report">
					Pemesanan telah diterima. Terima kasih telah berbelanja di Idn Electric Scooter.
				</div>
			</div>
		';
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}

?>

	<form action="pesan.php">
	<div class="row">
		<div class="col-25">
			<label for="id_barang">ID Barang</label>
		</div>
		<div class="col-75">
			<input type="text" id="id_barang" name="id_barang" value="<?php echo $id_barang ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="jumlah">Jumlah Barang</label>
		</div>
		<div class="col-75">
			<select id="jumlah" name="jumlah">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="nama">Nama</label>
		</div>
		<div class="col-75">
			<input type="text" id="nama" name="nama" placeholder="Nama anda...">
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="alamat">Alamat</label>
		</div>
		<div class="col-75">
			<textarea id="alamat" name="alamat" placeholder="Alamat rumah anda..." style="height:200px"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="kode_pos">Kode Pos</label>
		</div>
		<div class="col-75">
			<input type="text" id="kode_pos" name="kode_pos" placeholder="Kode Pos anda...">
		</div>
	</div>
		<div class="row">
		<div class="col-25">
			<label for="hp">Nomor HP</label>
		</div>
		<div class="col-75">
			<input type="text" id="hp" name="hp" placeholder="Nomor HP anda...">
		</div>
	</div><br>
	<div class="row">
		<input type="submit" name="submit" value="Submit">
	</div>
	</form>
</div>

</body>
</html>
