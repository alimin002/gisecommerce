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
					$sql = "delete from berita where idberita='$id' ";
					mysql_query($sql) or die(mysql_error());

				}
				//==========================================?>
<div class='bs-docs-example'>
	<h2 id="headings"> Banner</h2>
	<table  class="table table-striped table-condensed">
		<thead>
		<th><b>Banner ID</b></th>
		<th><b>Keterangan </b></th>
		<th><b>Foto </b></th>
		<th><b>Aksi </b></th>
		</thead>
		<tbody>
		<?php
				//bata paging 
$batas='5';
$tabel="berita";
if(empty($_GET['halaman'])==false){
$halaman=$_GET['halaman'];
}else{
$halaman=0;
}
$posisi=null;
if(empty($halaman)){
$posisi=0;
$halaman=1;
}else{
$posisi=($halaman-1)* $batas;
}
		
$query="SELECT * from banner order by banner_id asc limit $posisi,$batas ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){

		?>
		<tr>
			<td>
			<?php
			echo $rows -> banner_id;
			?>
			</td>
			<td>
			<?php
			echo $rows -> keterangan;
			?>
			</td>
			<td>
			<?php
			echo $rows -> foto;
			?>
			</td>
			<td>
			<a href="index.php?mod=banner&pg=banner_form&id=" class='btn btn-xs btn-info'>
			<i class="icon-pencil"></i>
			</a>
			<a href="index.php?mod=banner&pg=banner_view&act=del&id=" onclick="return confirm('Yakin data akan dihapus?');"class='btn btn-danger'> <i class="icon-trash"></i>
			</a>
			</td>
		</tr>
		<?php
	$no++;
	}?>

		<tr>
			<td colspan='3' ></td><td>
			<button type="button" onclick="additem();">add item</button>
</td>
		</tr>
		<script>
		var html_string='\n'+
                '<div class="row" style="border-radius: 25px;">\n'+
                '<div class="col-md-12" style="padding:3%; background-color:#EFF3F8">\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Banner ID'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="kode_produkedit" value="'+''+'" class="col-md-10">\n'+
							'<button onclick="loaditem(jQuery1113('+"'"+'#kode_produkedit'+"'"+').val());" class="col-md-2 btn-primary" style=" position:absolute; height:103%;">\n'+	
							'<i class="fa fa-search">\n'+
							'</i>\n'+
							'</button>\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Keterangan'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input disabled type="text" id="nama_produkedit" value="'+''+'" class="form-control">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Foto'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input disabled type="text" id="harga_beliedit" value="'+''+'" class="form-control">\n'+
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
					var kode_pembelian=jQuery1113('#kode_pembelian').val();
					var id_detail=jQuery1113('#id_detailedit').val();
					var kode_produk=jQuery1113('#kode_produkedit').val();
					var harga_beli=jQuery1113('#harga_beliedit').val();
					var qty=jQuery1113('#qtyedit').val();
					var subtotal=jQuery1113('#subtotaledit').val();
					var intsubtotal=parseInt(subtotal);
					//alert(intsubtotal);
					doinsertitem(kode_pembelian,id_detail,kode_produk,harga_beli,qty,intsubtotal);
					}
                }
            }
});
            }
		</script>
		</tbody>
	</table>
<?php	
//=============CUT HERE for paging====================================
$tampil2=mysql_query("select idberita from banner");
$jmldata=mysql_num_rows($tampil2);
$jumlah_halaman=ceil($jmldata/$batas);
?>
            <div class='dataTables_paginate paging_bootstrap'>
                <ul class="pagination">
                    <?php
						pagination($halaman, $jumlah_halaman, "banner"); ?>
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
//close database
//}
?>

</div>
