
<?php
include ('../../inc/config.php');
$kode_pembelian  = $_POST['kode_pembelian'];
$supplier_id	 = $_POST['supplier_id'];
$tanggal	 	 = $_POST['tanggal'];
 //echo $tanggal; die();
$sql = "update pembelian set supplier_id='$supplier_id',tanggal=STR_TO_DATE('$tanggal','%m/%d/%Y')  where kode_pembelian='$kode_pembelian'";
$result = mysql_query($sql);
if (!$result) {
    die('Invalid query1: ' . mysql_error());
}else{
    $sql1="select a.kode_pembelian,b.nm_suplier,DATE_FORMAT(a.tanggal, '%m/%d/%Y') AS tanggal from pembelian a left join supplier b on a.supplier_id=b.supplier_id where kode_pembelian ='$kode_pembelian'";
 $result1 = mysql_query($sql1);
  if (!$result1) {
  die ('Invalid query1: ' . mysql_error());
  }else{
    $i=0;
    $objmasterembelian=mysql_fetch_assoc($result1);
	$arrmasterpembelian=array(
		"kode_pembelian"=>$objmasterembelian['kode_pembelian'],
		"nama_supplier"=>$objmasterembelian['nm_suplier'],
		"tanggal"=>$objmasterembelian['tanggal']
	);
	echo json_encode($arrmasterpembelian);
   }
}
?>