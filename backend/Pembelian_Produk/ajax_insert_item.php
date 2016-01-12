<?php
include ('../../inc/config.php');

$data_pembelian_item=json_decode($_POST['insert_str']);

$array = json_decode(json_encode($data_pembelian_item),true);
//print_r($array);
$record=0;
$kode_pembelian=$_POST['kode_pembelian'];
//echo 
$tanggal=$_POST['tanggal'];
$supplier_id=$_POST['id_supplier'];
$grand_total=$_POST['grand_total'];
$sql = "INSERT INTO pembelian(kode_pembelian,tanggal,supplier_id,grand_total)VALUES('$kode_pembelian',STR_TO_DATE('$tanggal','%m/%d/%Y'),'$supplier_id','$grand_total')";
//$result = mysql_query($sql) or die(mysql_error());
$result = mysql_query($sql);
if (!$result) {
    die('Invalid query1: ' . mysql_error());
}else{
 echo 'data master ok';
}

foreach($array['data_pembelian_item'] as $row){
$record = $record +1;
 $kode_pembelian = $row['kode_pembelian'];
 $kode_produk = $row['kode_produk'];
 $qty = (int)$row['qty'];
 $harga_beli = (int)$row['harga_beli'];
 $subtotal = (int)$row['subtotal'];
 $sql = "INSERT INTO pembelian_detail(kode_pembelian,kode_produk,harga_beli,qty,subtotal)VALUES('$kode_pembelian','$kode_produk','$harga_beli','$qty','$subtotal')";
//$result = mysql_query($sql) or die(mysql_error());
$result = mysql_query($sql);
if (!$result) {
    die('Invalid query2: ' . mysql_error());
}else{
 echo 'record :'.$record.'ok\n';
}


}

?>