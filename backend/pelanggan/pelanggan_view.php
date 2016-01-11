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
						$sql = "delete from pelanggan where idpelanggan='$id' ";
						mysql_query($sql) or die(mysql_error());

					}
					?>

<div>
	<h2 id="headings"> Data pelanggan</h2>
	<!--<a href='index.php?mod=pelanggan&pg=peta'><i class="icon-map-marker"></i>Map View</a>-->
	<table  class="table table-striped table-condensed">
		<thead>
			<th><td><b>Nama </b></td>
			<td><b>Email</b></td>
			<td><b>No Telp</b></td>
			<td><b>Aksi</b></td></th>
		</thead>
		<tbody>
<?php
$batas='5';
$tabel="pelanggan";
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
$query="SELECT pelanggan.*
 from pelanggan
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
				echo $rows -> nama;
			?>
			</td>
			<td>
			<?php		
				echo $rows ->email;?>
			</td>
			<td>
			<?php		
				echo $rows->telp;?>
			</td>
			<td>	
					
			<a href="index.php?mod=pelanggan&pg=pelanggan_form&id=" class='btn btn-xs btn-info'>
			<i class="icon-pencil"></i>
			</a>
			<a href="index.php?mod=pelanggan&pg=pelanggan_view&act=del&id=" onclick="return confirm('Yakin data akan dihapus?');"class='btn btn-danger'> <i class="icon-trash"></i>
			</a>
			</td>
			</tr>
			<?php	$no++;
	}?>

			<tr>
			<td colspan='3' ></td><td>
			<button type="button"  class="btn btn-success" onclick="additem();">  <i class="fa fa-plus" >  </i>  </button>
			</td>
			</tr>
			<script>
		var html_string='\n'+
                '<div class="row" style="border-radius: 25px;">\n'+
                '<div class="col-md-12" style="padding:3%; background-color:#EFF3F8">\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'ID Pelanggan'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="banner_id" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Nama Pelanggan'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="keterangan" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'jenis Kelamin'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="foto" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Email'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="foto" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Alamat'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="foto" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Kode Post'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="foto" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Kota'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="foto" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Telp'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="foto" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Tanggal Daftar'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="date" id="foto" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Password'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="password" id="foto" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Status'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="foto" value="'+''+'" class="col-md-10">\n'+
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

//close database?>

</div>
