
<?php
include ('../../inc/config.php');
$nama_usaha  = $_POST['nama_usaha'];
$alamat		 = $_POST['alamat'];
$kode_pos	 = $_POST['kode_pos'];
$no_telephone= $_POST['no_telephone'];
$email      = $_POST['email']; 
$nama_pimpinan= $_POST['nama_pimpinan']; 
$sql =  "INSERT INTO nama_usaha(nama_usaha,alamat,kode_pos,no_telephone,email,nama_pimpinan)VALUES('$nama_usaha','$alamat','$kode_pos','$no_telephone','$email','$nama_pimpinan')";
$result = mysql_query($sql);
if (!$result) {
    die('Invalid query1: ' . mysql_error());
}else{
    $sql1="select a.nama_usaha,a.alamat,b.kode_pos,a.no_telephone,a.email,a.nama_pimpinan from nama_usaha a left join produk b on a.kode_produk = b.kode_produk where a.kode_pembelian ='$kode_pembelian'";
 $result1 = mysql_query($sql1);
  if (!$result1) {
  die ('Invalid query1: ' . mysql_error());
  }else{
    $i=0;
    while ($rows = mysql_fetch_object($result1)){
	$arr_nama_usaha["nama_usaha"] [$i]  =$rows->nama_usaha;
	$arr_nama_usaha["alamat"][$i] =$rows->alamat;
	$arr_nama_usaha["kode_pos"][$i] =$rows->kode_pos;
	$arr_nama_usaha["no_telephone" ][$i] =$rows->no_telephone;
	$arr_nama_usaha["email"][$i] =$rows->email;
	$arr_nama_usaha["nama_pimpinan"   ][$i] =$rows->nama_pimpinan;
	$i++;
	}
	//mencari grand total
	$sql2="select sum(subtotal)as grand_total from pembelian_detail where kode_pembelian='$kode_pembelian'";
	$result2 = mysql_query($sql2);
	if(!$result2)
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
	//print_r($arr_pembelian1);
	//echo json_encode($arr_pembelian1);
	echo json_encode($arr_pembelian1);
   }

}
?>