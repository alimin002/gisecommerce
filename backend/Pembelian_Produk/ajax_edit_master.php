<?php
include ('../../inc/config.php');
$kode_pembelian = $_POST['kode_pembelian'];
$supplier_id    = $_POST['supplier_id'];
$tanggal        = $_POST['tanggal']; 
$sql = "update pembelian set kode_pembelian='$kode_pembelian',supplier_id='$supplier_id',tanggal=STR_TO_DATE('$tanggal','%Y/%m/%d')  where kode_pembelian='$kode_pembelian'";
$result = mysql_query($sql);
if (!$result) {
    die('Invalid query1: ' . mysql_error());
}else{
 echo 'update master ok';
}
?>