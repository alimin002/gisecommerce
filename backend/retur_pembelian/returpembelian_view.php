<?php //===========CODE DELETE RECORD ================

if (empty($_SESSION['username']))
	{
	echo "<p style='color:red'>akses denied</p>";
	exit();
	}

if (isset($_GET['act']))
	{
	$id = $_GET['id'];
	$sql = "delete from produk where idproduk='$id' ";
	mysql_query($sql) or die(mysql_error());
	}

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
    <div>
        <h1>
		Data
		<small>
		<i class="ace-icon fa fa-angle-double-right"></i>
		Retur Pembelian
		</small>
	</h1>
    </div>
    <div>

        <!--<a href='index.php?mod=produk&pg=peta'><i class="icon-map-marker"></i>Map View</a>-->
        <table class="table table-striped table-condensed">
            <thead>
                <th>
                    <td><b>Id </b></td>
                    <td><b>No Return</b></td>
                    <td><b>Tanggal Return</b></td>
					<td><b>Prodak Id</b></td>
					<td><b>Supplier_id</b></td>
					<td><b>Jumlah Prodak</b></td>
					<td><b>Distributor</b></td>
					<td><b>Pengguna Id</b></td>
                    <td style='min-width: 100px'><b>Aksi</b></td>
                </th>
            </thead>
            <tbody>
                <?php
$batas = '10';
$tabel = "produk";

if (empty($_GET['halaman']) == false)
	{
	$halaman = $_GET['halaman'];
	}
  else
	{
	$halaman = 0;
	}

$posisi = null;

if (empty($halaman))
	{
	$posisi = 0;
	$halaman = 1;
	}
  else
	{
	$posisi = ($halaman - 1) * $batas;
	}

$query = "SELECT * from retur_pembelian limit $posisi,$batas ";
$result = mysql_query($query) or die(mysql_error());
$no = 1;

// proses menampilkan data

while ($rows = mysql_fetch_object($result))
	{
?>
                    <tr>
					<td>
					</td>
					<td>
                     <?php
						echo $rows -> id;
						?>     
                    </td>
					<td>
					<?php
						echo $rows -> no_retur;
						?> 	
					</td>
					<td>
                     <?php
						echo $rows -> tanggal_retur;
						?>    
                    </td>	
                     <td>
				      <?php
						echo $rows -> produk_id;
						?>    
                           
                     </td>
					 <td>
                      <?php
						echo $rows -> supplier_id;
						?>     
                    </td>
                    <td>
                       <?php
						echo $rows -> jumlah_produk;
						?>    
                    </td>
                    <td>
                      <?php
						echo $rows -> distributor;
						?>    
                    </td>
                     <td>
                       <?php
						echo $rows -> pengguna_id;
						?>   
                    </td>  
					<td>
					<a href="index.php?mod=produk&pg=produk_form&id=
							" class='btn btn-xs btn-info'>
                                <i class="icon-pencil"></i>
					
                            </a>
                            <a href="index.php?mod=produk&pg=produk_view&act=del&id=
							" onclick="return confirm('Yakin data akan dihapus?');" class='btn btn-danger'> <i class="icon-trash"></i>
                            </a>
                     </td>
                    </tr>
                <?php
	}
          ?>        <tr>
                            <td colspan='9'></td>
                            <td><a href="index.php?mod=retur_pembelian&pg=returpembelian_form" class='btn btn-xs btn-success'><i class="icon-plus"></i></a></td>
                        </tr>
						
	
						
            </tbody>
        </table>
        <?php //=============CUT HERE for paging====================================
$tampil2 = mysql_query("SELECT idproduk from produk");
$jmldata = mysql_num_rows($tampil2);
$jumlah_halaman = ceil($jmldata / $batas);
?>
             <div class='dataTables_paginate paging_bootstrap'>
                <ul class="pagination">
                    <?php
						pagination($halaman, $jumlah_halaman, "retur_pembelian"); ?>
                </ul>
            </div>
            <div class='well'>Jumlah data :<strong><?php echo $jmldata; ?> </strong></div>
            <?php

// KODE UNTUK MENAMPILKAN PESAN STATUS

if (isset($_GET['status']))
	{
	if ($_GET['status'] == 0)
		{
		echo " Operasi data berhasil";
		}
	  else
		{
		echo "operasi gagal";
		}
	}

// close database

?>

    </div>