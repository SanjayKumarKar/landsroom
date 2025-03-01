<div class="navik-header">
    <div class="container">

        <!-- Navik header -->
        <div class="navik-header-container">

            <!--Logo-->
            <div class="logo" data-mobile-logo="img/logo.png" data-sticky-logo="img/logo.png">
                <a href="<?php echo site_url(); ?>"><img src="<?= $SITE_LOGO; ?>" alt="logo" /></a>
            </div>

            <!-- Burger menu -->
            <div class="burger-menu">
                <div class="line-menu line-half first-line"></div>
                <div class="line-menu"></div>
                <div class="line-menu line-half last-line"></div>
            </div>

            <!--Navigation menu-->
            <nav class="navik-menu menu-caret submenu-top-border submenu-scale">
                <ul class="list-unstyled">
                    <li class="current-menu"><a href="#">BUY</a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url(); ?>">Dropdown menu</a></li>
                            <li><a href="#">Dropdown menu</a></li>

                            <li><a href="#">Dropdown menu</a></li>
                            <li><a href="#">Dropdown menu</a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Dropdown sub menu</a></li>
                                    <li><a href="#">Dropdown sub menu</a></li>
                                    <li><a href="#">Dropdown sub menu</a></li>
                                    <li><a href="#">Dropdown sub menu</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> <a href="#">RENT</a>
                        <!-- <ul>
                                <li>

                                    
                                    <div class="mega-menu-container">
                                        <div class="row">

                                         
                                            <div class="col-md-6 col-lg-3">
                                                <div class="mega-menu-box">
                                                    <div class="mega-menu-thumbnail">
                                                        <a href="#">
                                                            <img src="demo/images/mega-menu-thumbnail-01.jpg"
                                                                alt="thumbnail" />
                                                        </a>
                                                    </div>
                                                    <h4 class="mega-menu-heading"><a href="#">Sodales luctus
                                                            nunc</a></h4>
                                                    <div class="mega-menu-desc">
                                                        Donec tellus faucibus dolor viverra neca blandit at justo
                                                        pendisse dolor turpis lobortis sodales felis justo hendrerit
                                                        fermentum quam fusce mattis nibh nulla.
                                                    </div>
                                                </div>
                                            </div>

                                       
                                            <div class="col-md-6 col-lg-3">
                                                <div class="mega-menu-box">
                                                    <div class="mega-menu-thumbnail">
                                                        <a href="#">
                                                            <img src="demo/images/mega-menu-thumbnail-02.jpg"
                                                                alt="thumbnail" />
                                                        </a>
                                                    </div>
                                                    <h4 class="mega-menu-heading"><a href="#">Mauris cursus eros</a>
                                                    </h4>
                                                    <div class="mega-menu-desc">
                                                        Quisque vitae sapien neque in fusce amet enim nec nisl
                                                        gravida rutrum sed id justo sem adipiscing aliquam potenti
                                                        morbi vehicula.
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6 col-lg-3">
                                                <div class="mega-menu-box">
                                                    <div class="mega-menu-thumbnail">
                                                        <a href="#">
                                                            <img src="demo/images/mega-menu-thumbnail-03.jpg"
                                                                alt="thumbnail" />
                                                        </a>
                                                    </div>
                                                    <h4 class="mega-menu-heading"><a href="#">Praesent nec
                                                            luctus</a></h4>
                                                    <div class="mega-menu-desc">
                                                        Laoreet eu ornare at nulla sit luctus neque dapibus rhoncus
                                                        malesuada metus vivamus sodales quam nullam fringilla magna
                                                        ut elit varius varius lobortis hendrerit.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-3">
                                                <div class="mega-menu-box">
                                                    <div class="mega-menu-thumbnail">
                                                        <a href="#">
                                                            <img src="demo/images/mega-menu-thumbnail-04.jpg"
                                                                alt="thumbnail" />
                                                        </a>
                                                    </div>
                                                    <h4 class="mega-menu-heading"><a href="#">Etiam semper
                                                            mauris</a></h4>
                                                    <div class="mega-menu-desc">
                                                        Placerat justo vitae massa molestie vehicula ultricies
                                                        pharetra nisl sem fermentum a sollicitudin sed nam dapibus
                                                        ultrices justo sed sem congue molestie.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </li>
                            </ul> -->
                    </li>
                    <li><a href="#">AGENTS</a> </li>
                    <li><a href="#">SERVICES</a></li>
                    <!-- <li class="d-lg-none d-block">
                                <a href="#"><img src="img/nav btn.svg" alt="" class="img-fluid"></a>
                            </li> -->
                </ul>
            </nav>


            <div class="d-lg-flex align-items-center d-none">

                <div class="nab-post">
                    <a href="<?= site_url('post-property'); ?>"><img src="img/nav btn.svg" alt="" class="img-fluid"></a>
                </div>

                <div class="question">
                    <a href="#"><img src="img/question.svg" alt="" class="img-fluid"></a>
                </div>

                <nav class="navik-menu menu-caret submenu-top-border submenu-scale">
                    <ul class="list-unstyled">
                        <li class="user">
                            <?php if ($this->session->userdata('login_id')) { ?>
                                <a href="javascript:0" class="px-0 d-flex align-items-center">
                                    <img src="img/user.svg" class="img-fluid" alt="">
                                    <h5>Hello, <br> <?= $this->session->userdata('user_name') ?></h5>
                                </a>
                            <?php  } else { ?>
                                <a href="<?= site_url('signin-page'); ?>" class="px-0 d-flex align-items-center">
                                    <img src="img/user.svg" class="img-fluid" alt="">
                                    <h5>Sign In <br> Join Free</h5>
                                </a>
                            <?php } ?>
                            <ul class="list-unstyled">
                                <?php if($this->session->userdata('login_id')){?>
                                    <li><a href="<?=front_base_url('owner-listing-page')?>">Profile</a></li>
                               <?php }else{ ?>
                                <li><a href="<?=front_base_url('signin-page')?>">Profile</a></li>
                              <?php } ?>
                                <li><a href="#">My Whislist</a></li>
                                <li><a href="post-property.php">List a new property</a></li>
                                <li><a href="listing.php">Buy Property</a></li>
                                <li><a href="edit-details.php">Post Property Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- <div class="tp-header-action-item d-none d-lg-block">
                    <a href="<?=site_url('wishlist-page');?>" class="tp-header-action-btn">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="tp-header-action-badge"><?php echo isset($wishlist_count) ? $wishlist_count : 0; ?></span>
                    </a>
                </div> -->

            </div>



        </div>

    </div>
</div>