<?php
include ('../../inc/config.php');
$kode_pembelian  = $_POST['kode_pembelian'];
$id_detail		 = $_POST['id_detail'];
$sql = "delete from pembelian_detail  where id_detail='$id_detail'";
$result = mysql_query($sql);
if (!$result) {
    die('Invalid query1: ' . mysql_error());
}else{
    $sql1="select a.id_detail,a.kode_produk,b.nama_produk,a.harga_beli,a.qty,a.subtotal from pembelian_detail a left join produk b on a.kode_produk = b.kode_produk where a.kode_pembelian ='$kode_pembelian'";
 $result1 = mysql_query($sql1);
  if (!$result1) {
  die ('Invalid query1: ' . mysql_error());
  }else{
    $i=0;
    while ($rows = mysql_fetch_object($result1)){
	$arr_pembelian["id_detail"] [$i]  =$rows->id_detail;
	$arr_pembelian["kode_produk"][$i] =$rows->kode_produk;
	$arr_pembelian["nama_produk"][$i] =$rows->nama_produk;
	$arr_pembelian["harga_beli" ][$i] =$rows->harga_beli;
	$arr_pembelian["qty"        ][$i] =$rows->qty;
	$arr_pembelian["subtotal"   ][$i] =$rows->subtotal;
	$i++;
	}
	//mencari grand total
	$sql2="select sum(subtotal)as grand_total from pembelian_detail where kode_pembelian='$kode_pembelian'";
	$result2 = mysql_query($sql2);
	if(!$result)
	{
	 die ('Invalid query2: ' . mysql_error());
	}else{
	$objgrandtotal=mysql_fetch_assoc($result2);
	}
	$grand_total=$objgrandtotal['grand_total'];
	$arr_pembelian1=array(
	"pembitem"=>$arr_pembelian,
	"grand_total"=>$grand_total,
	"kode_pembelian"=>$kode_pembelian,
	);
	echo json_encode($arr_pembelian1);
   }

}
?>