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
			$sql = "select * from supplier where supplier_id='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
		$data = mysql_fetch_object($result);

	} else {
		$aksi = "tambah";
	}
	
	
	?>



	<!--kolom kiri-->

		<h2> Form Supplier</h2>
		
		<form  class="form-horizontal" method="POST" id="form1"  action="supplier/supplier_action.php">
	
		<?php 
		if(empty($_GET['id'])){
		$id = null;
		}else{
		$id = $_GET['id'];
		}
		?>
		<input type='hidden' name='id' value="<?php echo $id?>">
	<div class="control-group">
			<label class="control-label" for="nama_suplier">Supplier ID</label>
			<div class="controls">
				<input type="text" name='nm_suplier' value='<?php if($id!=null ){echo $data->nm_suplier;} ?>'class='required'>
			</div>
	</div>
	<div class="control-group">
			<label class="control-label" for="alamat">Nama Supplier</label>
			<div class="controls">
				<textarea name='alamat' class="input-xxlarge"><?php if($id!=null ){echo $data->nm_suplier;} ?></textarea>
			</div>
	</div>
		<div class="control-group">
			<label class="control-label" for="telp">Alamat</label>
			<div class="controls">
				<input type="text" name='telp' value='<?php if($id!=null ){echo $data->telp;} ?>'class='required'>
			</div>
		</div>
		
	
		<div class="control-group">
			<label class="control-label" for="email">Telp</label>
			<div class="controls">
				<input type="text" name='email' value='<?php if($id!=null ){echo $data->email;} ?>'class='required'>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="email">Email</label>
			<div class="controls">
				<input type="text" name='email' value='<?php if($id!=null ){echo $data->email;} ?>'class='required'>

			</div>
		</div>

		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-success" name='aksi'value='<?php echo $aksi?>'>
				<?php echo $aksi?>
				</button>
			</div>
		</div>

</form>
<a href="index.php?mod=supplier&pg=supplier_view"> << Kembali Ke Data Supplier </a>
</div>
