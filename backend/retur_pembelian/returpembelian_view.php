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
                    <td><b>id </b></td>
                    <td><b>no_return</b></td>
                    <td><b>tanggal_return</b></td>
					<td><b>prodak_id</b></td>
					<td><b>supplier_id</b></td>
					<td><b>jumlah_prodak</b></td>
					<td><b>distributor</b></td>
					<td><b>pengguna_id</b></td>
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

$query = "SELECT * from supplier limit $posisi,$batas ";
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
	echo $rows->nm_suplier; ?>
                        </td>
                        <td style="width:40%;">
                            <?php
	echo $rows->alamat; ?>
                        </td>
                        <td>
                            <?php
	echo $rows->telp; ?>
                        </td>
                        <td>
                            <a href="index.php?mod=produk&pg=produk_form&id=<?php
	echo $rows->supplier_id; ?>" class='btn btn-xs btn-info'>
                                <i class="icon-pencil"></i>
                            </a>
                            <a href="index.php?mod=produk&pg=produk_view&act=del&id=<?php
	echo $rows->supplier_id; ?>" onclick="return confirm('Yakin data akan dihapus?');" class='btn btn-danger'> <i class="icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
	$no++;
	}

?>

                        <tr>
                            <td colspan='4'></td>
                            <td><a href="index.php?mod=supplier&pg=supplier_form" class='btn btn-xs btn-success'><i class="icon-plus"></i></a></td>
                        </tr>
            </tbody>
        </table>
        <?php //=============CUT HERE for paging====================================
$tampil2 = mysql_query("SELECT idproduk from produk");
$jmldata = mysql_num_rows($tampil2);
$jumlah_halaman = ceil($jmldata / $batas);
?>
            <div class='pagination'>
                <ul>
                    <?php
pagination($halaman, $jumlah_halaman, "produk"); ?>
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