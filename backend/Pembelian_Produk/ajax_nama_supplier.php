<?php
include ('../../inc/config.php');
//echo $_POST['kode_produk'];
$query = "SELECT * from supplier";
$result = mysql_query($query) or die(mysql_error());
$i=0;
while ($rows = mysql_fetch_object($result))
	{
	$arr_supplier["supplier_id"][$i]=$rows->supplier_id;
    $arr_supplier["nm_suplier"][$i]=$rows->nm_suplier;
	   $i++;
	}
	echo json_encode($arr_supplier);
?>