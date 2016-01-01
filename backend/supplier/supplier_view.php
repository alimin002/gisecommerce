
<?php //===========CODE DELETE RECORD ================
if (empty($_SESSION['username']))
	{
	echo "<p style='color:red'>akses denied</p>";
	exit();
	}

if (isset($_GET['act']))
	{
	$id = $_GET['id'];
	$sql = "delete from supplier where supplier_id='$id' ";
	mysql_query($sql) or die(mysql_error());
	}

	
	include('suplier/caridata.php');
	
?>
<div class="row">
<div class="col-md-12">
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
<div class="row">
	<div class="col-md-6">									
			<h1>
			Data
			<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Supplier
			</small>
			</h1>
	</div>
</div>		
<div class="row">
        <!--<a href='index.php?mod=produk&pg=peta'><i class="icon-map-marker"></i>Map View</a>-->
        <table class="table table-striped table-condensed">
            <thead>
                <th>
				    <td><b>No </b></td>
                    <td><b>Supplier ID </b></td>
                    <td><b>Nama Supplier</b></td>
                    <td><b>Alamat</b></td>
					<td><b>Telp</b></td>
					<td><b>Email</b></td>
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
$query="";
if(isset($_POST['textsearch'])){	
$query = "SELECT * from supplier where nm_suplier like '%".$_POST['textsearch']."%';";
$result = mysql_query($query) or die(mysql_error());
}else{
	
$query = "SELECT * from supplier limit $posisi,$batas ";
$result = mysql_query($query) or die(mysql_error());
}


$no = 1;

// proses menampilkan data

while ($rows = mysql_fetch_object($result))
	{
?>
                    <tr>
						<td>

                        </td>
                        <td>
						
                        </td>
                        <td>
						<?php
						echo $rows -> supplier_id;
						?>    
                        </td>
                        <td >
                        <?php
						echo $rows -> nm_suplier;
						?>   
                        </td>
                        <td>
                        <?php
						echo $rows -> alamat;
						?>     
                        </td>
						<td>
                         <?php
						echo $rows -> telp;
						?>    
                        </td>
						<td>
                         <?php
						echo $rows -> email;
						?>    
                        </td>
                        <td>
                            <a href="index.php?mod=supplier&pg=supplier_form&id=<?php echo $rows -> supplier_id;?>" class='btn btn-xs btn-info'>
                                <i class="icon-pencil"></i>
                            </a>
                            <a href="index.php?mod=supplier&pg=supplier_view&act=del&id=<?php echo $rows -> supplier_id;?>" onclick="return confirm('Yakin data akan dihapus?');"
							class='btn btn-danger'> <i class="icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
	$no++;
	}

?>

                        <tr>
                            <td colspan='7'></td>
                            <td><a href="index.php?mod=supplier&pg=supplier_form" class='btn btn-xs btn-success'><i class="icon-plus"></i></a></td>
                        </tr>
            </tbody>
        </table>
		
		</div>
		
		<div class="row">
        <?php //=============CUT HERE for paging====================================
$tampil2 = mysql_query("SELECT supplier_id from supplier");
$jmldata = mysql_num_rows($tampil2);
$jumlah_halaman = ceil($jmldata / $batas);
?>
            <div class='dataTables_paginate paging_bootstrap'>
                <ul class="pagination">
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

  </div>
 
		
</div>

    </div>