<?php
$user="root";
$server="localhost";
$password="";
$database="semester3";
$rumah=mysql_connect($server,$user,$password);
if($rumah){
	echo 'Rumah Berhasil Terhubung'.",&nbsp";
}else{
	echo 'Cek Lagi!!';
}
$db=mysql_select_db($database);
if($db){
	echo 'DB Berhasil Terhubung'.",&nbsp";
}else{
	echo 'Cek Lagi!!';
}
?>
