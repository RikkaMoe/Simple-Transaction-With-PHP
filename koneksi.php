<?php 

$conn = mysqli_connect("localhost","root","","db_kece");

// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>