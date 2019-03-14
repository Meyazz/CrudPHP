<?php 

//import file koneksi database 

	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$posisi = $_POST['posisi'];
		$gaji = $_POST['gaji'];

		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = ("UPDATE tb_pegawai SET nama = '$nama', posisi = '$posisi', gaji = '$gaji' WHERE id = $id;") or die (mysql_error());
		$query = mysql_query($sql);
		
		//Meng-update Database 
		if(mysql_query($sql,$con)){
			echo 'Berhasil Update Data Pegawai';
		}else{
			echo 'Gagal Update Data Pegawai';
		}
		
		mysql_close($con);
	}
?>

