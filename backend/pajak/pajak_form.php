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
		$sql = "select * from 'pajak' where idberita='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
		$baris = mysql_fetch_object($result);

	} else {
		$aksi = "tambah";
	}?>
	<script type="text/javascript" src="../assets/bootstrap/js/tinymce/tiny_mce.js"></script>
<script type="text/javascript" src='../assets/bootstrap/js/editor.js'></script> 

<form  class="form-horizontal" method="POST" id="form1" action="berita/berita_action.php" enctype="multipart/form-data">
 <legend> PAJAK</legend>
	<input type='hidden' name='id' value="<?php  if($aksi != 'tambah'){echo $id;}?>">
  <div class="control-group">
    <label class="control-label" for="no_seri_pajak">No Seri Pajak</label>
    <div class="controls">
      <input type="text" name='no_seri_pajak' id="no_seri_pajak" class='input-xxlarge'
      value='<?php if($aksi != 'tambah'){ echo $baris->no_seri_pajak;}?>' >
    </div>
   </div>
    
  <div class="control-group">
    <label class="control-label" for="gambar">NPWP</label>
    <div class="controls">
      <input type="text" name='npwp' id="npwp" >
    </div>
   </div>
   <div class="control-group">
    <label class="control-label" for="no_pkp">No PKP</label>
    <div class="controls">
      <input type="text" name='no_pkp' id='no_pkp' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->no_pkp;}?> 
     
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="tgl_pkp">Tanggal PKP</label>
    <div class="controls">
      <input type="date" name='tgl_pkp' id='tgl_pkp' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->tgl_pkp;}?> 
     
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="kode_cabang">Kode Cabang</label>
    <div class="controls">
      <input type="text" name='kode_cabang' id='kode_cabang' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->kode_cabang;}?> 
     
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="kode_pos">Jenis Usaha</label>
    <div class="controls">
      <input type="text" name='jenis_usaha' id='jenis_usaha' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->jenis_usaha;}?> 
     
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="kode_pos">KLUSPT</label>
    <div class="controls">
      <input type="text" name='kluspt' id='kluspt' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->kluspt;}?> 
     
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
     
      <button type="submit" class="btn btn-success" name='aksi'value=<?=$aksi?> ><?=$aksi?></button>
    </div>
  </div>
</form>

<div id="form1_errorloc"  class="text-error"></div>
