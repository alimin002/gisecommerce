<?php
/* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */
 if(empty($_SESSION['username'])){
			echo "<p style='color:red'>akses denied</p>";
		exit();		
	}
	$id=null;
	$aksi = null;
	if(isset($_GET['id'])) {
		$aksi = "edit";
		$id = $_GET['id'];
		//baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya
		$sql = "select * from pengelola where idpengelola='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
		$baris = mysql_fetch_object($result);

	} else {
		$aksi = "tambah";
	}?>

<form  class="form-horizontal" method="POST" id="form1" action="pengelola/pengelola_action.php">
 <legend>  <?php echo $aksi;?> pengelola</legend>
	<input type='hidden' name='pengelola' id='pengelola' value="<?=$id?>">
   <div class="control-group">
   <label class="control-label" for="nama">nama</label>
    <div class="controls">
         <input type="text" name='nama' id='nama'class="required" 
      value=<?php if($id !=null){echo $baris->nama;}?> > 
    </div>
  </div>
  <div class="control-group">
   <label class="control-label" for="username">username</label>
    <div class="controls">
         <input type="text" name='username' id='username' class="required" 
      value=<?php if($id !=null){echo $baris->username;}?> > 
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
         <input type="password" name='password' id='password' class="required" minlength="5"
      >    
    </div>
  </div>
 
  <div class="control-group">
    <div class="controls">
     
      <button type="submit" class="btn btn-success" name='aksi' id='aksi' value=<?=$aksi?> ><?=$aksi?></button>
    </div>
  </div>
</form>

