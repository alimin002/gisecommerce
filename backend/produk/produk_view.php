<?php //===========CODE DELETE RECORD ================
if(empty($_SESSION['username'])){
			echo "<p style='color:red'>akses denied</p>";
		exit();		
	}

if (isset($_GET['act'])) {
	$id = $_GET['id'];
	$sql = "delete from produk where idproduk='$id' ";
	mysql_query($sql) or die(mysql_error());

}
					?>

		
												<?php
													$query="select idkategori,nama_kategori from kategori";
													$result=mysql_query($query) or die(mysql_error());
												?>
												<!-- pencarian satu dari form supplier-->
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
												
												<!--<div class="widget-main" style="float:right;">
												<form class="form-search">
													<div class="row">
													<div class="col-xs-9 col-sm-8">
														<div class="input-group">
															<select class="form-control" id="form-field-select-1">	
																<option value="WA">Pilih Kategori</option>
														<?php 
														while($rows=mysql_fetch_object($result)){
														echo $rows -> nama_kategori;
														?>	
														<option value="WA"><?php echo $rows -> nama_kategori; ?></option>
														<?php } ?>
														</select>
																<input type="text" class="form-control search-query" placeholder="Type your query">
																<button type="button" class="btn btn-primary btn-sm">
																		Search
																		<i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
																	</button>
															</div>
														</div>
													</div>
												</form>	
		
											</div> ---->
		<h1>
		Data
		<small>
		<i class="ace-icon fa fa-angle-double-right"></i>
		Produk
		</small>
		</h1>
<div>
	
	<!--<a href='index.php?mod=produk&pg=peta'><i class="icon-map-marker"></i>Map View</a>-->
	<table  class="table table-striped table-condensed">
		<thead>
			<th><td><b>Nama </b></td><td><b>Deskripsi</b></td><td><b>Kategori</b></td><td style='min-width: 100px'><b>Aksi</b></td></th>
		</thead>
		<tbody>
<?php
$batas='4';
$tabel="produk";
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
$query="SELECT produk.*, kategori.nama_kategori
 from produk,kategori
 where produk.idkategori=kategori.idkategori
 limit $posisi,$batas ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){

			?>
			<tr>
				<td><?php echo $posisi+$no
				?>
				</td>
				<td><?php echo $rows -> nama_produk; ?></td>
				<td style="width:40%;"><?php echo $rows ->deskripsi; ?></td>
				<td><?php echo $rows -> nama_kategori; ?></td>
				<td>		
					<a href="index.php?mod=produk&pg=produk_form&id=<?php echo $rows -> idproduk; ?>"class='btn btn-xs btn-info'> 
						<i class="icon-pencil"></i>
					</a>
					<a href="index.php?mod=produk&pg=produk_view&act=del&id=<?php echo $rows -> idproduk; ?>"onclick="return confirm('Yakin data akan dihapus?');"class='btn btn-danger'> <i class="icon-trash"></i>
					</a>
				</td>
			</tr>
			<?php $no++;
				}
			?>

			<tr>
				<td colspan='6' ></td><td><a href="index.php?mod=produk&pg=produk_form"
				class='btn btn-xs btn-success'	><i class="icon-plus"></i></a></td>
			</tr>
		</tbody>
	</table>
	<?php //=============CUT HERE for paging====================================
	$tampil2 = mysql_query("SELECT idproduk from produk");

	$jmldata = mysql_num_rows($tampil2);
	$jumlah_halaman = ceil($jmldata / $batas);
?>
<!--------<div class='pagination'>
	<ul>
<?php // pagination($halaman, $jumlah_halaman, "produk"); ?>
	</ul>
</div>-------->

<div class='dataTables_paginate paging_bootstrap'>
                <ul class="pagination">
                    <?php
pagination($halaman, $jumlah_halaman, "produk"); ?>
                </ul>
            </div>
            <div class='well'>Jumlah data :<strong><?php echo $jmldata; ?> </strong></div>
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

</div>
