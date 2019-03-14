<table width="400" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000" celpading="2" celspacing="1" >
  <tr bgcolor="#CCFFFF">
    <td><div align="center"><strong>id</strong></div></td>
    <td><div align="center"><strong>Nama</strong></div></td>
    <td><div align="center"><strong>posisi</strong></div></td>
    <td><div align="center"><strong>gaji</strong></div></td>
  </tr> 

  <?php

      mysql_connect('localhost','root','');
      mysql_select_db('latihan');
   
      $tampil="select * from tb_pegawai";
      $qryTampil=mysql_query($tampil);
      while ($dataTampil=mysql_fetch_array($qryTampil)) {
     $id++
     ?> 

  <tr bgcolor="#FFFFFF">
    <td><?php echo $id ; ?></td>
    <td><?php echo $dataTampil['nama']; ?></td>
    <td><?php echo $dataTampil['posisi']; ?></td>
    <td><?php echo $dataTampil['gaji']; ?></td>
    <td><div align="center"><a href="hapus.php?id=<?php echo $dataTampil['id'] ; ?>">Delete</a> | <a href="update.php?id=<?php echo $dataTampil['id']; ?>">Edit </a></div></td> 

  </tr>
    <?php } ?>
</table>