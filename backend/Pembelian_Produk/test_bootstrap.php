
<?php /* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */

//===========CODE DELETE RECORD ================

if (isset($_GET['act'])) {
	$id = $_GET['id'];
	$sql = "delete from kategori where idkategori='$id' ";
	mysql_query($sql) or die(mysql_error());

}
//==========================================
?><div class="row">
  <div class="col-md-12">
	<div class="row">
		<div class="col-md-6">
		xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
		</div>
		<div class="col-md-6">
		yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
		</div>
  </div>
  </div>

