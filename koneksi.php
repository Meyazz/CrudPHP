<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "latihan";
$con = mysql_connect ($host, $user, $pass);
if ($con){
$buka = mysql_select_db ($dbnm);
if (!$buka) {
die ("Database tidak dapat dibuka");
}
} else {
die ("Server MySQL tidak terhubung");
}
?>