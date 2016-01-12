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
 
 				//===========CODE DELETE RECORD ================

					if(isset($_GET['act'])) {
						$id = $_GET['id'];
						$sql = "delete from stok where idstok='$id' ";
						mysql_query($sql) or die(mysql_error());

					}
					if(isset($_POST['update'])) {
						$persen = $_POST['persen'];
						$persen=$persen/100;
						$sql = "update stok set harga_jual=harga_jual+(harga_jual*$persen) ";
						mysql_query($sql) or die(mysql_error());

					}
					?>
					<div class="row">
						<form action="index.php?mod=supplier&pg=supplier_view" method="POST">
							<div class="col-md-6">
								<input type="text" class="form-control" name="textsearch">
									</div>
											<div class="col-md-1" style="margin-left:-5%;">
															<button class="form-control" type="submit">
														<i class="ace-icon fa fa-search"></i>
													</button>
		
																</div>
														</form>	 
												</div> 

<div>
	<div>
	<h2 id="headings"> Data Stock</h2>
</div>	
<div>
	Tampilkan Berdasarkan Kategori
</div>
<div>

	<select class="form-control" id="form-field-select-1">														
		<option value="WA">Semua Kategori</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
	</select>
</div>
	  <form  class="form-horizontal" method="POST" id="form1" 
	  action="index.php?mod=stok&pg=stok_view">
	<input type='text' name='persen' >% (persen)
	
	<button type="submit" class="btn btn-success" name='update' >Update harga</button>
	

	</form>
	<!--<a href='index.php?mod=stok&pg=peta'><i class="icon-map-marker"></i>Map View</a>-->
	<table  class="table table-striped table-condensed">
		<thead>
			<th><td><b>Nama produk </b></td>
			<td><b>Harga Beli</b></td>
			<td><b>Harga Jual</b></td>
			<td><b>jumlah</b></td>
			<td><b>Aksi</b></td></th>
		</thead>
		<tbody>
<?php		
$batas = '5';
$tabel = "stok";

if (empty($_GET['halaman']) == false)
	{
	$halaman = $_GET['halaman'];
	}
  else
	{
	$halaman = 0;
	}

$posisi = null;

if (empty($halaman))
	{
	$posisi = 0;
	$halaman = 1;
	}
  else
	{
	$posisi = ($halaman - 1) * $batas;
	}		
		
?>		
		
<?php
/*
$batas='5';
$tabel="stok";
//$halaman=$_GET['halaman'];
$posisi=null;
if(empty($halaman)){
$posisi=0;
$halaman=1;
}else{
$posisi=($halaman-1)* $batas;
}
*/
$query="SELECT stok.*,produk.nama_produk
 from stok,produk
 where stok.idproduk=produk.idproduk
 limit $posisi,$batas ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){

			?>
			<tr>
			<td>
			<?php
				echo $posisi+$no
			?>
			</td>
			<td>
			<?php		
				echo $rows -> nama_produk;
			?>
			</td>
			<td align='right'>
			<?php		
				echo format_rupiah($rows ->harga_beli);
			?>
			</td>
			<td align='right'>
			<?php		
				echo format_rupiah($rows ->harga_jual);
			?>
			</td>
			<td align='right'>
			<?php		
				echo $rows ->jumlah;
			?></td>
			<td>
				<a href="index.php?mod=stok&pg=stok_form&id=" class='btn btn-xs btn-info'>
					<i class="icon-pencil"></i>
				</a>
				<a href="index.php?mod=stok&pg=stok_view&act=del&id=" onclick="return confirm('Yakin data akan dihapus?');"class='btn btn-danger'> 
					<i class="icon-trash"></i>
				</a>
			</td>
			</tr>
			<?php	
			$no++;
			}
			?>

			<tr>
				<td colspan='5' ></td><td>
			<button type="button"  class="btn btn-success" onclick="additem();">  <i class="fa fa-plus" >  </i>  </button>
			</td>
		</tr>
			<script>
		var html_string='\n'+
                '<div class="row" style="border-radius: 25px;">\n'+
                '<div class="col-md-12" style="padding:3%; background-color:#EFF3F8">\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Nama Prodak'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="nama_produk" "value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Harga Beli'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="harga_beli" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Harga Jual'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="harga_jual" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Jumlah'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="jumlah" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
				'</div>\n'+  
				'</div>\n'+
				'';
    
		function additem() 
			{
				bootbox.dialog({
            title: "Tambah Item Pembelian",
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
                    callback: function() {
					var tittle=jQuery1113('#tittle').val();
					var keterangan=jQuery1113('#keterangan').val();
					var foto=jQuery1113('#foto').val();
					message:alert(sukses);
					doinsertitem(banner_id,keterangan,foto);
					}
                }
            }
});
            }
			
			function doinsertitem(banner_id,keterangan,foto){
<?php
	$str="http://".$_SERVER['SERVER_NAME']. $_SERVER['SCRIPT_NAME'];
	$str=substr($str,0,strlen($str)-9)."/banner/ajax_insert_item2.php"; 
	?>
	var str="<?php echo $str;?>";
	jQuery1113.ajax({
	url: str,
	type: "POST",
	data:{
	banner_id		 :banner_id,
	keterangan		:keterangan,
	foto			:foto,
	
	},
	success:function(data){
	//alert(data);
	var datapembelian=JSON.parse(data);
	showgrid(datapembelian);
	},
	error: function (jqXHR, textStatus, errorThrown) {
	alert(errorThrown);
	}
	});	

}
		</script>
		
		</tbody>
	</table>
	<?php
//=============CUT HERE for paging====================================
$tampil2 = mysql_query("SELECT idstok from stok");
$jmldata = mysql_num_rows($tampil2);
$jumlah_halaman = ceil($jmldata / $batas);
?>
<div class='dataTables_paginate paging_bootstrap'>
                <ul class="pagination">
                    <?php
pagination($halaman, $jumlah_halaman,"stok");
 ?>
                </ul>
</div>
 <div class='well'>Jumlah data :<strong><?php echo $jmldata; ?> </strong></div>
	
<?php
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
	if($_GET['status'] == 0) {
		echo " Operasi data berhasil";
	} else {
		echo "operasi gagal";
	}
}

//close database?>

</div>
