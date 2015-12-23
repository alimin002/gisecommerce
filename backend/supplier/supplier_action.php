<?php
/* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */
 
include ('../../inc/config.php');
include('../../inc/function.php');
//data dari produk
if(isset($_POST)){
$nm_suplier=$_POST['nm_suplier']; echo $nm_suplier;
$alamat=$_POST['alamat']; echo $alamat;
$telp=$_POST['telp']; echo $telp;
$email=$_POST['email']; echo $email; 

//$deskripsi=$_POST['deskripsi'];

$aksi = $_POST['aksi'];
$id = $_POST['id'];

$sql = null;
if($aksi == 'tambah') {
	$sql = "INSERT INTO supplier(nm_suplier,alamat,telp,email)VALUES('$nm_suplier','$alamat','$telp','$email')";
}else if($aksi== 'edit') {
	if($ukuran_file > 0){
	$sql = "update supplier set nm_suplier='$nm_suplier',alamat='$alamat',
	email='$email'
	where supplier_id='$id'";

	}else{
		$sql = "update supplier set nm_suplier='$nm_suplier',
	alamat='$alamat',email='$email'
	where supplier_id='$id'";
	
	}
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if($result) {
	header('location:../index.php?mod=supplier&pg=supplier_view&status=0');
} else {
	header('location:../index.php?mod=supplier&pg=supplier_view&status=1');
}
}
function carikategori($nama){
$nama=$_POST['textsearch'];
$query = "SELECT * from kategori where nama_kategory 's%';";
$result = mysql_query($query) or die(mysql_error());
return $result;
}

?>
