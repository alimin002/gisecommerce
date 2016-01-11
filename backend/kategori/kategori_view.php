
<?php /* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */
if(empty($_SESSION['username'])){
			echo "<p style='color:red'>akses denied</p>";
		exit();		
	}
//===========CODE DELETE RECORD ================

if (isset($_GET['act'])) {
	$id = $_GET['id'];
	$sql = "delete from kategori where idkategori='$id' ";
	mysql_query($sql) or die(mysql_error());

}
//==========================================
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
	<h1>
	Data
	<small>
	<i class="ace-icon fa fa-angle-double-right"></i>
	&amp; kategori
		</small>
	</h1>
	<input type="hidden" id="tablename"/>
	<table  class="table table-striped table-bordered table-hover">
		<thead>
		<th><td><h4>Nama kategori </h4></td><td><h4>Aksi</h4></td></th>
		</thead>
		<tbody>
		<?php
if (empty($_GET['halaman'])) {
    $halaman=0;
}else{
$halaman=$_GET['halaman'];
}	$batas=4;
$posisi=null;
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}else{
	$posisi=($halaman-1)* $batas;
}
$query="SELECT * from kategori limit $posisi,$batas ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){
		?>
		<tr>
			<td><?php echo $posisi+$no
			?>
			</td>
			<td><?php echo $rows -> nama_kategori; ?></td>
			<td style="padding:0.5%;">
			<a href="index.php?mod=kategori&pg=kategori_form&id=<?php echo $rows -> idkategori; ?>"class='btn btn-xs btn-info'>
				<i class="ace-icon fa fa-pencil bigger-120"></i>
			</a>
			<a class='btn btn-xs btn-danger' href="index.php?mod=kategori&pg=kategori_view&act=del&id=<?php echo $rows -> idkategori; ?>
					"onclick="return 	confirm('Yakin data akan dihapus?')" > 
				<i class="ace-icon fa fa-trash-o bigger-120"></i>
			</a>
			</td>
		</tr>
		<?php $no++;
		}
	?>

		<tr>
			<td colspan='2' ></td><td>
			<button type="button"  class="btn btn-success" onclick="additem();">  <i class="fa fa-plus" >  </i>  </button>
				</td>
				</tr>
		<script>
		var html_string='\n'+
                '<div class="row" style="border-radius: 25px;">\n'+
                '<div class="col-md-12" style="padding:3%; background-color:#EFF3F8">\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Nama Kategori'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="nama_kategori" value="'+''+'" class="col-md-10">\n'+
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
<?php //=============CUT HERE for paging====================================
		$tampil2 = mysql_query("select idkategori from kategori");
		$jmldata = mysql_num_rows($tampil2);
		$jumlah_halaman = ceil($jmldata / $batas);

?>
		<?php echo $jmldata; ?> 
<div class='dataTables_paginate paging_bootstrap'>
                <ul class="pagination">
                    <?php
pagination($halaman, $jumlah_halaman, "kategori"); ?>
                </ul>
            </div>


	<?php
	// KODE UNTUK MENAMPILKAN PESAN STATUS
	if (isset($_GET['status'])) {
		if ($_GET['status'] == 0) {
			echo " Operasi data berhasil";
		} else {
			echo "operasi gagal";
		}
	}

	//close database
	?>


