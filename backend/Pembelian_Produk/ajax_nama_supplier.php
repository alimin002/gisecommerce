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
	
//$array = json_decode(json_encode($data_pembelian_item),true);	
	
	
	
	
	//$data_supplier=json_decode(json_encode($arr_supplier),true);
	
	//echo "<pre>";
	//print_r($data_supplier);
	//print_r(json_decode($data_supplier));
	//foreach($data_supplier['supplier_id'] as $row){
		//echo $row;
	//}
	//echo "</pre>";
	//echo json_encode($arr_supplier);
?>