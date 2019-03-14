<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] =='POST') {

	// Mendapatkan nilai variabel

	$nama = $_POST['nama'];
	$posisi = $_POST['posisi'];
	$gaji = $_POST['gaji'];

	//Pembuatan syntax SQL

	$sql ="INSERT INTO tb_pegawai (nama, posisi, gaji) VALUES ('$nama','$posisi','$gaji')";
	$query = mysql_query($sql);

	//Eksekusi Query database
	if (mysql_query($query, $con)){

		echo "Gagal Menambahkan Pegawai";

	} else {

		echo "Berhasil Menambahkan Pegawai";
	}

	mysql_close($con);
}
?>                     		