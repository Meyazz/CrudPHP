 <?php 
 
mysql_connect('localhost','root',''); 
     
mysql_select_db('latihan'); 
     
     
     
$id=$_GET['id']; 
     
$delete="Delete from tb_pegawai Where id='$id'"; 
     
mysql_query($delete) or die ("Error tu"); 
     
     
     
echo "Data berhasil di hapus"; 
     
     
     
?> 
