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
	<div class="col-md-6">									
			<h1>
			Form 
			<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Pembelian Produk
			</small>
			</h1>
	</div>
</div>
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
		<!--------membuat otomatisasi kode pembelian--------->
<?php	
$kode_pembelian=$_POST['kode_pembelian'];
$query = "select a.kode_pembelian,a.supplier_id,a.tanggal,a.grand_total,b.nm_suplier as nama_supplier from pembelian a left join supplier b on a.supplier_id=b.supplier_id where a.kode_pembelian='$kode_pembelian'";
$result = mysql_query($query) or die(mysql_error());
$arrkode_pembelian=array();
$idx=0;
while ($rows = mysql_fetch_object($result))
{
$arrkode_pembelian[$idx]=$rows->kode_pembelian;
//echo $rows->kode_pembelian."<br/>";
}
//echo substr($arrkode_pembelian[0],);
$intkodepembelian=substr($arrkode_pembelian[0],2,5);
//echo((int)$intkodepembelian+1);

$strkodepembelian=(string)(int)$intkodepembelian + 1;
//echo $strkodepembelian+1; 
//die;
//echo mysql_num_rows($result); die();


?>
		<div class="row">
				<div class="col-md-3">
				<div class="row">
					<label class="col-md-12">Kode Pembelian</label>
				</div>
					<div class="row">
						<input type="text" class="col-md-12" id="kode_pembelian" name='kode_pembelian' value='<?php 
						if(mysql_num_rows($result) == 0){
						echo $strkodepembelian="PB10001";
						
						}else{
						echo "PB".$strkodepembelian; 
						}
						?>'class='required' disabled>
					</div>
				</div>
		</div>
		<?php 
		$query = "select supplier_id,nm_suplier from supplier";
		$result = mysql_query($query) or die(mysql_error());
		
		//{
		?>
		<div class="row">
				<div class="col-md-3">
				<div class="row">
					<label class="col-md-12">Nama Supplier</label>
				</div>
					<div class="row">
						<select class="col-md-12" id="supplier_id" name="supplier_id">
						<option>Pilih Supplier</option>
							<?php 
							while ($rows = mysql_fetch_object($result))
							{ 
							?>
							<option value="<?php echo $rows->supplier_id; ?>">				
							<?php echo $rows->nm_suplier; ?>				
							</option>
							<?php 
							} 
							?>
						</select>
					</div>
				</div>
				<?php //} ?>
		</div>
			<div class="row">
				<div class="col-md-3">
					<div class="row">
						<label class="col-md-12">Tanggal</label>
					</div>
					<div class="row">
						<input class="col-md-10 date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
						<span class="col-md-2" style="border:1px solid #0000; margin-top:2.5%;">
							<i class="fa fa-calendar bigger-110"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:0.5%; margin-bottom:0.5%;">
				<div class="col-md-3">
					<div class="input-group">
						<button data-toggle="modal" data-target="#myModal" id="bootbox-regular" type="button" class="btn btn-success">
						<i class="fa fa-plus" ></i>
						</button>
						
						<script>
						jQuery1113('#bootbox-regular').click(function(){
						jQuery1113('#kode_produk').val("");
						jQuery1113('#nama_produk').val("");
						jQuery1113('#harga_beli').val("");
						jQuery1113('#qty').val("");
						jQuery1113('#subtotal').val("");
						
						});
						</script>
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
      <div class="modal-content" ">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Item Pembelian <div id="ajax-tester"></div></h4>
        </div>
        <div class="modal-body">
		<div class="row">
		<div class="col-md-12"; style="background-color:#e5e5ff; padding:3%;">
		  <form class="bootbox-form">
		  <div class="row">
		  <div class="col-md-12">
			<label class="col-md-5">Kode Koduk</label>
		  </div>
		  </div>
		  <div class="row">
		       <div class="col-md-9">
                        <input type="text" name="kode_produk" id="kode_produk" class="form-control" style="width:120%;">
			   </div>
		
			   <div class="col-md-3" style="margin-left:0%">
			   <button type="button" class="form-control" id="btn-search-product"><i class="fa fa-search"></i></button>
			   </div>
		  <script>
			jQuery1113( "#btn-search-product" ).click(function(){
				<?php
				$str="http://".$_SERVER['SERVER_NAME']. $_SERVER['SCRIPT_NAME'];
				$str=substr($str,0,strlen($str)-9)."/Pembelian_Produk/ajax_nama_barang.php"; 
				?>
				var str="<?php echo $str;?>";
		  var kode_produk=jQuery1113("#kode_produk").val();
		 
		  jQuery1113.ajax({
			url: str,
			type: "POST",
			data:{
			kode_produk:kode_produk
				},
			success: function(data) {
			var data_produk=JSON.parse(data);
			//alert(data_produk['nama_produk']);
			//for(var i=0; i){
			
			//}
			jQuery1113("#nama_produk").val(data_produk['nama_produk']);
			jQuery1113("#harga_beli").val(data_produk['harga_beli']);
				},
				error: function (jqXHR, textStatus, errorThrown) {
							    //alert('ajax fail');
								console.log("ERRORS : " + errorThrown);
							}
				});
						});
		  </script>
		  </div>
		  <div class="row">
		  <div class="col-md-12">
						<label class="col-md-5">Nama Produk</label>
		  </div>
		   </div>
		   <div class="row">
		   <div class="col-md-12">
                        <input class="form-control" name="nama_produk" id="nama_produk"/>
		   </div>
		   </div>
						<div class="row">
						<div class="col-md-12">
						<label class="col-md-5">Harga Beli</label>
						</div>
						</div>
						<div class="row">
						<div class="col-md-12">
                        <input type="text" name="harga_beli" id="harga_beli" class="form-control">
						</div>
						</div>
						<div class="row">
						<div class="col-md-12">
						<label class="col-md-5">QTY/Jumlah Beli</label>
						</div>
						</div>
						
						<div class="row">
						<div class="col-md-12">
                        <input type="text" name="qty" id="qty" class="form-control">
						</div>
						</div>
						<script>
						var grand_total=0;
						jQuery1113( "#qty" ).change(function() {
							var harga_beli=0;							var harga_beli;
							harga_beli = jQuery1113( "#harga_beli" ).val();
							var qty=0;
							qty=jQuery1113(this).val();
							//alert(qty);
							var subtotal=0;
							subtotal=parseFloat(harga_beli)*parseFloat(qty);
							jQuery1113("#subtotal" ).val(subtotal);
							grand_total=grand_total+subtotal;
							jQuery1113("#grand_total" ).empty();
							jQuery1113("#grand_total" ).append(grand_total);
						});
						</script>
						<div class="row">
						<div class="col-md-12">
						<label class="col-md-5">Subtotal</label>
						</div>
						</div>
						<div class="row">
						<div class="col-md-12">
                        <input type="text" name="subtotal" id="subtotal" class="form-control">
						</div>
						</div>
          </form>
		  </div>
		 </div>
		 <br/>
        </div>
        <div class="modal-footer">
          <button type="button" id="btn-ok" class="btn btn-default" data-dismiss="modal">OK</button><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
		<script>
		
		
		</script>
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
            <tbody id="tbody-item">   
            </tbody>
