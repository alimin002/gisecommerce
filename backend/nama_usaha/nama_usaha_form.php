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
		$sql = "select * from 'nama usaha' where idberita='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
		$baris = mysql_fetch_object($result);

	} else {
		$aksi = "tambah";
	}?>
	<script type="text/javascript" src="../assets/bootstrap/js/tinymce/tiny_mce.js"></script>
<script type="text/javascript" src='../assets/bootstrap/js/editor.js'></script> 

<form  class="form-horizontal" method="POST" id="form1" action="berita/berita_action.php" enctype="multipart/form-data">
 <legend> Usaha</legend>
	<input type='hidden' name='id' value="<?php  if($aksi != 'tambah'){echo $id;}?>">
  <div class="control-group">
    <label class="control-label" for="nama_usaha">nama usaha</label>
    <div class="controls">
      <input type="text" name='nama_usaha' id="nama_usaha" class='input-xxlarge'
      value='<?php if($aksi != 'tambah'){ echo $baris->nama_usaha;}?>' >
    </div>
   </div>
    
  <div class="control-group">
    <label class="control-label" for="gambar">Alamat</label>
    <div class="controls">
      <input type="text" name='alamat' id="alamat" >
    </div>
   </div>
   <div class="control-group">
    <label class="control-label" for="kode_pos">Kode Pos</label>
    <div class="controls">
      <input type="text" name='kode_pos' id='kode_pos' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->kode_pos;}?> 
     
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="kode_pos">No Telepon</label>
    <div class="controls">
      <input type="text" name='no_telepon' id='no_telepon' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->no_telepon;}?> 
     
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="kode_pos">Email</label>
    <div class="controls">
      <input type="text" name='email' id='email' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->Email;}?> 
     
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="kode_pos">Nama Pimpinan</label>
    <div class="controls">
      <input type="text" name='nama_pimpinan' id='nama_pimpinan' rows="10" class='input-xxlarge'><?php if($aksi != 'tambah'){$baris->nama_pimpinan;}?> 
     
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
     
      <button type="submit" class="btn btn-success" name='aksi'value=<?=$aksi?> ><?=$aksi?></button>
    </div>
  </div>
</form>

<div id="form1_errorloc"  class="text-error"></div>
