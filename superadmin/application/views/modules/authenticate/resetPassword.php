<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?=$SITE[0]['site_name'];?> - <?=$SITE[0]['site_moto'];?> | <?=$view;?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="<?=$SITE[0]['site_meta_description'];?>" name="description" />
        <meta content="<?=$SITE[0]['site_meta_keyword'];?>" name="keywords" />
        <meta content="<?=$SITE[0]['site_meta_author'];?>" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=base_url('assets/global/plugins/select2/css/select2.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/select2/css/select2-bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url('assets/global/css/components-rounded.min.css');?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url('assets/global/css/plugins.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?=base_url('assets/pages/css/login-3.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
        	<img src="<?=file_upload_base_url($SITE[0]['site_logo']);?>" alt="<?=$SITE[0]['site_name'];?> Logo"/>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN FORGOT PASSWORD FORM -->			
			<form action="<?=base_url('authenticate/resetPasswordSubmitted');?>" role="form" method="post" class="horizontal-form"id="form_sample_12"  enctype="multipart/form-data">
                <h3 class="form-title">Reset Password</h3>
			<!--==========This section is for user authentication Message=======-->
			<?php if($this->session->flashdata('errorMSG')) { ?>
                <div class="alert alert-danger">
                    <button class="close" data-close="alert"></button>
                    <span> <?=$this->session->flashdata('errorMSG');?> </span>
                </div>
			<?php } ?>
			<?php if($this->session->flashdata('successMSG')) { ?>
                <div class="alert alert-success">
                    <button class="close" data-close="alert"></button>
                    <span> <?=$this->session->flashdata('successMSG');?> </span>
                </div>
			<?php } ?>
                <p> Use OTP whic is send to your email Address. </p>
			
													<div class="form-group">
														<label class="control-label">Enter OTP</label> 
														<div class="input-icon right">
															<input type="text" name="reset_password_otp" id="reset_password_otp"  placeholder="Enter Your 6 digit OTP" minlength="6" maxlength="6" class= "form-control" required />
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">New Password</label> 
														<div class="input-icon right">
															<i class="fa fa-eye font-blue" title="View Password" onClick="changeType('admin_password','password','text')"></i>
															<input type="password" name="admin_password" id="admin_password"  placeholder="New Password" minlength="8" maxlength="40" class= "form-control" onKeyUp="validatePassword()" required />
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">Re-type New Password</label> 
														<div class="input-icon right">
															<i class="fa fa-eye font-blue" title="View Password" onClick="changeType('admin_password_recovery','password','text')"></i>
															<input type="password" name="admin_password_recovery" id="admin_password_recovery"  placeholder="Re-Type New Password" minlength="8" maxlength="40" class= "form-control" onKeyUp="validatePassword()" required />
														</div>
													</div>
			
                <div class="form-actions">
                    <a href="<?=base_url('authenticate/');?>" class="btn grey-salsa btn-outline"> Back to Login</a>
                    <?= form_submit(['name'=>'adminResetPasswordSubmit','id'=>'adminResetPasswordSubmit','value'=>'Submit','class'=>'btn pull-right']); ?>
                </div>
            <?=form_close();?>
            <!-- END FORGOT PASSWORD FORM -->
        </div>
        <!-- END LOGIN -->
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<script src="assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/js.cookie.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/jquery.blockui.min.js" type="text/javascript');?>"></script>
        <script src="<?=base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js');?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?=base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/jquery-validation/js/additional-methods.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/select2/js/select2.full.min.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?=base_url('assets/global/scripts/app.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/scripts/custom.js');?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url('assets/pages/scripts/login.min.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>