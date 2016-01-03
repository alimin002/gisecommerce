<?php
include ('../../inc/config.php');
//echo $_POST['kode_produk'];
$query = "SELECT nama_produk,harga_beli,idproduk from produk where kode_produk='".$_POST['kode_produk']."'";
$result = mysql_query($query) or die(mysql_error());
while ($rows = mysql_fetch_object($result))
	{
	$arr_produk["nama_produk"]=$rows->nama_produk;
	$arr_produk["harga_beli"]=$rows->harga_beli;
	    //echo $rows->nama_produk."xxxxxxx";
	}
	echo json_encode($arr_produk);
?>