<?php
include ('../../inc/config.php');

$data_pembelian_item=json_decode($_POST['insert_str']);

$array = json_decode(json_encode($data_pembelian_item),true);
//print_r($array);
$record=0;
$nama_usaha=$_POST['nama_usaha'];
$alamat=$_POST['alamat'];
$kode_pos=$_POST['kode_pos'];
$no_telephone=$_POST['no_telephone'];
$email=$_POST['email'];
$nama_pimpinan=$_POST['nama_pimpinan'];
$sql = "INSERT INTO nama_usaha(nama_usaha,alamat,kode_pos,no_telephone,email,nama_pimpinan)VALUES('$nama_usaha','$alamat','$kode_pos','$no_telephone','$email','$nama_pimpinan')";
//$result = mysql_query($sql) or die(mysql_error());
$result = mysql_query($sql);
if (!$result) {
    die('Invalid query1: ' . mysql_error());
}else{
 echo 'data master ok';
}

foreach($array['data_pembelian_item'] as $row){
$record = $record +1;
 $nama_usaha = $row['nama_usaha'];
 $alamat = $row['alamat'];
 $kode_pos = $row['kode_pos'];
 $no_telephone =$row['no_telephone'];
 $email = $row['email'];
 $nama_pimpinan = $row['nama_pimpinan'];
 $sql = "INSERT INTO nama_usaha(nama_usaha,alamat,kode_pos,no_telephone,email,nama_pimpinan)VALUES('$nama_usaha','$alamat','$kode_pos','$no_telephone','$email','$nama_pimpinan')";
//$result = mysql_query($sql) or die(mysql_error());
$result = mysql_query($sql);
if (!$result) {
    die('Invalid query2: ' . mysql_error());
}else{
 echo 'record :'.$record.'ok\n';
}


}

?>