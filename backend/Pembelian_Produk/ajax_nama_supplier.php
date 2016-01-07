<?php
include ('../../inc/config.php');
//echo $_POST['kode_produk'];
$query = "SELECT supplier_id,nm_suplier from supplier";
$result = mysql_query($query) or die(mysql_error());
while ($rows = mysql_fetch_object($result))
	{
	$arr_supplier["supplier_id"]=$rows->supplier_id;
	$arr_supplier["nm_suplier"]=$rows->nm_suplier;
	    //echo $rows->nama_produk."xxxxxxx";
	}
	echo json_encode($arr_supplier);
?>