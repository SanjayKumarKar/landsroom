    
    
    <div class="main">
        <section class=" section listing-page-section">
            <div class="container">
                        <?php if ($this->session->flashdata('successContactMSG')) { ?>
                        <div class="alert alert-success">
                            <?= $this->session->flashdata('successContactMSG'); ?>
                        </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('errorContactMSG')) { ?>
                            <div class="alert alert-danger">
                                <?= $this->session->flashdata('errorContactMSG'); ?>
                            </div>
                        <?php } ?>
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-4 mb-lg-0 mb-3">
                        <div class="listing-card profile">
                            <h3>Profile <span> Details</span></h3>
                            <div class="profile-box mb-4">
                                <h4><img src="img/user.png" alt="" class="img-fluid"> <?= $this->session->userdata('user_name')?></h4>
                                <a href="#">
                                    <h4><img src="img/wishlist.png" alt="" class="img-fluid"> My Wishlist</h4>
                                </a>
                                <a href="#">
                                    <h4><img src="img/protection.png" alt="" class="img-fluid"> My Property</h4>
                                </a>
                                <a href="#">
                                    <h4><img src="img/advertisement.png" alt="" class="img-fluid"> List a new Property</h4>
                                </a>
                                <!-- <a href="#"><h4><img src="img/search.png" alt="" class="img-fluid"> Buy Property</h4></a> -->
                            </div>
                            <a href="<?= front_base_url('Authenticate/logout') ?>" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <!-- <div class="listing-right-top-card mb-4">
                            <div class="d-lg-flex d-block align-tems-center justify-content-between">
                                <div class="right-top-left-card">
                                    <h3><span>12 </span> Result Found</h3>
                                </div>
                                <div class="right-top-right-card d-flex align-items-center">
                                    <label for="exampleInputEmail1" class="form-label me-2 mb-0">Sort By :</label>
                                    <select class="form-select sort-by">
                                        <option selected>Newest to Oldest</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                        <div class="row mb-3">
                            <div class="col-12 mb-3 profile-col">
                                <div class="listing-right-bottom-card p-3">
                                    <div class="top-box">
                                        <a href="details-page.php">
                                            <h3>Diamond Manor Apartment</h3>
                                        </a>
                                        <div class="row">
                                            <div class="get-direction col-6">
                                                <p><i class="fa-solid fa-location-arrow"></i>81-199 E Broadway, Hackensack, NJ07601, USA</p>
                                            </div>
                                            <div class="get-direction col-6 my-lg-0 my-auto justify-content-between text-lg-start text-end">
                                                <a href="https://maps.app.goo.gl/RXzpUoUX5Z5MR7ky9" target="_blank"><i class="fa-solid fa-signs-post"></i>View Location</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-box mt-3">
                                        <div class="row">
                                            <div class="col-md-4 left-col mb-lg-0 mb-3">
                                                <div class="owl-carousel owl-theme listing-img-slider">
                                                    <img src="img/listing-img.jpg" class="img-fluid w-100" alt="">
                                                    <img src="img/listing-img.jpg" class="img-fluid w-100" alt="">
                                                </div>

                                                <!-- <h3>Owner : <span>Akash Roy</span></h3> -->
                                                <div class="heart-react">
                                                    <a href="#"><i class="fa-solid fa-heart"></i></a>
                                                    <a href="#"><i class="fa-solid fa-share diff-color"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 right-col">
                                                <h3><span>INR. 50,0000</span> / Per Month</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis pariatur nihil sed ut suscipit adipisci, repellendus quaerat molestiae itaque nostrum quisquam beatae necessitatibus hic ratione iure, rerum nisi cupiditate?</p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <div class="details-list">
                                                        <h5>Bed</h5>
                                                        <p>5</p>
                                                    </div>
                                                    <div class="details-list">
                                                        <h5>Bath</h5>
                                                        <p>2</p>
                                                    </div>
                                                    <div class="details-list">
                                                        <h5>Size</h5>
                                                        <p>1800 sq/ft</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-6">
                                                        <a href="<?=site_url('edit-details-page');?>" class="listing-main-btn w-100">Edit Details</a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="<?=site_url('edit-post-property-form');?>" class="listing-main-btn w-100" >View Details</a>
                                                        <!-- data-bs-toggle="modal" data-bs-target="#popup" -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-3 profile-col">
                                <div class="listing-right-bottom-card p-3">
                                    <div class="top-box">
                                        <a href="details-page.php">
                                            <h3>Diamond Manor Apartment</h3>
                                        </a>
                                        <div class="row">
                                            <div class="get-direction col-6">
                                                <p><i class="fa-solid fa-location-arrow"></i>81-199 E Broadway, Hackensack, NJ07601, USA</p>
                                            </div>
                                            <div class="get-direction col-6 my-lg-0 my-auto justify-content-between text-lg-start text-end">
                                                <a href="https://maps.app.goo.gl/RXzpUoUX5Z5MR7ky9" target="_blank"><i class="fa-solid fa-signs-post"></i>View Location</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-box mt-3">
                                        <div class="row">
                                            <div class="col-md-4 left-col mb-lg-0 mb-3">
                                                <div class="owl-carousel owl-theme listing-img-slider">
                                                    <img src="img/listing-img.jpg" class="img-fluid w-100" alt="">
                                                    <img src="img/listing-img.jpg" class="img-fluid w-100" alt="">
                                                </div>

                                                <!-- <h3>Owner : <span>Akash Roy</span></h3> -->
                                                <div class="heart-react">
                                                    <a href="#"><i class="fa-solid fa-heart"></i></a>
                                                    <a href="#"><i class="fa-solid fa-share diff-color"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 right-col">
                                                <h3><span>INR. 50,0000</span> / Per Month</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis pariatur nihil sed ut suscipit adipisci, repellendus quaerat molestiae itaque nostrum quisquam beatae necessitatibus hic ratione iure, rerum nisi cupiditate?</p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <div class="details-list">
                                                        <h5>Bed</h5>
                                                        <p>5</p>
                                                    </div>
                                                    <div class="details-list">
                                                        <h5>Bath</h5>
                                                        <p>2</p>
                                                    </div>
                                                    <div class="details-list">
                                                        <h5>Size</h5>
                                                        <p>1800 sq/ft</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-6">
                                                        <a href="edit-details.php" class="listing-main-btn w-100">Edit Details</a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="details-page.php" class="listing-main-btn w-100" data-bs-toggle="modal" data-bs-target="#popup">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-3 profile-col">
                                <div class="listing-right-bottom-card p-3">
                                    <div class="top-box">
                                        <a href="details-page.php">
                                            <h3>Diamond Manor Apartment</h3>
                                        </a>
                                        <div class="row">
                                            <div class="get-direction col-6">
                                                <p><i class="fa-solid fa-location-arrow"></i>81-199 E Broadway, Hackensack, NJ07601, USA</p>
                                            </div>
                                            <div class="get-direction col-6 my-lg-0 my-auto justify-content-between text-lg-start text-end">
                                                <a href="https://maps.app.goo.gl/RXzpUoUX5Z5MR7ky9" target="_blank"><i class="fa-solid fa-signs-post"></i>View Location</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-box mt-3">
                                        <div class="row">
                                            <div class="col-md-4 left-col mb-lg-0 mb-3">
                                                <div class="owl-carousel owl-theme listing-img-slider">
                                                    <img src="img/listing-img.jpg" class="img-fluid w-100" alt="">
                                                    <img src="img/listing-img.jpg" class="img-fluid w-100" alt="">
                                                </div>

                                                <!-- <h3>Owner : <span>Akash Roy</span></h3> -->
                                                <div class="heart-react">
                                                    <a href="#"><i class="fa-solid fa-heart"></i></a>
                                                    <a href="#"><i class="fa-solid fa-share diff-color"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 right-col">
                                                <h3><span>INR. 50,0000</span> / Per Month</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis pariatur nihil sed ut suscipit adipisci, repellendus quaerat molestiae itaque nostrum quisquam beatae necessitatibus hic ratione iure, rerum nisi cupiditate?</p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <div class="details-list">
                                                        <h5>Bed</h5>
                                                        <p>5</p>
                                                    </div>
                                                    <div class="details-list">
                                                        <h5>Bath</h5>
                                                        <p>2</p>
                                                    </div>
                                                    <div class="details-list">
                                                        <h5>Size</h5>
                                                        <p>1800 sq/ft</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-6">
                                                        <a href="edit-details.php" class="listing-main-btn w-100">Edit Details</a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="details-page.php" class="listing-main-btn w-100" data-bs-toggle="modal" data-bs-target="#popup">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>









                    </div>
                </div>
            </div>
        </section>
    </div>