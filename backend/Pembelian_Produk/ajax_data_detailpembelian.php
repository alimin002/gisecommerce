<?php
include ('../../inc/config.php');
$id=$_POST['id'];
$query = "select a.id_detail,a.kode_produk,b.nama_produk,b.harga_beli,a.qty,a.subtotal from pembelian_detail a left join produk b on a.kode_produk=b.kode_produk where a.id_detail='$id'";
$result = mysql_query($query) or die(mysql_error());
$data_detail=mysql_fetch_assoc($result);
$arr_detail=array(
"id_detail"=>$data_detail['id_detail'],
"kode_produk"=>$data_detail['kode_produk'],
"nama_produk"=>$data_detail['nama_produk'],
"harga_beli"=> $data_detail['harga_beli'],
"qty"=>$data_detail['qty'],
"subtotal"=>$data_detail['subtotal'],
""=>""
);
echo json_encode($arr_detail);	
?>