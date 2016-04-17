<?php
	
	/* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */
if(empty($_SESSION['username'])){
			echo "<p style='color:red'>akses denied</p>";
		exit();		
	}
	$aksi = null;
	if(isset($_GET['id'])) {
		$aksi = "edit";
		$id = $_GET['id'];
		//baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya
			$sql = "select * from produk where idproduk='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
		$data = mysql_fetch_object($result);

	} else {
		$aksi = "tambah";
	}?>
	<!--kolom kiri-->

		<h2> Form Status SetUp</h2>
		<?php 
		if(empty($_GET['id'])){
		$id = null;
		}else{
		$id = $_GET['id'];
		}
		?>
		<input type='hidden' name='id' value="<?php echo $id?>">
	<div class="control-group">
			<label class="control-label" for="status_setup">Status SetUp</label>
			<div class="controls">
				<input type="text" name='nama_produk' id='nama_produk' value='<?php if($id!=null ){echo $data->nama_produk;} ?>'class='required'
				>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-success" name='aksi' id='aksi' value='<?=$aksi?>'>
				<?=$aksi?>
				</button>
			</div>
		</div>

</form>
</div>