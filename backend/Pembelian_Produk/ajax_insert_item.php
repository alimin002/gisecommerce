<?php
include ('../../inc/config.php');

$data_pembelian_item=json_decode($_POST['insert_str']);

$array = json_decode(json_encode($data_pembelian_item),true);
//print_r($array);
foreach($array['data_pembelian_item'] as $row){
 $kode_produk = $row['kode_produk'];
 $qty = (int)$row['qty'];
 $harga_beli = (int)$row['harga_beli'];
 $subtotal = (int)$row['subtotal'];
 $sql = "INSERT INTO pembelian_detail(kode_produk,harga_beli,qty,subtotal)VALUES('$kode_produk','$harga_beli','$qty','$subtotal')";

$result = mysql_query($sql) or die(mysql_error());

}

?>