<?php 
include "koneksi.php";

$id = (!isset($_GET['id']));
	
$sql = mysql_query('SELECT * FROM tb_pegawai') or die(mysql_error());

$result = array();

while($row = mysql_fetch_array($sql)){
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id"=>$row['id'],
			"nama"=>$row['nama'],
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result' => $result));
	
	mysql_close($con);
?>