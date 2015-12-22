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
					<img img src="../upload/pengguna/alimin.jpg" width=35px height=20px />
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


		<!-- engine menu accounting2 tree -->
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

		<!--tooltips--->
			<!-- page specific plugin scripts -->
		<script src="../x/assets/js/jquery-ui.min.js"></script>
		<script src="../x/assets/js/jquery.ui.touch-punch.min.js"></script>
		<!--tooltips script--->
		//tooltips
		<script>
				$( "#show-option" ).tooltip({
					show: {
						effect: "slideDown",
						delay: 250
					}
				});
			
				$( "#hide-option" ).tooltip({
					hide: {
						effect: "explode",
						delay: 250
					}
				});
			
				$( "#open-event" ).tooltip({
					show: null,
					position: {
						my: "left top",
						at: "left bottom"
					},
					open: function( event, ui ) {
						ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "fast" );
					}
				});
		</script>
		<!---enggine form UI-->
		<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$('.chosen-select').chosen({allow_single_deselect:true}); 
				//resize the chosen on window resize
				$(window).on('resize.chosen', function() {
					var w = $('.chosen-select').parent().width();
					$('.chosen-select').next().css({'width':w});
				}).trigger('resize.chosen');
			
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
			
			
				
				//"jQuery UI Slider"
				//range slider tooltip example
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";
			
						if( !ui.handle.firstChild ) {
							$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
				
				$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";
			
						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";
						
						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');
					
					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
				
				});
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up', icon_down:'ace-icon fa fa-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus smaller-75', icon_down:'ace-icon fa fa-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
				//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
				//or
				//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
				//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
			
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
			
				$('#colorpicker1').colorpicker();
			
				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist
			
			
				$(".knob").knob();
				
				
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					);
			
					//programmatically add a new
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('Programmatically Added');
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
				
				
				
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
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
