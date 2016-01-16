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
				//==========================================
				?>
<div class='bs-docs-example'>
	<h2 id="headings"> Pajak</h2>
	<table  class="table table-striped table-condensed">
		<thead>
		<th><b>No Seri Pajak</b></th>
		<th><b>NPWP </b></th>
		<th><b>No PKP</b></th>
		<th><b>Tanggal PKP </b></th>
		<th><b>Kode Cabang </b></th>
		<th><b>Jenis Usaha</b></th>
		<th><b>KLUSPT</b></th>
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
		
$query="SELECT * from   pajak order by no_seri_pajak asc limit $posisi,$batas ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){

		?>
		<tr>
			<td>
			<?php
			echo $rows -> no_seri_pajak;
			?>
			</td>
			<td>
			<?php
			echo $rows -> npwp;
			?>
			</td>
			<td>
			<?php
			echo $rows -> no_pkp;
			?>
			</td>
			<td>
			<?php
			echo $rows -> tgl_pkp;
			?>
			</td>
			<td>
			<?php
			echo $rows -> kode_cabang;
			?>
			</td>
			<td>
			<?php
			echo $rows -> jenis_usaha;
			?>
			</td>
			<td>
			<?php
			echo $rows -> kluspt;
			?>
			</td>
			<td>
			<a href="index.php?mod=pajak&pg=pajak_form&id=" class='btn btn-xs btn-info'>
			<i class="icon-pencil"></i>
			</a>
			<a href="index.php?mod=pajak&pg=pajak_view&act=del&id=" onclick="return confirm('Yakin data akan dihapus?');"class='btn btn-danger'> <i class="icon-trash"></i>
			</a>
			</td>
		</tr>
		<?php
	$no++;
	}?>

		<tr>
			<td colspan='6' ></td><td>
			<button type="button"  class="btn btn-success" onclick="additem();">  <i class="fa fa-plus" >  </i>  </button>
</td>
		</tr>
		<script>
		var html_string='\n'+
                '<div class="row" style="border-radius: 25px;">\n'+
                '<div class="col-md-12" style="padding:3%; background-color:#EFF3F8">\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'No Seri Pajak'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="no_seri_pajak" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'NPWP'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="npwp" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'No PKP'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="no_pkp" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Tanggal PKP'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="date" id="tgl_pkp" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Kode Cabang'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="kode_cabang" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Jenis Usaha'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="jenis_usaha" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'KLUSPT'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="kluspt" value="'+''+'" class="col-md-10">\n'+
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
					var nama_usaha=jQuery1113('#nama_usaha').val();
					var alamat=jQuery1113('#alamat').val();
					var kode_pos=jQuery1113('#kode_pos').val();
					var no_telepon=jQuery1113('#no_telepon').val();
					var email=jQuery1113('#email').val();
					var nama_pimpinan=jQuery1113('#nama_pimpinan').val();
					message:alert("sukses");
					doinsertitem(tittle,keterangan,foto);
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
$tampil2=mysql_query("select from 'pajak'");
$jmldata=mysql_num_rows($tampil2);
$jumlah_halaman=ceil($jmldata/$batas);
?>
            <div class='dataTables_paginate paging_bootstrap'>
                <ul class="pagination">
                    <?php
						pagination($halaman, $jumlah_halaman, "pajak"); ?>
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
