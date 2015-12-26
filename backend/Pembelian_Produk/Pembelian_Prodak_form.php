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
		
		<div class="col-md-12">
		<div class="row">
				<div class="col-md-3">
				<label>Kode Pembelian</label>
					<div class="input-group">
						<input type="text" class="form-control" name='nama_produk' value='<?php if($id!=null ){echo $data->nama_produk;} ?>'class='required'>
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-md-3">
				<label>Nama Supplier</label>
					<div class="input-group">
						<input type="text" class="form-control" name='nama_produk' value='<?php if($id!=null ){echo $data->nama_produk;} ?>'class='required'>
					</div>
				</div>
		</div>
			<div class="row">
				<div class="col-md-3">
				<label>Tanggal</label>
					<div class="input-group">
						<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
						<span class="input-group-addon">
						<i class="fa fa-calendar bigger-110"></i>
					</span>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:0.5%;">
				<div class="col-md-3">
					<div class="input-group">
						<button data-toggle="modal" data-target="#myModal" id="bootbox-regular" type="button" class="btn btn-success">
				<i class="fa fa-plus" ></i>
				</button>
					</span>
					</div>
				</div>
			</div>
	    </div>
	
	
		<div class="control-group">
			<div class="controls">
				
			</div>
		</div>
		
</form>

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
  <button id="x" style="visible:0">x</button>

									<script>
									jQuery1113("#x").hide();
									//menghindari konflik antar jquery
									jQuery1113("#x").click(function(){
									alert(1);
									});
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