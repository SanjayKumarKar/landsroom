<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD --><head>
        <meta charset="utf-8" />
        <title><?=$SITE[0]['site_name'];?> | <?=$title;?> <?=$view;?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="<?=$SITE[0]['site_name'];?> - <?=$title;?> - <?=$heading;?> - <?=$description;?> | <?=$SITE[0]['site_meta_description'];?>" name="description" />
        <meta content="<?=$SITE[0]['site_meta_keyword'];?>" name="keywords" />
        <meta content="<?=$SITE[0]['site_meta_author'];?>" name="author" />
		<!--FAVICON-->
		<link rel="icon" href="<?=file_upload_base_url($SITE[0]['site_fav_icon']);?>" type="image/png"> 
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	
		<?php if($view_controller=="menu"){?>
        <link href="<?=base_url()?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-menu-builder/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css" rel="stylesheet" type="text/css">
		<?php }else{ ?>
        <link href="<?=base_url()?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<?php } ?>
	
        <link href="<?=base_url()?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/codemirror/lib/codemirror.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/codemirror/theme/ambiance.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
	
	
	
		
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url()?>assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url()?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?=base_url()?>assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
	
	
	
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?=base_url()?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?=base_url()?>assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
	</head>
    <!-- END HEAD -->
	<body class="page-header-fixed page-footer-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
		<?php echo $header;?>

            <!-- END HEADER & CONTENT DIVIDER -->

            <!-- BEGIN CONTAINER -->

            <div class="page-container">

                <!-- BEGIN SIDEBAR -->

                <?php echo $leftSidebar; ?>

                <!-- END SIDEBAR -->

                <!-- BEGIN CONTENT -->

                <div class="page-content-wrapper">

                    <!-- BEGIN CONTENT BODY -->

                    <div class="page-content" id="page-content">

                        <!-- BEGIN PAGE HEADER-->

                        <!-- BEGIN PAGE BAR & TITLE -->

                        <?php echo $pageBarTitle;?>

                        <!-- END PAGE BAR & TITLE-->

                        <!-- END PAGE HEADER-->

                        

						<!-- BEGIN Content Row-->

						<!-- BEGIN COMMON MESSAGE-->

						<?php echo $commonMSG; ?>

						<!-- END COMMON MESSAGE-->

						 <!-- BEGIN Important Button Row-->

						<?php echo $importantButton; ?>

                        <!-- BEGIN Important Button Row-->

						

						<?php echo $content;?>



                        <div class="clearfix"></div>					

                    </div>

                    <!-- END CONTENT BODY -->

                </div>

                <!-- END CONTENT -->

            </div>

            <!-- END CONTAINER -->		

<?php echo $footer;?>

        <!--[if lt IE 9]>
<script src="<?=base_url()?>assets/global/plugins/respond.min.js"></script>
<script src="<?=base_url()?>assets/global/plugins/excanvas.min.js"></script> 
<script src="<?=base_url()?>assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?=base_url()?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?=base_url()?>assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/codemirror/lib/codemirror.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/codemirror/mode/javascript/javascript.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/codemirror/mode/htmlmixed/htmlmixed.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/codemirror/mode/css/css.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>

		<script type="text/javascript" src="<?=base_url()?>assets/global/plugins/bootstrap-menu-builder/jquery-menu-editor.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>assets/global/plugins/bootstrap-menu-builder/bootstrap-iconpicker/js/iconset/fontawesome5-3-1.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>assets/global/plugins/bootstrap-menu-builder/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js"></script>





        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?=base_url()?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url()?>assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/form-validation.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/form-samples.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/components-date-time-pickers.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/table-datatables-custom-ets.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/table-datatables-server-side.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/ui-sweetalert.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/form-fileupload.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/profile.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/components-bootstrap-tagsinput.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/apps/scripts/calendar.min.js" type="text/javascript"></script>





        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?=base_url()?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN CUSTOM SCRIPTS -->
        <script src="<?=base_url()?>assets/global/scripts/remove_restore.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/global/scripts/custom.js" type="text/javascript"></script>
		
        <script src="<?=base_url()?>assets/pages/scripts/components-code-editors.min.js" type="text/javascript"></script>
        <!-- END CUSTOM SCRIPTS -->
		 
		<?php echo $extra; ?>
		
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				// Find div elements containing select elements with the multiple attribute
				var divsWithMultipleSelect = document.querySelectorAll('.form-group');

				// Iterate over each div
				divsWithMultipleSelect.forEach(function(div) {
				  // Find the select element within the div
				  var selectElement = div.querySelector('select[multiple]');

				  // If a select element with the multiple attribute is found
				  if (selectElement) {
					// Find the label tag within the div
					var labelElement = div.querySelector('label');

					// Create a new checkbox element
					var checkboxElement = document.createElement('input');
					checkboxElement.type = 'checkbox';
					checkboxElement.className = 'all_select';
					checkboxElement.setAttribute('onchange', 'selectAllOptions(this)');

					// Append the checkbox and additional content to the existing label
					labelElement.appendChild(document.createTextNode(' ('));
					labelElement.appendChild(checkboxElement);
					labelElement.appendChild(document.createTextNode(' Select All)'));
				  }
				});
			  });


			function selectAllOptions(checkbox) {
			  var container = $(checkbox).closest('div'); // Find the nearest parent div using jQuery
			  var select_input = container.find('select'); // Find the nearest select element inside that div using jQuery

			  if (checkbox.checked) {
				console.log(select_input);

				select_input.find('option[value]:not([value=""])').prop('selected', true);
				select_input.trigger('change');
			  } else {
				// If checkbox is unchecked, deselect all options
				select_input.find('option').prop('selected', false);
				select_input.trigger('change');
			  }
			}
		</script>

		<?php echo $mediaManager; ?>	
    </body>
</html>