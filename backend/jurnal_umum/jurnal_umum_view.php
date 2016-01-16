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
	
	include('suplier/caridata.php');

?>
<div class="row">
<div class="col-md-12">
<div class="row">
<form action="index.php?mod=jurnal_umum&pg=jurnal_umum_view" method="POST">
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
		Jurnal Umum
		</h1>
    </div>
    <div>

        <!--<a href='index.php?mod=produk&pg=peta'><i class="icon-map-marker"></i>Map View</a>-->
        <table class="table table-striped table-condensed">
            <thead>
                <th>
                    <td><b>No_transaksi </b></td>
					<td><b>Periode</b></td>
                    <td><b>Tanggal Transaksi</b></td>
                    <td><b>Keterangan</b></td>
					<td><b>Status</b></td>
                    <td style='min-width: 100px'><b>Aksi</b></td>
                </th>
            </thead>
            <tbody>
                <?php
$batas = '5';
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

$query = "select a.kode_pembelian,a.supplier_id,a.tanggal,a.grand_total,b.nm_suplier as nama_supplier from pembelian a left join supplier b on a.supplier_id=b.supplier_id limit $posisi,$batas ";
$result = mysql_query($query) or die(mysql_error());
$no = 1;

// proses menampilkan data

while ($rows = mysql_fetch_object($result))
	{
?>
                    <tr>
                        <td>
                            <?php
	echo $posisi + $no
?>
                        </td>
                        <td>
                            <?php
	echo $rows->no_transaksi; ?>
                        </td>
                        <td style="width:40%;">
                            <?php
	echo $rows->periode; ?>
                        </td>
                        <td>
                            <?php
	echo $rows->tgl_transaksi; ?>
                        </td>
						<td>
						  <?php
	echo $rows->keterangan; ?>
						</td>
						<td>
						  <?php
	echo $rows->status; ?>
						</td>
                        <td>
                            <a href="index.php?mod=jurnal_umum&&pg=jurnal_umum_formedit&id=<?php
									echo $rows->kode_pembelian; ?>" class='btn btn-xs btn-info' title="edit pembelian">
                                <i class="icon-pencil"></i>
                            </a>
                            <a href="index.php?mod=jurnal_umum&pg=jurnal_umum_view&act=del&id=<?php
									echo $rows->supplier_id; ?>" onclick="return confirm('Yakin data akan dihapus?');" title="delete pembelian" class='btn btn-danger'> <i class="icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
	$no++;
	}

?>

                        <tr>
                            <td colspan='5'></td>
                            <td><a href="index.php?mod=jurnal_umum&pg=jurnal_umum_form" class='btn btn-xs btn-success'><i class="icon-plus"></i></a></td>
                        </tr>
            </tbody>
        </table>
		</div>
		<div class="row">
        <?php //=============CUT HERE for paging====================================
$tampil2 = mysql_query("SELECT idproduk from produk");
$jmldata = mysql_num_rows($tampil2);
$jumlah_halaman = ceil($jmldata / $batas);
?>
             <div class='dataTables_paginate paging_bootstrap'>
                <ul class="pagination">
                    <?php
						pagination($halaman, $jumlah_halaman, "pembelian"); ?>
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
	</div>
		</div>
			</div>	