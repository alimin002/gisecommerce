
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
										<div class="widget-main" style="float:right;">
												<form class="form-search">
													<div class="row">
													<div class="col-xs-12 col-sm-8">
														<div class="input-group">
															
																<input type="text" class="form-control search-query" placeholder="Type your query"/>
																<button type="button" class="btn btn-primary btn-sm">
																		Search
																		<i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
																	</button>
															</div>
														</div>
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
}	$batas=5;
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
			<a class='btn btn-xs btn-danger' href="index.php?mod=kategori&pg=kategori_view&act=del&id=<?php echo $rows -> idkategori; ?>" onclick="return confirm('Yakin data akan dihapus?')" > 
			<i class="ace-icon fa fa-trash-o bigger-120"></i>
			</a>
			</td>
		</tr>
		<?php $no++;
		}
	?>

		<tr>
			<td colspan='2'>
			</td>
			<td>
				<a href="index.php?mod=kategori&pg=kategori_form"
				class='btn btn-xs btn-success'	><i class="icon-plus"></i></a>
			</td>
		</tr>
		</tbody>
	</table>
<?php //=============CUT HERE for paging====================================
		$tampil2 = mysql_query("select idkategori from kategori");
		$jmldata = mysql_num_rows($tampil2);
		$jumlah_halaman = ceil($jmldata / $batas);

		echo "<div class='pagination'> <ul>";
		for ($i = 1; $i <= $jumlah_halaman; $i++)

			echo "<li><a href='index.php?mod=kategori&pg=kategori_view&halaman=$i'>$i</a></li>";

		mysql_close();
	?>
</ul>
</div>
<br>Jumlah data :<?php echo $jmldata; ?>

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


