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
if (isset($_GET['id'])) {
	$aksi = "edit";
	$id = $_GET['id'];
	//baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya
	$sql = "select * from pelanggan where idpelanggan='$id' ";
	$result = mysql_query($sql) or die(mysql_error());
	$data = mysql_fetch_object($result);

} else {
	$aksi = "tambah";
}
?>

<!--kolom kiri-->

<h2> Form pelanggan</h2>

<form  class="form-horizontal" method="POST" id="form1"  enctype="multipart/form-data"
action="pelanggan/pelanggan_action.php">

	<?php 
	if(empty($_GET['id'])){
	//$id = $_GET['id']; 
	$id=null;
	}else{
	$id = $_GET['id']; 
	}
	?>
	<input type='hidden' name='id' value="<?php echo $id;?>">
	<div class="control-group">
		<label class="control-label" for="nama">Nama pelanggan</label>
		<div class="controls">
			<input type="text" name='nama_pelanggan'  id='nama_pelanggan' value='<?php if($id != null){ echo $data->nama;}?>'class='required'
			>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Jenis kelamin</label>
		<div class="controls">
			<select name='kelamin' >
				<option value='L'>Laki laki</option>
				<option value='P'>Perempuan</option>
			</select>
			
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="alamat">Alamat</label>
		<div class="controls">
			<textarea name='alamat' id='alamat' class="input-xxlarge">
					<?php if($id != null){ echo trim($data->alamat);}?>
				</textarea>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" >Kota</label>
		<div class="controls">
			<input type="text" name='kota' id='kota' value='<?php if($id != null){ echo $data->kota;}?>' class='required'
			>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Kode Post</label>
		<div class="controls">
			<input type="text" name='kodepos' id='kodepos' value='<?php if($id != null){ echo $data->kodepos;}?>' class='required'
			>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >telp</label>
		<div class="controls">
			<input type="text" name='telp' id='telp' value='<?php if($id != null){ echo $data->telp;} ?>' class='required'
			>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >email</label>
		<div class="controls">
			<input type="text" name='email' id='email' value='<?php if($id != null){ echo $data->email;}?>' class='required'
			>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Password</label>
		<div class="controls">
			<input type="text" name='password' id='password' value='<?php if($id != null){echo $data->password;} ?>' class='required'
			>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-success" name='aksi'value='<?php echo $aksi; ?>'>
				<?php echo $aksi ?>
			</button>
		</div>
	</div>

</form>
</div>