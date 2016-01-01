<?php
include ('../../inc/config.php');
//echo $_POST['kode_produk'];
$query = "SELECT nama_produk,idproduk from produk where kode_produk='".$_POST['kode_produk']."'";
$result = mysql_query($query) or die(mysql_error());
while ($rows = mysql_fetch_object($result))
	{
	    echo $rows->nama_produk."xxxxxxx";
	}
?>