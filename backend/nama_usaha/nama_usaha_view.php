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
			
			</td>
			<td>
			
			</td>
			<td>
			
			</td>
			<td>
			
			</td>
			<td>
			
			</td>
			<td>
			
			</td>
			<td>
			
			</td>
		</tr>
		
		<tr>
		
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
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
							'<input type="text" id="kodepos" value="'+''+'" class="col-md-10">\n'+
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
							'<input type="text" id="no_telepon" value="'+''+'" class="col-md-10">\n'+
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
					    alamat=jQuery1113('#alamat').val();
						kodepos=jQuery1113('#kodepos').val();
						no_telepon=jQuery1113('#no_telepon').val();
						email=jQuery1113('#email').val();
						test1=jQuery1113('#test1').val();
						test2=jQuery1113('#test2').val();
						test3=jQuery1113('#test3').val();
						test4=jQuery1113('#test4').val();
						test5=jQuery1113('#test5').val();
					jQuery1113('#contoh_set').val(jQuery1113('#nama_usaha').val());
					jQuery1113('#contoh_set2').val(jQuery1113('#alamat').val());
					jQuery1113('#contoh_set3').val(jQuery1113('#kodepos').val());
					jQuery1113('#contoh_set4').val(jQuery1113('#no_telepon').val());
					jQuery1113('#contoh_set5').val(jQuery1113('#email').val());
					jQuery1113('#test1').text(jQuery1113('#nama_usaha').val());
					jQuery1113('#test2').text(jQuery1113('#alamat').val());
					jQuery1113('#test3').text(jQuery1113('#kodepos').val());
					jQuery1113('#test4').text(jQuery1113('#no_telepon').val());
					jQuery1113('#test5').text(jQuery1113('#email').val());

					}
					
                }
            }
});
            }
		}
		</script>
		</tbody>
	</table>
	
	<div class="row">
	 
		<label class="col-md-8">
			Nama Usaha
			</label>
			</div>
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="contoh_set" value="" class="col-md-10">
						</div>
						</div>
<div class="row">
		<label class="col-md-8">
			Alamat
			</label>
			</div>
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="contoh_set2" value="" class="col-md-10">
						</div>
						</div>	
<div class="row">
		<label class="col-md-8">
			Kode Pos
			</label>
			</div>
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="contoh_set3" value="" class="col-md-10">
						</div>
						</div>	
<div class="row">
		<label class="col-md-8">
			No Telepon
			</label>
			</div>
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="contoh_set4" value="" class="col-md-10">
						</div>
						</div>	
<div class="row">
		<label class="col-md-8">
			Email
			</label>
			</div>
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="contoh_set5" value="" class="col-md-10">
						</div>
						</div>							
		
		   
			<label class="col-md-8" id="test1" value="">
			<label class="col-md-8"  value=""> Nama Usaha </label>
			Test 1
			</label>
			<label class="col-md-8" id="test2" value="">
			<label class="col-md-8"  value=""> Alamat </label>
			Test 2
			</label>
			<label class="col-md-8" id="test3" value="">
			<label class="col-md-8"  value=""> Kode Pos </label>
			Test 3
			</label>
			<label class="col-md-8" id="test4" value="">
			<label class="col-md-8"  value=""> No Telepon </label>
			Test 4
			</label>
			<label class="col-md-8" id="test5" value="">
			<label class="col-md-8"  value=""> Email </label>
			Test 5
			</label>
					
<?php	
//=============CUT HERE for paging====================================

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
