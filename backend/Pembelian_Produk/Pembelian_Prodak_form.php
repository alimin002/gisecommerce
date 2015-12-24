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

		<h2> Form Pembelian Produk</h2>	
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
		<div class="control-group">
			<label class="control-label" for="nama_produk">Kode Pembelian</label>
			<div class="controls">
				<input type="text" name='nama_produk' value='<?php if($id!=null ){echo $data->nama_produk;} ?>'class='required'>
			</div>
	    </div>
		
	<div class="control-group">
			<label class="control-label" for="nama_produk">Nama Suplier</label>
			<div class="controls">
				<input type="text" name='nama_produk' value='<?php if($id!=null ){echo $data->nama_produk;} ?>'class='required'>
			</div>
	</div>
	
	<div class="control-group">
			<label class="control-label" for="nama_produk">Tanggal</label>
			<div class="controls">
				<input type="text" name='nama_produk' value='<?php if($id!=null ){echo $data->nama_produk;} ?>'class='required'>
			</div>
	</div>
	
	
		<div class="control-group">
			<div class="controls">
				<button data-toggle="modal" data-target="#myModal" id="bootbox-regular" type="button" class="btn btn-success" name='aksi'value='<?php echo $aksi?>'>
				<i class="fa fa-plus" ></i>&nbsp;<?php echo $aksi?>&nbspItem Pembelian
				</button>
			</div>
		</div>
		
</form>
<!---
<div id="modal-additem" class="bootbox modal fade bootbox-prompt in" tabindex="-1" role="dialog" aria-hidden="false" style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Tambah Item</h4></div>
            <div class="modal-body">
                <div class="bootbox-body">
                    <form class="bootbox-form">
					    <label>Kode Produk</label>
                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text" style="width:100%;">
						<label>Nama Produk</label>
                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text" style="width:100%;">
						<label>Harga Beli</label>
                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text" style="width:100%;">
						<label>QTY</label>
                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text" style="width:100%;">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button data-bb-handler="cancel" type="button" class="btn btn-default">Cancel</button>
                <button data-bb-handler="confirm" type="button" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>

--->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
		  <form class="bootbox-form">
					    <label>Kode Produk</label>
                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text" style="width:100%;">
						<label>Nama Produk</label>
                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text" style="width:100%;">
						<label>Harga Beli</label>
                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text" style="width:100%;">
						<label>QTY</label>
                        <input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text" style="width:100%;">
                    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">OK</button><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>

									<script>
								(function($){
								// here $ points to the old jQuery
								$('#modal-additem').hide();
									$('#bootbox-regular').click(function(){
										$('#modal-additem').show();
										//alert(1);
									});
									
								$('#btn-cancel').click(function(){
								$('#modal-additem').hide();
								});	
									
								})(jQuery1113);
	
									</script>

<div>

 <table class="table table-striped table-condensed">
            <thead>
                <th>
                    <td><b>Kode Produk</b></td>
					<td><b>Nama Produk</b></td>
                    <td><b>Harga Beli</b></td>
                    <td><b>Qty</b></td>
					<td><b>Sub Total</b></td>
                    <td style='min-width: 100px'><b>Aksi</b></td>
                </th>
            </thead>
            <tbody>
                    <tr>
                        <td>
                           
                        </td>
                        <td>
                           
                        </td>
                        <td style="width:40%;">
                           
                        </td>
                        <td>
                          
                        </td>
						<td>
						</td>
                        <td>
						   
                        </td>
                    </tr>
                 
                        <tr>
                            <td colspan='4'></td>
                            <td><a href="index.php?mod=Pembelian_Produk&pg=Pembelian_Prodak_form" class='btn btn-xs btn-success'>
							<i class="fa fa-floppy-o">
							Simpan Transaksi
							</i>
							</a>
							</a></td>
                        </tr>
            </tbody>
        </table>
</div>
<div>
Grand Total:
</div>
<!--biarkan div ini tanpa pasangan---->
</div>