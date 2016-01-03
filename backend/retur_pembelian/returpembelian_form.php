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
	<div class="row">
	<h2> Return Pembelian</h2>
	</div>
	<div class ="row">
	<div class="col-md-6">
		
		
<form  class="form-horizontal" method="POST" id="form1"  enctype="multipart/form-data"
action="produk/produk_action.php">
	
		<?php 
		if(empty($_GET['id'])){
		$id = null;
		}else{
		$id = $_GET['id'];
		}
		?>
		<input type='hidden' name='id' value="<?php echo $id?>">
		<div class="row">
	<div class="col-md-12">
			<label for="idkategori">ID</label>
			
	</div>
	
	</div>
	<div class="row">
	<div class="col-md-12">
				<input type='text' name='id' id='id' value='<?php if($id!=null ){echo $data->id;} ?>'class='form-control'>
	</div>
	</div>
	<div class="row">
	<div class="col-md-12">
			<label for="idkategori">No Retur</label>
			
	</div>
	
	</div>
		<div class="row">
	<div class="col-md-12">
				<input type='text' name='id' id='id' value='<?php if($id!=null ){echo $data->id;} ?>'class='form-control'>
	</div>
	</div>
	
	
		<div class="row">
	<div class="col-md-12">
			<label for="idkategori">Tanggal Retur</label>
			
	</div>
	
	</div>
		<div class="row">
	<div class="col-md-12">
			
				<input type='text' name='id' id='id' value='<?php if($id!=null ){echo $data->id;} ?>'class='form-control'>
	</div>
	</div>
		<div class="row">
	<div class="col-md-12">
			<label for="idkategori">Prodak ID</label>
			
	</div>
	
	</div>
	<div class="row">
	<div class="col-md-12">
				<input type='text' name='id' id='id' value='<?php if($id!=null ){echo $data->id;} ?>'class='form-control'>
	</div>
	</div>
		
		</div>
		<div class="col-md-6">
		<div class="row">
	<div class="col-md-12">
	<label class="col-md-8">
			jumlah prodak
	</label>
			
	</div>
	</div>
		<div class="row">
	<div class="col-md-12">
				<input type='text' name='id' id='id' value='<?php if($id!=null ){echo $data->id;} ?>'class='form-control'>
	</div>
	</div>
		
		<div class="row">
	<div class="col-md-12 control-label">
			<label for="idkategori">Pengguna ID</label>
			
	</div>
	</div>

		<div class="row">
	<div class="col-md-12">
				<input type='text' name='id' id='id' value='<?php if($id!=null ){echo $data->id;} ?>'class='form-control'>
	</div>
	</div>>

</form>
</div>
</div <div class ="row"><div class ="row">>