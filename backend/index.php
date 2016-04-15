<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include ('../inc/config.php');
include ('../inc/function.php');
include('../inc/header-back.php');
?>

	<body>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
				<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
				</script>
					<a href="#" class="brand">
						<small>
							<i class="icon-desktop"></i>
						Geek Inovation studio Ecommerce
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
					<?php 
						if (isset($_SESSION['username'])){ ?>
					<li style="color:white;">
					<img img src="../upload/pengguna/ekha.jpg" width=35px height=20px />
					<?php echo $_SESSION['username']; ?>
					</li>
					<?php } ?>
						<?php 
						if (isset($_SESSION['username'])){ ?>
						<li>	<a href="login/logout.php">
									<i class="icon-off"></i>
									Logout
						</a>
						</li>
			<?php } ?>
							
					</ul><!--/.w8-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="container-fluid" id="main-container">
			<a id="menu-toggler" href="#">
				<span></span>
			</a>
<script type="text/javascript">
	try{ace.settings.check('main-container' , 'fixed')}catch(e){}
</script>
<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>
<!--sidebar-->			
<div id="sidebar" class="sidebar                  responsive">
<script type="text/javascript">
	try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
</script>
<?php
if(isset($_SESSION['username'])){
include('../inc/sidebar-back.php');
}
?>
<!--
 <div id="sidebar-collapse">
    <i class="icon-double-angle-left"></i>
 </div>-->
</div>
<!--content -->
<div id="main-content" class="clearfix">
<div style='margin:10px;padding: 10px'>

</div>
<div style='margin:10px;padding: 10px'>
	<?php
$pg = '';
/*
 * PHP Code untuk mendapatkan halaman view masing masing tabel
 */

if(!isset($_GET['pg'])) {
	if(isset($_SESSION['username'])){
	?>
	<?php 
	
	?>
	
	<?php
		include ('produk/produk_view.php');
	}
	include ('login/login_form.php');
} else {
?>
<!---
<div class="nav-search" id="nav-search">
	<form class="form-search">
			<span class="input-icon">
					<input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text"/>
								<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
	</form>
</div>
-->
<?php
	$pg = $_GET['pg'];
	$mod = $_GET['mod'];
	include $mod . '/' . $pg . ".php";

}?>

									


</div>
</div>

	<?php
include('../inc/js.php');
?>

									

	<script type="text/javascript">
			window.jQuery || document.write("<script src='../x/assets/js/jquery.min.js'/>"+"<"+"/script>");
	</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../x/assets/js/jquery.min.js'/>"+"<"+"/script>");
		</script>

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../x/assets/js/jquery.mobile.custom.min.js'/>"+"<"+"/script>");
		</script>
		<script src="../x/assets/js/bootstrap.min.js"></script>
		

		<!--[if lte IE 8]>
		  <script src="../assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="../x/assets/js/jquery-ui.custom.min.js"></script>
		<script src="../x/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../x/assets/js/jquery.easypiechart.min.js"></script>
		<script src="../x/assets/js/jquery.sparkline.min.js"></script>
		<script src="../x/assets/js/flot/jquery.flot.min.js"></script>
		<script src="../x/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="../x/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!---form element--->
		<script src="../x/assets/js/chosen.jquery.min.js"></script>
		<script src="../x/assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="../x/assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="../x/assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="../x/assets/js/date-time/moment.min.js"></script>
		<script src="../x/assets/js/date-time/daterangepicker.min.js"></script>
		<script src="../x/assets/js/date-time/bootstrap-datetimepicker.min.js"></script>
		<script src="../x/assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="../x/assets/js/jquery.knob.min.js"></script>
		<script src="../x/assets/js/jquery.autosize.min.js"></script>
		<script src="../x/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="../x/assets/js/jquery.maskedinput.min.js"></script>
		<script src="../x/assets/js/bootstrap-tag.min.js"></script>


		
		<!-- ace scripts -->
		<script src="../x/assets/js/ace-elements.min.js"></script>
		<script src="../x/assets/js/ace.min.js"></script>
		<!-- engine menu accounting1 tree-->
		<script src="../x/assets/js/fuelux/data/fuelux.tree-sample-demo-data.js"></script>
		<script src="../x/assets/js/fuelux/fuelux.tree.min.js"></script>

		<!-----modalbox dan sejenisnya-------->
		
		<script src="../x/assets/js/bootbox.min.js"></script>
		<script src="../x/assets/js/jquery.easypiechart.min.js"></script>
		<script src="../x/assets/js/jquery.gritter.min.js"></script>
		<script src="../x/assets/js/spin.min.js"></script>

		<!--tooltips--->
			<!-- page specific plugin scripts -->
		<script src="../x/assets/js/jquery-ui.min.js"></script>
		<script src="../x/assets/js/jquery.ui.touch-punch.min.js"></script>
		<!--tooltips script--->
		
		<!---enggine form UI-->
		<script type="text/javascript">
		//datepicker plugin
				//link				
			jQuery(function($) {
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			});
		</script>


		
		
		
		<link rel="stylesheet" href="../x/assets/css/ace.onpage-help.css" />
		<link rel="stylesheet" href="../x/docs/assets/js/themes/sunburst.css" />

		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="../x/assets/js/ace/ace.onpage-help.js"></script>
		<script src="../x/docs/assets/js/rainbow.js"></script>
		<script src="../x/docs/assets/js/language/generic.js"></script>
		<script src="../x/docs/assets/js/language/html.js"></script>
		<script src="../x/docs/assets/js/language/css.js"></script>
		<script src="../x/docs/assets/js/language/javascript.js"></script>
		

	</body>
</html>
