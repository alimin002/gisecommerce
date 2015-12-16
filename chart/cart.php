<?php
/* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */?>
<?php  // Start the session
function dispchart($arrchart){
?>
<table class="table table-striped">
<tr><td>nama</td><td>harga</td><td>jumlah</td><td>subtotal</td><td>aksi</td></tr>
<?php
foreach($arrchart as $id){
$sql = "select a.*,b.harga_jual from produk a left join stok b on a.idproduk=b.idproduk WHERE a.idproduk = '$id'";
$result = mysql_query($sql);
$row = mysql_fetch_object($result);
?>
<tr>
<td>
<img src="upload/produk/
<?php
echo $row->foto;
?>" width="128px" height="128px" >
<?php
echo "<br>".$row->nama_produk;
echo "<br>".$row->idproduk;
?>
</td>
<td>
<?php
echo $row->harga_jual;
?>
</td>
<td>
<?php

?>
</td>
<td>
<?php
echo '';
?>
</td>
<td>
<?php
echo '';
?>
</td>
</tr>
<?php
}
?>
</table>
<?php
}
?>