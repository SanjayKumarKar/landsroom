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
        <title><?=$SITE[0]['site_name'];?> - <?=$SITE[0]['site_moto'];?> | <?=$title;?></title>
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
        	<img src="<?php echo file_upload_base_url($SITE[0]['site_logo']);?>" alt="<?php echo $SITE[0]['site_name'];?> Logo" />
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
			<?= form_open('authenticate/loginSubmitted', ['class'=>'login-form']); ?>
                <h3 class="form-title"><?=$heading;?></h3>
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
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <div class="input-icon right">
                        <i class="fa fa-envelope"></i>
						<?php 
						if(set_value('admin_email'))
							$email=set_value('admin_email');
						elseif($cookie_email)
							$email=$cookie_email;
						else
							$email="";
						echo form_input(['type'=>'email','name'=>'admin_email','id'=>'admin_email','value'=>$email,'class'=>'form-control placeholder-no-fix','placeholder'=>'Email','autocomplete'=>'off','required'=>'required']); ?>
					</div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon right">
						<i class="fa fa-eye" title="View Password" onClick="changeType('admin_password','password','text')"></i>
						<?php
						if(set_value('admin_password'))
							$password=set_value('admin_password');
						elseif($cookie_password)
							$password=$cookie_password;
						else
							$password="";
						echo form_password(['name'=>'admin_password','id'=>'admin_password','value'=>$password,'class'=>'form-control placeholder-no-fix','placeholder'=>'Password','autocomplete'=>'off','required'=>'required','minlength'=>'8']); ?>
					</div>
                </div>
                <div class="form-actions">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="admin_remember_me" value="1" <?php if($cookie_remember) echo "checked"; ?> /> Remember me
                        <span></span>
                    </label>
						<?= form_submit(['name'=>'adminLoginSubmit','id'=>'adminLoginSubmit','value'=>'Login','class'=>'btn pull-right']); ?>
                </div>
                <!--<div class="login-options">
                    <h4>Or login with</h4>
                    <ul class="social-icons">
                        <li>
                            <a class="facebook" data-original-title="facebook" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="twitter" data-original-title="Twitter" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="googleplus" data-original-title="Goole Plus" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="linkedin" data-original-title="Linkedin" href="javascript:;"> </a>
                        </li>
                    </ul>
                </div>-->
                <div class="forget-password">
                    <h4>Forgot your password ?</h4>
                    <p> no worries, click
                        <a href="<?=base_url('authenticate/forgetPassword');?>" > here </a> to reset your password. </p>
                </div>
            <?=form_close();?>
            <!-- END LOGIN FORM -->
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