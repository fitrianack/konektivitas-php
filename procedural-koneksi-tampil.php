<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";

//Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Mengecek koneksi
if (!$conn) {
	die("Koneksi Gagal : ".mysqli_connect_error());
}

$sql="SELECT kode, negara, champion FROM liga";
$hasil = mysqli_query($conn, $sql);

if(mysqli_num_rows($hasil)>0){

	//Output dari setiap row
	while ($baris = mysqli_fetch_assoc($hasil)) {
		echo "Liga ".$baris["negara"];
		echo " mempunyai ".$baris["champion"];
		echo " wakil di liga champion <br> ";
		
	}
} else{
	echo "0 hasil";
}

mysqli_close($conn);
?>