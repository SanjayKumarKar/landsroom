<section class="section footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-auto">
                <div class="footer-left-content">
                    <h2>Find Property</h2>
                    <p>Select your thousand option, without brokerage</p>
                    <a href="#" class="footer-btn"> Find now</a>
                </div>
                <div class="social-media d-flex align-items-center">
                    <!-- <a href="#"><img src="img/faceooo.svg" class="img-fluid" alt=""></a>
                    <a href="#"><img src="img/twitter.svg" class="img-fluid" alt=""></a>
                    <a href="#"><img src="img/instagram.svg" class="img-fluid" alt=""></a>
                    <a href="#"><img src="img/linked in.svg" class="img-fluid" alt=""></a> -->
                    <?php if(!empty($SITE_FACEBOOK)){ ?>
                        <a href="<?=$SITE_FACEBOOK;?>" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f text-2"></i>
                        </a>
                    <?php } ?>

                    <?php if(!empty($SITE_TWITTER)){ ?>
                        <a href="<?=$SITE_TWITTER;?>" target="_blank" title="Twitter">
                            <!-- <i class="fab fa-twitter text-2"></i> -->
                            <i class="fa-brands fa-x-twitter text-2"></i>
                        </a>
                    <?php } ?>

                    <?php if(!empty($SITE_LINKEDIN)){ ?>
                        <a href="<?=$SITE_LINKEDIN;?>" target="_blank" title="Linkedin">
                            <i class="fab fa-linkedin-in text-2"></i>
                        </a>
                    <?php } ?>

                    <?php if(!empty($SITE_PINTEREST)){ ?>
                        <a href="<?=$SITE_PINTEREST;?>" target="_blank" title="Pinterest">
                            <i class="fa-brands fa-pinterest-p text-2"></i>
                        </a>
                    <?php } ?>

                    <?php if(!empty($SITE_INSTAGRAM)){ ?>
                        <a href="<?=$SITE_INSTAGRAM;?>" target="_blank" title="Instagram">
                            <i class="fa-brands fa-instagram text-2"></i>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 border-left">
                <div class="footer-right-content p-lg-3 mt-4 mt-lg-0">
                    <span>Properties in India</span>
                    <a href="<?php echo site_url();?>">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name </a>
                </div>

                <div class="footer-right-content p-lg-3 mt-4 mt-lg-0">
                    <span>New Project in India</span>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name |</a>
                    <a href="#">Property in City name </a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="last-footer py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-lg-0 mb-3">

                <div class="d-flex flex-wrap align-items-center justify-content-lg-between justify-content-center">
                    <a href="#">
                        <h3>About Us</h3>
                    </a>
                    <a href="#">
                        <h3>Careers</h3>
                    </a>
                    <a href="#">
                        <h3>Terms & Condition </h3>
                    </a>
                    <a href="#">
                        <h3>Privacy Policy</h3>
                    </a>
                    <a href="#">
                        <h3>Testimonial</h3>
                    </a>
                    <a href="#">
                        <h3>Sitemap</h3>
                    </a>
                    <a href="#">
                        <h3>FAQs</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bottom-footer">
                    <p>© Copyright <span class="currentYear"><?=date('Y');?></span>. All Rights Reserved. | Design and Develop By Techinnovator</p>
                </div>
            </div>
        </div>

    </div>
</footer>


<div class="modal modal-lg fade" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header position-relative p-0 border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-6">
                        <div class="left-panel">
                            <div class="connect-ico">Things You Can Do<br>with <span class="sm-bd">Login</span></div>
                            <ul class="lg-lists">
                                <li class="lg-list">Login &amp; get matching properties instantly</li>
                                <li class="lg-list">Save &amp; edit your requirement in ‘My Activity’</li>
                                <li class="lg-list">Get personalized emails with property recommendations</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="login-col">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label" require>User Name <span class="req-mark">*</span></label>
                                        <input class="form-control" type="text" placeholder="" aria-label=".form-control-sm example">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <label for="exampleInputEmail1" class="form-label" require>Phone No</label>
                                        <input class="form-control" type="text" placeholder="" aria-label=".form-control-sm example">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label" require>Email <span class="req-mark">*</span></label>
                                        <input class="form-control" type="text" placeholder="" aria-label=".form-control-sm example">
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <div class="tacbox">
                                            <input id="checkbox" type="checkbox" />
                                            <label for="checkbox"> I agree to these <a href="#">Terms and Conditions</a>.</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button class="submit w-100">Login </button>
                                    </div>
                                </div>

            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
