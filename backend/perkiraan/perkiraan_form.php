<?php
/* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */
cek_status_login($_SESSION['username']); 
	$aksi = null;
	if(isset($_GET['id'])) {
		$aksi = "edit";
		$id = $_GET['id'];
		//baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya
		$sql = "select * from perkiraan where no_perkiraan='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
		$baris = mysql_fetch_object($result);

	} else {
		$aksi = "tambah";
	}?>
	<script type="text/javascript" src="../assets/bootstrap/js/tinymce/tiny_mce.js"></script>
<script type="text/javascript" src='../assets/bootstrap/js/editor.js'></script> 

<form  class="form-horizontal" method="POST" id="form1" action="berita/berita_action.php" enctype="multipart/form-data">
 <legend>  Perkiraan</legend>
	<input type='hidden' name='id' value="<?php  if($aksi != 'tambah'){echo $id;}?>">

    
  <div class="control-group">
    <label class="control-label" for="gambar">No Perkiraan</label>
    <div class="controls">
      <input type="text" name='no_perkiraan' id="no_perkiraan"
       >
    </div>
   </div>
   <div class="control-group">
    <label class="control-label" for="isi">Nama Perkiraan</label>
    <div class="controls">
      <input type="text" name='nama_perkiraan' id='nama_perkiraan' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->isi;}?> 
     
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="isi">Kelompok</label>
    <div class="controls">
      <input type="text" name='kelompok' id='kelompok' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->isi;}?> 
     
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="isi">Keterangan</label>
    <div class="controls">
      <input type="text" name='keterangan' id='keterangan' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->isi;}?> 
     
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
     
      <button type="submit" class="btn btn-success" name='aksi'value=<?=$aksi?> ><?=$aksi?></button>
    </div>
  </div>
</form>

<div id="form1_errorloc"  class="text-error"></div>
