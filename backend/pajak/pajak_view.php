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
		
		<tr>
			<td id="td">
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="td1" value="" class="col-md-10">
						</div>
						</div>
			</td>
			<td id="tdk1">
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="td2" value="" class="col-md-10">
						</div>
						</div>
			</td>
			<td>
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="td3" value="" class="col-md-10">
						</div>
						</div>
			</td>
			<td>
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="td4" value="" class="col-md-10">
						</div>
						</div>
			</td>
			<td>
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="td5" value="" class="col-md-10">
						</div>
						</div>
			</td>
			<td>
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="td6" value="" class="col-md-10">
						</div>
						</div>
			</td>
			<td>
			<div class="row">
						<div class="col-md-12">
							<input type="text" id="td7" value="" class="col-md-10">
						</div>
						</div>
			</td>
			<td>
			
			</td>
			<td>
			
			</td>
		</tr>
		<tr>
			<td colspan='6' ></td><td>
			<button  type="button"   class="btn btn-success" onclick="additem();">  <i class="fa fa-plus" >  </i>  </button>
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
                    callback:  function() {
						{
					dataku();
						}
					var no_seri_pajak=jQuery1113('#no_seri_pajak').val();
					var npwp=jQuery1113('#npwp').val();
					var no_pkp=jQuery1113('#no_pkp').val();
					var tgl_pkp=jQuery1113('#tgl_pkp').val();
					var kode_cabang=jQuery1113('#kode_cabang').val();
					var jenis_usaha=jQuery1113('#jenis_usaha').val();
					var kluspt=jQuery1113('#kluspt').val();
					var kotak1=jQuery1113('#no_seri_pajak').val();
					var kotak2=npwp=jQuery1113('#npwp').val();
					
					jQuery1113('#td1').val(jQuery1113('#no_seri_pajak').val());
					jQuery1113('#td2').val(jQuery1113('#npwp').val());
					jQuery1113('#td3').val(jQuery1113('#no_pkp').val());
					jQuery1113('#td4').val(jQuery1113('#tgl_pkp').val());
					jQuery1113('#td5').val(jQuery1113('#kode_cabang').val());
					jQuery1113('#td6').val(jQuery1113('#jenis_usaha').val());
					jQuery1113('#td7').val(jQuery1113('#kluspt').val());
					
					}
					
                }
            }
});
            }
			function dataku(){
					var td1=$('#td1');
						td2=$('#td2');
						td3=$('#td3');
						$("td").append(jQuery1113('#td1').val(jQuery1113('#no_seri_pajak').val()));
						$("td").append(jQuery1113('#td1').val(jQuery1113('#no_seri_pajak').val()));
						$("td").append(jQuery1113('#td1').val(jQuery1113('#no_seri_pajak').val()));
						};
		</script>
		</tbody>
	</table>					
</div>
