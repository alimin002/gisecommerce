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
	<h2 id="headings"> Nama Usaha</h2>
	<table  class="table table-striped table-condensed">
		<thead>
		<th><b>Nama Usaha</b></th>
		<th><b>Alamat </b></th>
		<th><b>Kode Pos </b></th>
		<th><b>No Telepon </b></th>
		<th><b>Email </b></th>
		<th><b>Nama Pimpinan</b></th>
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
		
$query="SELECT * from nama_usaha order by nama_usaha asc limit $posisi,$batas ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){

		?>
		<tr>
			<td>
			<?php
			echo $rows -> nama_usaha;
			?>
			</td>
			<td>
			<?php
			echo $rows -> alamat;
			?>
			</td>
			<td>
			<?php
			echo $rows -> kode_pos;
			?>
			</td>
			<td>
			<?php
			echo $rows -> no_telepon;
			?>
			</td>
			<td>
			<?php
			echo $rows -> Email;
			?>
			</td>
			<td>
			<?php
			echo $rows -> nama_pimpinan;
			?>
			</td>
			<td>
			<a href="index.php?mod=nama_usaha&pg=nama_usaha_form&id=" class='btn btn-xs btn-info'>
			<i class="icon-pencil"></i>
			</a>
			<a href="index.php?mod=nama_usaha&pg=nama_usaha_view&act=del&id=" onclick="return confirm('Yakin data akan dihapus?');"class='btn btn-danger'> <i class="icon-trash"></i>
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
		//<label id="test"> text ini akan diambil</label>
		var jsonadditem="";
		function additem()
			{	
			var html_string='\n'+
                '<div class="row" style="border-radius: 25px;">\n'+
                '<div class="col-md-12" style="padding:3%; background-color:#EFF3F8">\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Nama Usaha'+
						'</label>\n'+
						
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="nama_usaha" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label id="test" class="col-md-8">\n'+'text ini akan diambil'
							'ID'+
						'</label>\n'+
						
					'</div>\n'+
					
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Alamat'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="alamat" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Kode Pos'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="kode_pos" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'No Telepon'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="nomer_telephone" value="'+''+'" class="col-md-10">\n'+
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
							'<input type="text" id="email" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Nama Pimpinan'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="nama_pimpinan" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Nomer 1'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="text" id="number_1" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+
					
				'</div>\n'+  
				'</div>\n'+
				'<div class="row">\n'+
						'<label class="col-md-8">\n'+
							'Nomer 2'+
						'</label>\n'+
					'</div>\n'+
					'<div class="row">\n'+
						'<div class="col-md-12">\n'+
							'<input type="hidden" id="id_detailedit" value="'+''+'" class="col-md-10">\n'+
							'<input type="numerik" id="number_2" value="'+''+'" class="col-md-10">\n'+
						'</div>\n'+
					'</div>\n'+  
					
					
				'</div>\n'+ 
				'</div>\n'+
				'';
				
    		
			{
				bootbox.dialog(
{
            title: "Tambah ",
            message:html_string,
            buttons: 
			{
                dismiss: 
				{
                    label: "Cancel",
                    className: "btn-default",
                    callback: function()
					{

                    }
                },
                success: 
				{
                    label: "Save",
                    className: "btn-success",
                    callback: function()
					{
					var nama_usaha=jQuery1113('#nama_usaha').val();
					var alamat=jQuery1113('#alamat').val();
					var kode_pos=jQuery1113('#kode_pos').val();
					var no_telepon=jQuery1113('#no_telepon').val();
					var email=jQuery1113('#email').val();
					var nama_pimpinan=jQuery1113('#nama_pimpinan').val();
					var number_1 = jQuery1113('#number_1').val();
					var number_2 = jQuery1113('#number_2').val();
					var test= jQuery1113('#test').val();
					var result =parseInt(number_1)+parseInt(number_2);
					//message:alert('nama_usaha'+'\n'+nama_usaha+'\n'+'alamat'+'\n'+alamat+'\n'+'kode_pos'+'\n'+kode_pos+'\n'+'no_telepon'+'\n'+no_telepon+'\n'+'email'+'\n'+email+'\n'+'nama_pimpinan'+'\n'+nama_pimpinan+'\n'+'Nomer 1'+'\n'+number_1+'\n'+'Nomer 2'+'\n'+number_2+'\n');
					alert(jQueryjQuery1113("#test").text());
					
					//alert(result);
					doinsertitem(tittle,keterangan,foto);
					
					}
					
                }
            }
});
            }
		}
		</script>
		</tbody>
	</table>
<?php	
//=============CUT HERE for paging====================================
$tampil2=mysql_query("select from 'nama_usaha'");
$jmldata=mysql_num_rows($tampil2);
$jumlah_halaman=ceil($jmldata/$batas);
?>
            <div class='dataTables_paginate paging_bootstrap'>
                <ul class="pagination">
                    <?php
						pagination($halaman, $jumlah_halaman, "nama_usaha"); ?>
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
