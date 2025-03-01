<div class="main details-page-all">

    <section class="breadcrumb-wrapper py-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <ul class="breadcrumb mb-0">
                        <li>
                            <a href="index.php" class="text-light">Home</a>
                        </li>
                        <li class="active"> Property Details </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 mt-1">
                    <ul class="breadcrumb unique justify-content-lg-end justify-content-between mb-0">
                        <li class="active"> Posted on: Jan 30, 25 </li>
                        <li class="active text-light"> Property ID: 75562015 </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="container">
            <a href="<?=site_url('edit-post-property-form');?>" class="edit-details-btn"><i class="fa-solid fa-pen-to-square"></i>Edit Details</a>
            <!-- <a href="#" class="edit-details-btn"><i class="fa-regular fa-heart"></i>Shortlist</a> -->
        </div>
    </section>

    <section class="section details-content-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-lg-0 mb-3 position-relative">
                    <div class="sales-tab">
                        <div class="row">
                            <div class="tab-group">
                                <button type="button" class="btn-tab treat-tab active" onclick="showBox(this,'image-gallery')"><i class="fa-regular fa-image"></i> Photos</button>

                                <button type="button" class="btn-tab treat-tab " onclick="showBox(this,'video-gallery')"><i class="fa-solid fa-video"></i>Videos</button>
                            </div>
                        </div>

                        <div class="treat-box" id="image-gallery" style="display: block;">
                            <div class="owl-carousel owl-theme details-img-slider">
                                <img src="img/listing-img.jpg" class="img-fluid w-100" alt="">
                                <img src="img/listing-img.jpg" class="img-fluid w-100" alt="">
                                <img src="img/listing-img.jpg" class="img-fluid w-100" alt="">
                            </div>

                        </div>

                        <div class="treat-box" id="video-gallery" style="display: none;">
                            <div class="owl-carousel owl-theme details-img-slider">
                                <div>
                                    <iframe width="100%" height="450px" src="https://www.youtube.com/embed/nknlwbJMHdE" title="Dr Bryan Rodgers discusses Edinburgh Business School&#39;s online MBA | Heriot-Watt Online" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                <img src="img/listing-img.jpg" class="img-fluid w-100" alt="">
                                <img src="img/listing-img.jpg" class="img-fluid w-100" alt="">
                            </div>
                        </div>

                    </div>



                </div>
                <div class="col-md-7">
                    <div class="row details-page-section">
                        <div class="col-md-8 details-page-topbar">
                            <h3>Diamond Manor Apartment</h3>
                            <div class="d-flex align-items-center">
                                <div class="details-page-topdown-bar">
                                    <a href="#"><i class="fa-solid fa-shuffle"></i>Compare</a>
                                </div>
                                <div class="details-page-topdown-bar">
                                    <a href="#"><i class="fa-regular fa-share-from-square"></i>Share</a>
                                </div>
                                <div class="details-page-topdown-bar">
                                    <a href="#"><i class="fa-regular fa-heart"></i>Favourite</a>
                                </div>
                                <div class="details-page-topdown-bar">
                                    <a href="#">View : 324</a>
                                </div>
                                <div class="details-page-topdown-bar">
                                    <a href="#"><i class="fa-solid fa-print"></i>Print</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 details-page-topbar mt-lg-0 mt-2">
                            <h3>INR. 50,0000</h3>
                            <div class="details-page-topdown-bar ps-0 border-0">
                                <h5>INR. 48,000 <span>/Per Month</span></h5>
                            </div>
                        </div>
                    </div>

                    <div class="details-card">

                        <div class="row border-bottom">
                            <div class="col-md-6 col-12 mb-3 mb-lg-2 ">
                                <h4><img src="img/area.png" class="img-fluid" alt=""> Area</h4>
                                <ul>
                                    <li>Super Built up area 1400 sq.ft</li>
                                    <li>Built Up area: 1350 sq.ft.</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-12 mb-3 mb-lg-2">
                                <h4><img src="img/config.png" class="img-fluid" alt=""> Configuration</h4>
                                <ul>
                                    <li>3 Bedrooms , 3 Bathrooms, 2 Balconies with Others</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row border-bottom">
                            <div class="col-md-6 col-12 mb-3 mb-lg-2 ">
                                <h4><img src="img/price-tag.png" class="img-fluid" alt=""> Price</h4>
                                <ul>
                                    <li>₹ 2.75 Crore+ Govt Charges & Tax
                                        @ 15,357 per sq.ft.</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-12 mb-3 mb-lg-2">
                                <h4><img src="img/directional-sign.png" class="img-fluid" alt=""> Address</h4>
                                <ul>
                                    <li>New York, NY 10007, USA</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12 mb-3 mb-lg-2 ">
                                <h4><img src="img/stairs.png" class="img-fluid" alt=""> Floor Number</h4>
                                <ul>
                                    <li>2nd of 4 Floors</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-12 mb-3 mb-lg-2">
                                <h4><img src="img/cake.png" class="img-fluid" alt=""> Property Age</h4>
                                <ul>
                                    <li>20 Year Old</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-6">
                                <a href="#" class="listing-main-btn w-100">Contact Owner</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="listing-main-btn w-100">Get Phone No</a>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section custom-tab-nav-section py-2">
        <div class="container">
            <div class="custom-tab-nav">
                <div class="scrollable-tabs-container" id="navbar-example2">
                    <div class="left-arrow d-lg-none d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </div>

                    <ul>
                        <!-- <li><a href="#overview" class="active">Overview</a></li> -->
                        <li><a href="#propertyDetails" onclick="scroll_animate('prop',0.2)" class="active">Property Details</a></li>
                        <li><a href="#amenities" onclick="scroll_animate('anny',0.5)">Amenities</a></li>
                        <li><a href="#nearbyPlaces" onclick="scroll_animate('nanny',0.63)">Nearby Places</a></li>
                    </ul>

                    <div class="right-arrow active d-lg-none d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mb-3">
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                        <div class="mb-3" id="propertyDetails">
                            <div class="row details-page-section">
                                <div class="col-md-8 details-page-topbar">
                                    <h3 class="mb-0">Property Details</h3>
                                </div>

                            </div>

                            <div class="details-card">

                                <div class="row border-bottom">
                                    <div class="col-md-6 col-12 mb-3 mb-lg-2 ">
                                        <h4><img src="img/rupee.png" class="img-fluid" alt=""> Price Breakup</h4>
                                        <ul>
                                            <li>₹50 Lac | ₹3,00,000 Approx. Registration Charges</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3 mb-lg-2">
                                        <h4><img src="img/online-booking.png" class="img-fluid" alt=""> Booking Amount</h4>
                                        <ul>
                                            <li>₹5.0 Lac</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row border-bottom">

                                    <div class="col-md-6 col-12 mb-3 mb-lg-2">
                                        <h4><img src="img/directional-sign.png" class="img-fluid" alt=""> Address</h4>
                                        <ul>
                                            <li>New York, NY 10007, USA</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6 col-12 mb-3 mb-lg-2 ">
                                        <h4><img src="img/sofa.png" class="img-fluid" alt=""> Furnishing</h4>
                                        <ul>
                                            <li>Unfurnished</li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3 mb-lg-2 ">
                                        <h4><img src="img/loan.png" class="img-fluid" alt=""> Loan Offered</h4>
                                        <ul>
                                            <li>2nd of 4 Floors</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3 mb-lg-2">
                                        <h4><img src="img/cake.png" class="img-fluid" alt=""> Age of Construction</h4>
                                        <ul>
                                            <li>20 Year Old</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <div class="col-lg-3 col-6 mt-lg-3 mt-2">
                                        <a href="#" class="listing-main-btn w-100">Contact Owner</a>
                                    </div>
                                </div> -->


                            </div>
                        </div>


                        <div class="amenities-section mb-3">
                            <div class="row details-page-section">
                                <div class="col-md-8 details-page-topbar">
                                    <h3 class="mb-0">Semifurnished</h3>
                                </div>

                            </div>

                            <div class="details-card">

                                <div class="row">
                                    <div class="col-md-4 col-6 mb-3 mb-lg-2 ">
                                        <h4><img src="img/wardrobe.png" class="img-fluid" alt=""> 2 Wardrobe</h4>
                                    </div>
                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/fan.png" class="img-fluid" alt=""> 4 Fan</h4>
                                    </div>
                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/fan (1).png" class="img-fluid" alt=""> 1 Exhaust Fan</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/gas-geyser.png" class="img-fluid" alt=""> 2 Geyser</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/cooking-stove.png" class="img-fluid" alt=""> 1 Stove</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/idea.png" class="img-fluid" alt=""> 30 Light</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/kitchen.png" class="img-fluid" alt=""> 1 Modular Kitchen</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/cooking.png" class="img-fluid" alt=""> 1 Chimney</h4>
                                    </div>
                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/air-conditioner.png" class="img-fluid" alt=""> No AC</h4>
                                    </div>
                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/bed.png" class="img-fluid" alt=""> No Bed</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/window.png" class="img-fluid" alt="">No Curtains</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/table.png" class="img-fluid" alt=""> No Dining Table</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/microwave-oven.png" class="img-fluid" alt=""> No Microwave</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/fridge.png" class="img-fluid" alt="">No Fridge</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/sofa.png" class="img-fluid" alt="">No Sofa</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/smart-tv.png" class="img-fluid" alt="">No TV</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/washing-machine.png" class="img-fluid" alt="">No Washing Machine</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/water-filter.png" class="img-fluid" alt=""> No Water Purifier</h4>
                                    </div>
                                </div>



                            </div>
                        </div>


                        <div class="amenities-section mb-3" id="amenities">
                            <div class="row details-page-section">
                                <div class="col-md-8 details-page-topbar">
                                    <h3 class="mb-0">Amenities</h3>
                                </div>

                            </div>

                            <div class="details-card">

                                <div class="row">
                                    <div class="col-md-4 col-6 mb-3 mb-lg-2 ">
                                        <h4><img src="img/power.png" class="img-fluid" alt=""> Power Back Up</h4>
                                    </div>
                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/lift.png" class="img-fluid" alt=""> Lift</h4>
                                    </div>
                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/club.png" class="img-fluid" alt=""> Club House</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/swimming.png" class="img-fluid" alt=""> Swimming Pool</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/gym.png" class="img-fluid" alt=""> Gymnasium</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/park.png" class="img-fluid" alt=""> Park</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/parking.png" class="img-fluid" alt=""> Reserved Parking</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/security.png" class="img-fluid" alt=""> Security</h4>
                                    </div>
                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/terrace.png" class="img-fluid" alt=""> Private Terrace/Garden</h4>
                                    </div>
                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/vastu.png" class="img-fluid" alt=""> Vaastu Compliant</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/visitor.png" class="img-fluid" alt=""> Visitor Parking</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/security.png" class="img-fluid" alt=""> Aerobics Room</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/flowers.png" class="img-fluid" alt=""> Flower Gardens</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/indoor.png" class="img-fluid" alt=""> Indoor Games Room</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/kidsclub.png" class="img-fluid" alt=""> Kids Club</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/play-area.png" class="img-fluid" alt=""> Kids Play Area</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/cycling.png" class="img-fluid" alt=""> Cycling & Jogging Track</h4>
                                    </div>

                                    <div class="col-md-4 col-6 mb-3 mb-lg-2">
                                        <h4><img src="img/fire.png" class="img-fluid" alt=""> Fire Equipment</h4>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div class="amenities-section" id="nearbyPlaces">
                            <div class="row details-page-section">
                                <div class="col-md-8 details-page-topbar">
                                    <h3 class="mb-0">Nearby Places</h3>
                                </div>

                            </div>

                            <div class="details-card">

                                <div class="row">
                                    <div class="col-md-5 col-12 mb-3 mb-lg-2 ">
                                        <div class="nearby-place d-flex align-items-center justify-content-between">
                                            <a href="#"><img src="img/police-station.png" class="img-fluid" alt=""> Police Station</a>
                                            <h4>10 min(5KM)</h4>
                                        </div>

                                        <div class="nearby-place d-flex align-items-center justify-content-between">
                                            <a href="#"><img src="img/park.png" class="img-fluid" alt=""> Park</a>
                                            <h4>10 min(5KM)</h4>
                                        </div>
                                        <div class="nearby-place d-flex align-items-center justify-content-between">
                                            <a href="#"><img src="img/train.png" class="img-fluid" alt=""> Metro</a>
                                            <h4>10 min(5KM)</h4>
                                        </div>

                                        <div class="nearby-place d-flex align-items-center justify-content-between">
                                            <a href="#"><img src="img/stand.png" class="img-fluid" alt=""> Market</a>
                                            <h4>10 min(5KM)</h4>
                                        </div>

                                        <div class="nearby-place d-flex align-items-center justify-content-between">
                                            <a href="#"><img src="img/train-station.png" class="img-fluid" alt=""> Railstation</a>
                                            <h4>10 min(5KM)</h4>
                                        </div>

                                        <div class="nearby-place d-flex align-items-center justify-content-between">
                                            <a href="#"><img src="img/bus-stop.png" class="img-fluid" alt=""> Bus Stop</a>
                                            <h4>10 min(5KM)</h4>
                                        </div>
                                        <div class="nearby-place d-flex align-items-center justify-content-between">
                                            <a href="#"><img src="img/restaurant.png" class="img-fluid" alt=""> restaurant</a>
                                            <h4>10 min(5KM)</h4>
                                        </div>






                                        <!-- <h4><img src="img/lift.png" class="img-fluid" alt=""> Park</h4> -->
                                        <!-- <h4><img src="img/club.png" class="img-fluid" alt=""> Metro</h4> -->
                                        <!-- <h4><img src="img/swimming.png" class="img-fluid" alt=""> Market</h4> -->
                                    </div>
                                    <!-- <div class="col-md-2 col-4">
                                <h4>10 min(5KM)</h4>
                                <h4>10 min(5KM)</h4>
                                <h4>10 min(5KM)</h4>
                                <h4>10 min(5KM)</h4>
                                <h4>10 min(5KM)</h4>
                                <h4>10 min(5KM)</h4>
                            </div> -->
                                    <div class="col-md-7 col-12 mb-3 mb-lg-2 my-auto">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29640.6332565513!2d87.72926307344429!3d21.777197227245637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0326e5394d8237%3A0x7bb6b4d525857f71!2sContai%2C%20West%20Bengal%20721401!5e0!3m2!1sen!2sin!4v1738400210850!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                </div>

                <!-- <div class="col-md-3">
                    <div class="details-form">
                        <h3>Enquiry to <span> Dealer</span> </h3>
                        <form action="">
                            <div class="row">
                                <div class="col-12 form-group mb-0 mb-lg-3">
                                    <div class="input-group from-border-bottom mb-lg-0 mb-3">
                                        <span class="input-group-text" id="from-icon"><i class="fa-solid icon-user"></i></span>
                                        <input class="form-control  type=" text" value="" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-12 form-group mb-0 mb-lg-3">
                                    <div class="input-group from-border-bottom mb-lg-0 mb-3">
                                        <span class="input-group-text" id="from-icon"><i class="fa-solid icon-phone"></i></span>
                                        <input class="form-control" type="text" value="" placeholder="Phone No">
                                    </div>

                                </div>

                                <div class="col-12 form-group mb-0 mb-lg-3">
                                    <div class="input-group from-border-bottom mb-lg-0 mb-3">
                                        <span class="input-group-text" id="from-icon"><i class="fa-solid icon-clock"></i></span>
                                        <select class="form-select from-location">
                                            <option selected="">Preferred Time to Call</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="col-12 form-group mb-0 mb-lg-3">
                                    <div class="input-group from-border-bottom mb-lg-0 mb-3">
                                        <span class="input-group-text align-items-start mt-1" id="from-icon"><i class="fa-solid icon-bubbles"></i></span>
                                        <textarea class="form-control" rows="3" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <a href="#" class="listing-main-btn w-100">Submit</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </section>







    <!-- <section class="section">
        <div class="container">
            <div class="details-bottom-content">
                <h3>Amenities</h3>
            </div>
            <div class="row">
                <div class="col-md-8">

                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </section> -->

</div>