<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbn = "latihan";

try{
	$koneksi = new PDO("mysql:host=$server;dbname=$dbn","$user");
	$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$hasil = $koneksi-> query('SELECT * FROM liga');
	while ($row= $hasil->fetch(PDO::FETCH_ASSOC)) {
		echo "$row[kode] $row[negara] $row[champion]";
		echo "<br>";
	}
	$koneksi=null;
} catch(PDOException $e){
	echo "Connectiopn Gagal! " .$e->getMessage();
	die();
}

?>