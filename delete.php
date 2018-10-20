<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "mahasiswa";

$conn = new mysqli($host, $username, $password, $db);

$nim = $_GET['nim'];

$qry = "DELETE FROM data_mhs WHERE nim = '$nim'";
$has = mysqli_query($conn, $qry);

if ($has) {
	echo "Data telah dihapus...";
	# code...
}else{
	echo "Data Gagal dihapus";
}
?>