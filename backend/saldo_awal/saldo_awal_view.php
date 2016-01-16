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
<h1>
	Status
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
	SetUp
</small>
</h1>
<div>

	<table  class="table table-striped table-condensed">
		<thead>
			<th><td><b>Status SetUp </b></td>
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
				<td><?php echo $rows -> status_setup; ?></td>
				<td style="width:20%;"> </td>
				<td>
			    </td>
				<td>
                            <a href="index.php?mod=saldo_awal&pg=Ssaldo_awal_form&id=<?php echo $rows -> supplier_id;?>" class='btn btn-xs btn-info'>
                                <i class="icon-pencil"></i>
                            </a>
                            <a href="index.php?mod=saldo_awal&pg=saldo_awal_view&act=del&id=<?php echo $rows -> supplier_id;?>" onclick="return confirm('Yakin data akan dihapus?');"
							class='btn btn-danger'> <i class="icon-trash"></i>
                            </a>
               </td>
			</tr>
			<?php $no++;
				}
			?>
			<tr>
               <td colspan='2'></td>
               <td><a href="index.php?mod=saldo_awal&pg=saldo_awal_form" class='btn btn-xs btn-success'><i class="icon-plus"></i></a></td>
           </tr>
			
		</tbody>
	</table>
	<?php //=============CUT HERE for paging====================================
	$tampil2 = mysql_query("SELECT idproduk from produk");

	$jmldata = mysql_num_rows($tampil2);
	$jumlah_halaman = ceil($jmldata / $batas);
	?>
	</ul>
</div>

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
