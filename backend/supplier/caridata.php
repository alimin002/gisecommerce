Hasil Pencarian:<br/>
<?php
/* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */
include ('../../inc/config.php');
include('../../inc/function.php');
function caridata($nama){

$query = "SELECT * from supplier where nm_suplier like '%".$nama."%';";
$result = mysql_query($query) or die(mysql_error());
return $result;
//print_r($result);
}
?>
<table border=1>
<tr>
<td>nama supplier</td><td>alamat</td><td>telp</td>
</tr>
<?php
$hasil=caridata($_POST['textsearch']);
while ($rows = mysql_fetch_object($hasil)){
?>
<tr>
<?php
	?>
	<td>
	<?php
	echo $rows->nm_suplier;
	?>
	</td>
	<td>
	<?php
	echo $rows->alamat;
	?>
	</td>
	<td>
	<?php
	echo $rows->telp;
	?>
	</td>
	<?php
	?>
</tr>	
<?php	
	}
?>
</table>
<br/>
<a href="http://localhost/gisecommerce/backend/index.php?mod=supplier&pg=supplier_view">Back</a>
