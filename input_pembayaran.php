<?php
include ("koneksi.php");//fungsi untuk gabung file
if(isset($_POST['simpan'])){
	$query_input_bayar="insert into pembayaran(barang_id,Qty,harga)
	values('".$_POST['barang_id']."',
		   '".$_POST['Qty']."',
		   '".$_POST['harga']."')";
	$proses_bayar=mysql_query($query_input_bayar);
    if($proses_bayar){
		echo 'Proses Pembayaran Berhasil';
	} else {
		echo mysql_error ();
		
}
}
	
?>

<form method ="post" action=""><!--Form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>Barang_id</td>
		<td><input name="barang_id" type="number"></td>
	</tr>
	<tr>
		<td>Qty</td>
		<td><input name="Qty" type="number"></td>
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
