<?php 
	
	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id = $_GET['id'];

	require_once'koneksi.php';
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql =mysql_query("SELECT * FROM tb_pegawai WHERE id = $id") or die(mysql_error());
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysql_fetch_array($sql);

	array_push($result,array(
			"id"=>$row['id'],
			"nama"=>$row['nama'],
			"posisi"=>$row['posisi'],
			"gaji"=>$row['gaji']
		));
 
	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));
	
	mysql_close($con);
?>