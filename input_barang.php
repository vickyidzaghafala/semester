<?php
include ("koneksi.php");//fungsi untuk gabung file
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into barang(merk,harga)
	values('".$_POST['merk']."',
		   '".$_POST['harga']."')";
	$proses_data=mysql_query($query_tambah_data);
    if($proses_data){
		echo 'Tambah Data Berhasil';
	} else {
		echo mysql_error ();
		
}
}
	
?>

<form method ="post" action=""><!--Form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>Nama Barang</td>
		<td><input name="merk" type="text"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input name="harga" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>