</table>
</div>
<div class="row" style="border:1px #dadada solid;">
<label class="col-md-3">Grand Total:</label> <label id="grand_total" class="col-md-2" style="margin-left:-15%;"></label>
</div>
<div class="row" style="padding:1%;">
<div class="col-md-1">
<button id="btn-simpanpembelian" class="btn btn-inverse" title="simpan data"><i class="fa fa-floppy-o"></i> </button>
</div>
<div class="col-md-1" style="margin-left:-3.5%;">
<button id="btn-cetak" class="btn btn-primary" title="Simpan dan cetak"><i class="fa fa-print"></i> </button>
</div>
</div>
<div class="row">
<i class="fa fa-angle-double-left"></i>
<a href="index.php?mod=Pembelian_Produk&pg=Pembelian_Prodak_view">Kembali Ke Data Pembelian</a>
</div>
<!--biarkan div ini tanpa pasangan---->
</div>
	<script>
	var jsonitem="";
    var rowid = 0;
	var insert_str="";
    //rowid =rowid +1;
    //menghindari konflik antar jquery
	var kode_produk="";
	var nama_produk="";
	var harga_beli="";
	var qty="";
	var subtotal="";
	
	
	
    jQuery1113("#btn-ok").click(function() {
	var kode_pembelian=jQuery1113("#kode_pembelian").val();
	var kode_produk=jQuery1113("#kode_produk").val();
	var nama_produk=jQuery1113("#nama_produk").val();
	var harga_beli=jQuery1113("#harga_beli").val();
	var qty=jQuery1113("#qty").val();
	var subtotal=jQuery1113("#subtotal").val();
	jsonitem=jsonitem + '{"kode_pembelian":"'+kode_pembelian+'","kode_produk":"'+kode_produk+'", "nama_produk":"'+nama_produk+'", "harga_beli":"'+harga_beli+'", "qty":"'+qty+'", "subtotal":"'+subtotal+'"},';
	
	rowid = rowid + 1;
		var html_grid='\n'+
                '<tr id="row'+rowid+'">\n'+
					'<td> \n'+
					        rowid+'\n'+
					'</td>\n'+
					'<td> \n'+
					        jQuery1113("#kode_produk").val()+'\n'+
					'</td>\n'+
					'<td> \n'+
					        jQuery1113("#nama_produk").val()+'\n'+
					'</td>\n'+
					'<td> \n'+
					         jQuery1113("#harga_beli").val()+'\n'+
					'</td>\n'+
					'<td> \n'+
					         jQuery1113("#qty").val()+'\n'+
					'</td>\n'+
					'<td> \n'+
					         jQuery1113("#subtotal").val()+'\n'+
					'</td>\n'+
					'<td> \n'+
					         '<button id="'+rowid+'" type="button" class="btn btn-primary btn-minier" onclick="getitem(this.id);">'+'\n'+
							      '<i class="icon-pencil">'+'\n'+
								  '</i>                   '+'\n'+
							 '</button>'+'\n'+
							 '<button id="'+rowid+'" class="btn btn-danger btn-minier" onclick="deleteitem(this.id);">'+'\n'+
								  '<i class="icon-trash">'+'\n'+
								  '</i>                   '+'\n'+
							 '</button>'+'\n'+
					'</td>\n'+
				'</tr>\n'+
					'';
        jQuery1113("#tbody-item").append(html_grid);
		var lenstr=jsonitem.length;
		insert_str=jsonitem.substring(0,lenstr-1);
		
		
		
    });

    jQuery1113(window).bind("beforeunload", function() {
        return "Data item akan dikosongkan!, \n anda yakin akan mereload halaman ini?";
    });
	
	function showmodal(){

}


    function getitem(id) {
	//alert(id);
	var kode_produkedit=document.getElementById('row' + id).children[1].textContent;
	var nama_produkedit=document.getElementById('row' + id).children[2].textContent;
	var harga_beliedit=document.getElementById('row' + id).children[3].textContent;
	var qtyedit=document.getElementById('row' + id).children[4].textContent;
	var subtotaledit=document.getElementById('row' + id).children[5].textContent;
	
	var html_string='\n'+
                '<div class="row">\n'+
                '<div class="col-md-12" style="padding:3%; background-color:#e5e5ff">\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Kode Produk'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="text" id="kode_produkedit" value="'+kode_produkedit+'" class="form-control">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Nama Produk'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="text" id="nama_produkedit" value="'+nama_produkedit+'" class="form-control">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Harga Beli'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="text" id="harga_beliedit" value="'+harga_beliedit+'" class="form-control">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'QTY'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="text" id="qtyedit" value="'+qtyedit+'" class="form-control">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Subtotal'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="text" id="subtotaledit" value="'+subtotaledit+'" class="form-control">\n'+
						'</div>\n'+
					'</div>\n'+
				'</div>\n'+  
				'</div>\n'+
				'';
	
	
        //alert(id);
        //var x=jQuery1113("#tbody-item").children[0].children[0].textContent;
        //alert(document.getElementById('row' + rowid).children[2].textContent);
        bootbox.dialog({
            title: "Edit Item Pembelian",
            message:html_string,
            buttons: {
                dismiss: {
                    label: "Cancel",
                    className: "btn-default",
                    callback: function() {

                    }
                },
                success: {
                    label: "Save",
                    className: "btn-success",
                    callback: function() {}
                }
            }

        });
    }
	function deleteitem(id) {
	//alert(id);
	var kode_produkedit=document.getElementById('row' + id).children[1].textContent;
	var nama_produkedit=document.getElementById('row' + id).children[2].textContent;
	var harga_beliedit=document.getElementById('row' + id).children[3].textContent;
	var qtyedit=document.getElementById('row' + id).children[4].textContent;
	var subtotaledit=document.getElementById('row' + id).children[5].textContent;
	
	var html_string='\n'+
                '<div class="row">\n'+
                '<div class="col-md-12" style="padding:3%; background-color:#e5e5ff">\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Kode Produk'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input disabled type="text" id="kode_produkedit" value="'+kode_produkedit+'" class="form-control">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Nama Produk'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input disabled type="text" id="nama_produkedit" value="'+nama_produkedit+'" class="form-control">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Harga Beli'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input disabled type="text" id="harga_beliedit" value="'+harga_beliedit+'" class="form-control">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'QTY'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input disabled type="text" id="qtyedit" value="'+qtyedit+'" class="form-control">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Subtotal'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input disabled type="text" id="subtotaledit" value="'+subtotaledit+'" class="form-control">\n'+
						'</div>\n'+
					'</div>\n'+
				'</div>\n'+  
				'</div>\n'+
				'';
        bootbox.dialog({
            title: "Delete Item Pembelian",
            message:html_string,
            buttons: {
                dismiss: {
                    label: "Cancel",
                    className: "btn-default",
                    callback: function() {
						
                    }
                },
                success: {
                    label: "OK",
                    className: "btn-success",
                    callback: function() {
						jQuery1113("#row"+id).remove();
					}
                }
            }

        });
    }
	
	jQuery1113("#btn-simpanpembelian").click(function(){
	
        var kode_pembelian_master=jQuery1113("#kode_pembelian").val();
		var id_supplier=jQuery1113("#supplier_id").val();
		//alert(id_supplier);
		var tanggal=jQuery1113("#id-date-picker-1").val();
		var grand_total=jQuery1113("#grand_total").text();
		<?php
			$inserturl="http://".$_SERVER['SERVER_NAME']. $_SERVER['SCRIPT_NAME'];
			$inserturl=substr($inserturl,0,strlen($inserturl)-9)."/Pembelian_Produk/ajax_insert_item.php"; 
		?>
			var inserturl="<?php echo $inserturl;?>";
			
		jQuery1113.ajax({
			url: inserturl,
			type: "POST",
			data:{
			insert_str: '{"data_pembelian_item":['+ insert_str + ']}',
			kode_pembelian:kode_pembelian_master,
			id_supplier   :id_supplier,
			tanggal       :tanggal,
			grand_total   :grand_total
			     },
			success: function(data){
					alert('Data Sukses ditambahkan  \n'+data);
					jQuery1113("#tbody-item").remove();
					jQuery1113("#grand_total").text("");
					location.reload();
				},
			error: function (jqXHR, textStatus, errorThrown) {
							    //alert('ajax fail');
			console.log("ERRORS : " + errorThrown);
				}
		});
	});
</script>