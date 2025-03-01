
    <section class="page-header border-bottom-0 border-width-2">
        <div class="container">
            <div class="row">
                <div class="col align-self-center p-static">
                    <ul class="breadcrumb d-block">
                        <li><a href="<?=front_base_url();?>">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-0 contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-left">
                        <h1>Contact Us</h1>
                        <h2><?=$SITE_NAME;?></h2>
                        <div class="line-white"></div>
                        <h5><i class="me-2"><img src="img/pointlocation.png" alt=""></i>Address</h5>
                        <p><?=strip_tags($SITE_ADDRESS);?></p>
                        <div class="line-white"></div>
                        <h5><i class="me-2"><img src="img/" alt=""></i>Helpline</h5>
                        <p><a href="tel:<?=$SITE_CONTACT_NO;?>"><?=$SITE_CONTACT_NO;?></a></p>
                        <div class="line-white"></div>
                        <h5>Email</h5>
                        <p><a href="mailto:<?=$SITE_EMAIL;?>"><?=$SITE_EMAIL;?></a></p>
                        <div class="line-white"></div>
                        <p>
                            <a href="<?=$SITE_LOCATION_URL;?>" target="_blank" class="btn btn-light rounded-3">Get Direction</a>
                            <a href="<?=$SITE_LOCATION_URL;?>"><i><img src="img/direction.png" alt="" class="me-4" style="width: 150px;"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    
                        <form action="<?=front_base_url('Operation/supportFormSubmitted')?>" method="post" class="contact-form form-with-icons" novalidate="novalidate">
							<input type="hidden" name="support_subject" value="Second Opinion">
							<input type="hidden" name="support_source" value="<?=$CURRENT_URL_V2;?>">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="form-label text-black mb-1 text-2">Name*</label>
                                    <div class="position-relative">
                                        <i class="icons icon-user text-color-primary text-5 position-absolute left-15 top-50pct transform3dy-n50"></i>
                                        <input type="text" name="support_name" value="" data-msg-required="Please enter your name." class="form-control text-3 py-2" required>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-label text-black mb-1 text-2">Mobile Number*</label>
                                    <div class="position-relative">
                                        <input type="text" name="support_contact" value="+91" id="phone" data-msg-required="Please enter your number." class="form-control text-3 py-2" required>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-label text-black mb-1 text-2">Email</label>
                                    <div class="position-relative">
                                        <i class="icons icon-envelope text-color-primary text-5 position-absolute left-15 top-50pct transform3dy-n50"></i>
                                        <input type="email" name="support_email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 py-2">
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-label text-black mb-1 text-2">Message</label>
                                    <div class="position-relative">
                                        <i class="icons icon-bubble text-color-primary text-5 position-absolute left-15 top-15"></i>
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control text-3 py-2" name="support_message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" value="Submit" class="btn w-lg-25 w-50 btn-primary rounded-3" data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>