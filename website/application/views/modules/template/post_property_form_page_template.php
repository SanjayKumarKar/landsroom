<div class="main">
    <!-- <section class="post-from">
        <div class="container">
            <div class="row">
                <div class="col-3">

                </div>
            </div>
        </div>
    </section> -->


    <section class="section timeline-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="sticky-card">
                        <div class="progress-bar">
                            <div class="progress" id="progress"></div>
                            <div class="progress-step active">
                                <div class="progress-text">1</div>
                                <div class="progress-content">
                                    Basic <br> Details
                                </div>
                            </div>
                            <div class="progress-step">
                                <div class="progress-text">2</div>
                                <div class="progress-content">
                                    Location <br> Details
                                </div>
                            </div>
                            <div class="progress-step">
                                <div class="progress-text">3</div>
                                <div class="progress-content">
                                    Property <br> Details
                                </div>
                            </div>
                            <div class="progress-step">
                                <div class="progress-text">4</div>
                                <div class="progress-content">
                                    Document <br> Upload
                                </div>
                            </div>
                            <div class="progress-step">
                                <div class="progress-text">5</div>
                                <div class="progress-content">
                                    others <br> Details
                                </div>
                            </div>

                            <div class="progress-step">
                                <div class="progress-text">6</div>
                                <div class="progress-content">
                                    Amenities <br> Details
                                </div>
                            </div>

                        </div>

                        <div class="from-left-content-card mt-4">
                            <div class="caption"><i class="iconS_PPFDesk_16 icon_callIcon"></i>Need help ? </div>
                            <div class="caption-bottom">You can email us at <a href="#">services@landsrooms.com </a>or call us at <a href="#">1800 41 99099</a> (IND Toll-Free).</div>
                        </div>
                    </div>

                </div>

                <div class="col-md-7 property-post-section">
                    <div class="details-form">
                        <form action="thank-you.php" method="post" class="form">
                            <!-- Steps -->
                            <div class="form-step active">
                                <h3>Fill out basic details</h3>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">You are : </label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">Owner</button>
                                            <button class="btn middle" type="button">Agent</button>
                                            <button class="btn right" type="button">Builder</button>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label d-block">What kind property do you have </label>
                                        <div class="form-check form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="option1" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Residential
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="option2" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Commercial
                                            </label>
                                        </div>
                                        <div class="days-btn-container">
                                            <div class="position-relative">
                                                <input class="day-btn" id="vila" type="checkbox" />
                                                <label class="day-label" for="vila">Vila</label>
                                            </div>
                                            <div class="position-relative">
                                                <input class="day-btn" id="flat" type="checkbox" />
                                                <label class="day-label" for="flat">Flat</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="appartment" type="checkbox" />
                                                <label class="day-label" for="appartment">Appartment</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="plot" type="checkbox" />
                                                <label class="day-label" for="plot">Plot</label>
                                            </div>
                                            <div class="position-relative">
                                                <input class="day-btn" id="land" type="checkbox" />
                                                <label class="day-label" for="land">Land</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="farmhouse" type="checkbox" />
                                                <label class="day-label" for="farmhouse">Farmhouse</label>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- <div class="col-12 form-group mb-0 mb-lg-3">
                                        <div class="input-group from-border-bottom mb-lg-0 mb-3">
                                            <span class="input-group-text" id="from-icon"><i class="fa-solid icon-phone"></i></span>
                                            <input class="form-control" type="text" value="" placeholder="Enter Your Phone Number">
                                        </div>

                                    </div> -->
                                    <div class="col-12 mt-1">
                                        <a class="btn btn-next">Continue</a>
                                    </div>

                                </div>



                            </div>
                            <div class="form-step ">
                                <h3>Contact Informations</h3>

                                <div class="row">

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Pick Your Location</label>
                                        <div class="form-group position-relative">
                                            <span class="input-group-text selectToicon" id="from-icon"><i class="fa-solid icon-location-pin"></i></span>
                                            <select class="form-select select-location-upload" style="width: 100%;">
                                                <option selected>Location</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>

                                        </div>
                                    </div>




                                    <div class="btn-group">
                                        <a class="btn btn-prev">Previous</a>
                                        <a class="btn btn-next">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-step ">
                                <h3>Tell us about your property </h3>

                                <div class="row">

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">No. of Bedrooms </label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">1</button>
                                            <button class="btn middle" type="button">2</button>
                                            <button class="btn right" type="button">3</button>
                                            <button class="btn right" type="button">4</button>
                                            <button class="btn right" type="button">5</button>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">No. of Balconies </label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">1</button>
                                            <button class="btn middle" type="button">2</button>
                                            <button class="btn right" type="button">3</button>
                                            <button class="btn right" type="button">4</button>
                                            <button class="btn right" type="button">5</button>
                                        </div>
                                    </div>



                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block mb-0">Add Area Details </label>
                                        <div class="input-group option-input-group">
                                            <div class="input-group-image" style="width: 80%; border-right: 1px solid #0f3a61;">
                                                <input class="form-control border-0" type="text" value="" placeholder="Carpet Area">
                                            </div>
                                            <select class="form-select form-control rounded-0 line-height-3 box-shadow-none" name="">
                                                <option value="">sq.ft</option>
                                                <option value="">sq.yards</option>
                                                <option value="">sq.m.</option>
                                                <option value="">acres</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">No. of Balconies </label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">Furnished</button>
                                            <button class="btn middle" type="button">Semi-Furnished</button>
                                            <button class="btn right" type="button">Unfurnished</button>
                                        </div>
                                    </div>


                                    <div class="col-12 form-group mb-0 mb-lg-3">
                                        <label for="exampleInputEmail1" class="form-label d-block mb-0">Floor Details </label>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="input-group from-border-bottom mb-lg-0 mb-3">
                                                    <input class="form-control" type="text" value="" placeholder="Total Floor">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="input-group from-border-bottom mb-lg-0 mb-3">
                                                    <select class="form-select border-0 form-control rounded-0 line-height-3 box-shadow-none" name="">
                                                        <option value="">Basement</option>
                                                        <option value="">Lower Ground</option>
                                                        <option value=""> Ground</option>
                                                        <option value=""> 1</option>
                                                        <option value=""> 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Age of Property </label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">0-1 Years</button>
                                            <button class="btn middle" type="button">1-5 Years</button>
                                            <button class="btn right" type="button">5-10 Years</button>
                                            <button class="btn right" type="button">10+ Years</button>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Willing to rent out to </label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">Family</button>
                                            <button class="btn middle" type="button">Single Person</button>
                                            <button class="btn middle" type="button">Everyone </button>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group mb-0 mb-lg-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Rent Details </label>
                                        <div class="input-group from-border-bottom mb-lg-0 mb-3">
                                            <input class="form-control" type="text" value="" placeholder="Expected Rent">
                                        </div>
                                        <div class="form-check form-check-inline mt-1">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Electricity & Water charges excluded</label>
                                        </div>
                                        <div class="form-check form-check-inline mt-1">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Price Negotiable</label>
                                        </div>

                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Preferred agreement type</label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">Company lease agreement</button>
                                            <button class="btn middle" type="button">Any</button>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Are you ok with brokers contacting you?</label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">Yes</button>
                                            <button class="btn middle" type="button">No</button>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">What makes your property unique</label>
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    </div>


                                    <div class="btn-group">
                                        <a class="btn btn-prev">Previous</a>
                                        <a class="btn btn-next">Next</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-step ">

                                <h3>Add Photos of Your Property</h3>

                                <div class="row">

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Upload from Desktop </label>
                                        <div class="from-card">
                                            <div class="text-center">


                                                <!-- <input type="file" id="myFile" name="filename"> -->


                                                <div class="file-upload-wrapper">
                                                    <label class="file-upload-box mb-0">
                                                        <input type="file" class="file-upload-input" multiple>
                                                        <div class="upload-content">
                                                            <img src="img/upload.png" class="img-fluid" alt="">
                                                            <h4><i class="fa-solid fa-plus"></i> Added atleast 5 photos</h4>
                                                            <p>Drag and Drop photos here</p>
                                                            <p>Max size 10 MB | Formats : png, jpg, jpeg, gif, webp</p>
                                                            <!-- <i class="fas fa-cloud-upload-alt upload-icon"></i>
                                                            <h5 class="mb-2">Drag & Drop files here</h5>
                                                            <p class="text-muted mb-0">or click to browse</p> -->
                                                        </div>
                                                    </label>
                                                    <div class="file-list">
                                                        <!-- Files will be listed here -->
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>



                                    <div class="btn-group">
                                        <a class="btn btn-prev">Previous</a>
                                        <a class="btn btn-next">Next</a>
                                    </div>
                                </div>



                                <!-- <h3>Experiences</h3>
                                <div class="experiences-group">
                                    <div class="experience-item">
                                        <div class="input-group">
                                            <label for="title">Company name</label>
                                            <input type="text" name="job-title[]" id="job-title">
                                        </div>
                                        <div class="input-group">
                                            <label for="start-date">Start date</label>
                                            <input type="date" name="start-date[]" id="start-date">
                                        </div>
                                        <div class="input-group">
                                            <label for="end-date">End date</label>
                                            <input type="date" name="end-date[]" id="end-date">
                                        </div>
                                        <div class="input-group">
                                            <label for="job-description">Description</label>
                                            <textarea name="job-description[]" id="job-description" cols="42" rows="6"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-experience">
                                    <a class="add-exp-btn"> + Add Experience</a>
                                </div> -->

                            </div>

                            <div class="form-step ">
                                <h3>Add Other Details of Your Property</h3>

                                <div class="row">

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Security Deposite </label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">Fixed</button>
                                            <button class="btn middle" type="button">Multiple of Rent</button>
                                            <button class="btn right" type="button">None</button>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Duration of Agreement </label>
                                        <div class="input-group from-border-bottom mb-lg-0 mb-3">
                                            <select class="form-select border-0 form-control rounded-0 line-height-3 box-shadow-none" name="">
                                                <option value="">1 month</option>
                                                <option value="">2 month</option>
                                                <option value="">3 month</option>
                                                <option value="">4 month</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Month of Notice </label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">None</button>
                                            <button class="btn left" type="button">1 month</button>
                                            <button class="btn left" type="button">2 month</button>
                                            <button class="btn left" type="button">3 month</button>
                                            <button class="btn left" type="button">4 month</button>
                                            <button class="btn left" type="button">5 month</button>
                                        </div>

                                    </div>

                                    <div class="col-12 mb-3">
                                    <label for="exampleInputEmail1" class="form-label d-block">Other rooms </label>
                                        <div class="days-btn-container">
                                            <div class="position-relative">
                                                <input class="day-btn" id="poojaroom" type="checkbox" />
                                                <label class="day-label" for="poojaroom">Pooja Room</label>
                                            </div>
                                            <div class="position-relative">
                                                <input class="day-btn" id="studyroom" type="checkbox" />
                                                <label class="day-label" for="studyroom">Study Room</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="servant" type="checkbox" />
                                                <label class="day-label" for="servant">Servant Room</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="store" type="checkbox" />
                                                <label class="day-label" for="store">Store Room</label>
                                            </div>

                                        </div>

                                        <!-- 
                                        <div class="btn-group">
                                            <button class="btn left" type="button">Pooja Room</button>
                                            <button class="btn left" type="button">Study Room</button>
                                            <button class="btn left" type="button">Servant Room</button>
                                            <button class="btn left" type="button">Store Room</button>
                                        </div> -->

                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Covered Parking </label>
                                        <div class="form-group col-md-4 col-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <input class="btn counter-btn btn-outline-secondary me-0 rounded-0 border-0" type="button" value="-" onclick="decrement(this)">
                                                </div>
                                                <input type="text" value="0" class="form-control counter-text-field numberField" aria-label="Amount" readonly>
                                                <div class="input-group-prepend">
                                                    <input class="btn counter-btn btn-outline-secondary rounded-0 border-0" type="button" value="+" onclick="increment(this)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Open Parking </label>
                                        <div class="form-group col-md-4 col-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <input class="btn counter-btn btn-outline-secondary me-0 rounded-0 border-0" type="button" value="-" onclick="decrement(this)">
                                                </div>
                                                <input type="text" value="0" class="form-control counter-text-field numberField" aria-label="Amount" readonly>
                                                <div class="input-group-prepend">
                                                    <input class="btn counter-btn btn-outline-secondary rounded-0 border-0" type="button" value="+" onclick="increment(this)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="btn-group">
                                        <a class="btn btn-prev">Previous</a>
                                        <a class="btn btn-next">Next</a>
                                    </div>
                                </div>

                            </div>

                            <div class="form-step ">
                                <h3>Add amenities</h3>

                                <div class="row">

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Amenities </label>
                                        <div class="days-btn-container">
                                            <div class="position-relative">
                                                <input class="day-btn" id="maintenance" type="checkbox" />
                                                <label class="day-label" for="maintenance">Maintenance Staff</label>
                                            </div>
                                            <div class="position-relative">
                                                <input class="day-btn" id="water" type="checkbox" />
                                                <label class="day-label" for="water">Water Storage</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="waste" type="checkbox" />
                                                <label class="day-label" for="waste">Waste Disposal</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="rain" type="checkbox" />
                                                <label class="day-label" for="rain">Rain Water Harvesting</label>
                                            </div>
                                            <div class="position-relative">
                                                <input class="day-btn" id="visitor" type="checkbox" />
                                                <label class="day-label" for="visitor">Visitor Parking</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="Park" type="checkbox" />
                                                <label class="day-label" for="park">Park</label>
                                            </div>
                                            
                                        </div>
                                       
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Property Features </label>
                                        <div class="input-group from-border-bottom mb-lg-0 mb-3">
                                            <select class="form-select border-0 form-control rounded-0 line-height-3 box-shadow-none" name="">
                                                <option value="">High Ceiling Height</option>
                                                <option value="">False Ceiling Lighting</option>
                                                <option value="">Piped-gas</option>
                                                <option value="">Internet/wi-fi connectivity</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Society/Building feature </label>
                                        <div class="days-btn-container">
                                            <div class="position-relative">
                                                <input class="day-btn" id="Fitness" type="checkbox" />
                                                <label class="day-label" for="Fitness">Fitness Centre / GYM</label>
                                            </div>
                                            <div class="position-relative">
                                                <input class="day-btn" id="Swimming" type="checkbox" />
                                                <label class="day-label" for="Swimming">Swimming Pool</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="Club" type="checkbox" />
                                                <label class="day-label" for="Club">Club house / Community Center</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="Security" type="checkbox" />
                                                <label class="day-label" for="Security">Security Personnel</label>
                                            </div>
                                            
                                        </div>
                                        <!-- <div class="btn-group">
                                            <button class="btn left" type="button">Fitness Centre / GYM</button>
                                            <button class="btn left" type="button">Swimming Pool</button>
                                            <button class="btn left" type="button">Club house / Community Center</button>
                                            <button class="btn left" type="button">Security Personnel</button>
                                        </div> -->

                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Additional Features </label>
                                        <div class="days-btn-container">
                                            <div class="position-relative">
                                                <input class="day-btn" id="Separate" type="checkbox" />
                                                <label class="day-label" for="Separate">Separate entry for servant room</label>
                                            </div>
                                            <div class="position-relative">
                                                <input class="day-btn" id="drainage" type="checkbox" />
                                                <label class="day-label" for="drainage">No open drainage around</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="Bank" type="checkbox" />
                                                <label class="day-label" for="Bank">Bank Attached Property</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="Density" type="checkbox" />
                                                <label class="day-label" for="Density">Low Density Society</label>
                                            </div>
                                            
                                        </div>
                                        <!-- <div class="btn-group">
                                            <button class="btn left" type="button">Separate entry for servant room</button>
                                            <button class="btn left" type="button">No open drainage around</button>
                                            <button class="btn left" type="button">Bank Attached Property</button>
                                            <button class="btn left" type="button">Low Density Society</button>
                                        </div> -->

                                    </div>


                                    <div class="col-12 form-group mb-0 mb-lg-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Other Features </label>

                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">In a gated society</label>
                                        </div>
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Corner Property</label>
                                        </div>

                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Pet Friendly</label>
                                        </div>
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Wheelchair friendly</label>
                                        </div>

                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Power Back up </label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">None</button>
                                            <button class="btn left" type="button">Partial</button>
                                            <button class="btn left" type="button">Full</button>
                                        </div>

                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Property facing </label>
                                        <div class="btn-group">
                                            <button class="btn left" type="button">North</button>
                                            <button class="btn left" type="button">South</button>
                                            <button class="btn left" type="button">East</button>
                                            <button class="btn left" type="button">West</button>
                                            <button class="btn left" type="button">North-East</button>
                                            <button class="btn left" type="button">North-West</button>
                                            <button class="btn left" type="button">South-East</button>
                                            <button class="btn left" type="button">South-West</button>
                                        </div>

                                    </div>

                                    <div class="col-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Type of flooring </label>
                                        <div class="input-group from-border-bottom mb-lg-0 mb-3">
                                            <select class="form-select border-0 form-control rounded-0 line-height-3 box-shadow-none" name="">
                                                <option value="">Select</option>
                                                <option value="">Marbel</option>
                                                <option value="">Concrete</option>
                                                <option value="">Polished Concrete</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block mb-0">Add Area Details </label>
                                        <div class="input-group option-input-group">
                                            <div class="input-group-image" style="width: 65%; border-right: 1px solid #0f3a61;">
                                                <input class="form-control border-0" type="text" value="" placeholder="Carpet Area">
                                            </div>
                                            <select class="form-select form-control rounded-0 line-height-3 box-shadow-none" name="">
                                                <option value="">Select</option>
                                                <option value="">Feet</option>
                                                <option value="">Meter</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label d-block">Location Advantages </label>

                                        <div class="days-btn-container">
                                            <div class="position-relative">
                                                <input class="day-btn" id="Metro" type="checkbox" />
                                                <label class="day-label" for="Metro">Close to Metro Station</label>
                                            </div>
                                            <div class="position-relative">
                                                <input class="day-btn" id="School" type="checkbox" />
                                                <label class="day-label" for="School">Close to School</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="Hospital" type="checkbox" />
                                                <label class="day-label" for="Hospital">Close to Hospital</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="Market" type="checkbox" />
                                                <label class="day-label" for="Market">Close to Market</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="Railway" type="checkbox" />
                                                <label class="day-label" for="Railway">Close to Railway Station</label>
                                            </div>

                                            <div class="position-relative">
                                                <input class="day-btn" id="Airport" type="checkbox" />
                                                <label class="day-label" for="Airport">Close to Airport</label>
                                            </div>
                                            
                                        </div>
                                        <!-- <div class="btn-group">
                                            <button class="btn left" type="button">Close to Metro Station</button>
                                            <button class="btn left" type="button">Close to School</button>
                                            <button class="btn left" type="button">Close to Hospital</button>
                                            <button class="btn left" type="button">Close to Market</button>
                                            <button class="btn left" type="button">Close to Railway Station</button>
                                            <button class="btn left" type="button">Close to Airport</button>
                                            <button class="btn left" type="button">Close to Mall</button>
                                        </div> -->

                                    </div>




                                    <div class="btn-group">
                                        <a class="btn btn-prev">Previous</a>
                                        <input type="submit" value="Post Property" name="Post Property" class="btn btn-complete">
                                    </div>
                                    </ div>

                                </div>

                            </div>



                        </form>
                    </div>
                </div>

                <!-- <div class="col-md-3">
                    <div class="from-left-content">
                        <div class="caption"><i class="iconS_PPFDesk_16 icon_callIcon"></i>Need help ? </div>
                        <div class="caption-bottom">You can email us at <a href="#">services@landsrooms.com </a>or call us at <a href="#">1800 41 99099</a> (IND Toll-Free).</div>
                    </div>
                </div> -->

            </div>

        </div>
    </section>
</div>