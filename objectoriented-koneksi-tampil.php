<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";

//Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

//Mengecek koneksi
if ($conn->connect_error) {
	die("Koneksi Gagal : ".$conn->connect_error);
}

$sql="SELECT kode, negara, champion FROM liga";
$hasil = $conn->query ($sql);

if($hasil->num_rows >0){

	//Output dari setiap row
	while ($baris = $hasil->fetch_assoc()) {
		echo "Liga ".$baris["negara"];
		echo " mempunyai ".$baris["champion"];
		echo " wakil di liga champion <br> ";
		
	}
} else{
	echo "0 hasil";
}

$conn -> close();
?>