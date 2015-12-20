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
					<a href="#" class="brand">
						<small>
							<i class="icon-desktop"></i>
						Geek Inovation studio Ecommerce
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<?php 
						if (isset($_SESSION['username'])){ ?>
						<li>	<a href="login/logout.php">
									<i class="icon-off"></i>
									Logout
								</a></li>
			<?php } ?>
							
					</ul><!--/.w8-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="container-fluid" id="main-container">
			<a id="menu-toggler" href="#">
				<span></span>
			</a>
<!--sidebar-->			
<div id="sidebar">
<?php
if(isset($_SESSION['username'])){
include('../inc/sidebar-back.php');
}
?>
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
<div class="nav-search" id="nav-search">
	<form class="form-search">
			<span class="input-icon">
					<input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text"/>
								<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
	</form>
</div>
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

		<!-- ace scripts -->
		<script src="../x/assets/js/ace-elements.min.js"></script>
		<script src="../x/assets/js/ace.min.js"></script>
		<!-- engine menu accounting1 -->
		<script src="../x/assets/js/fuelux/data/fuelux.tree-sample-demo-data.js"></script>
		<script src="../x/assets/js/fuelux/fuelux.tree.min.js"></script>


		<!-- engine menu accounting2 -->
		<script type="text/javascript">
			jQuery(function($){

		$('#tree1').ace_tree({
			dataSource: treeDataSource ,
			multiSelect:true,
			loadingHTML:'<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>',
			'open-icon' : 'ace-icon tree-minus',
			'close-icon' : 'ace-icon tree-plus',
			'selectable' : true,
			'selected-icon' : 'ace-icon fa fa-check',
			'unselected-icon' : 'ace-icon fa fa-times'
		});

		$('#tree2').ace_tree({
			dataSource: treeDataSource2 ,
			loadingHTML:'<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>',
			'open-icon' : 'ace-icon fa fa-folder-open',
			'close-icon' : 'ace-icon fa fa-folder',
			'selectable' : false,
			'selected-icon' : null,
			'unselected-icon' : null
		});



		/**
		$('#tree1').on('loaded', function (evt, data) {
		});

		$('#tree1').on('opened', function (evt, data) {
		});

		$('#tree1').on('closed', function (evt, data) {
		});

		$('#tree1').on('selected', function (evt, data) {
		});
		*/
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
