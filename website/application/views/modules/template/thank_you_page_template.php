<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W95LBVDC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<section class="section">
    <div class="container">
        <div class="site-header text-center">
            <p class="mb-4 text-center text-black text-lg-3-4 text-3 line-height-2 fw-bold">Thank You For Showing Interest</p>
            <h2>Our Medical Expert Will Get in Touch</h2>
            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none"></circle>
                <path class="checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path>
            </svg>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="thank-you-card">
                    <div class="card-body p-4">
                        <h2>Details Received</h2>
                        <!--<div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h4>Name: xyz</h4>
                                <h4>Mobile Number: 91000000</h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                               <h4>Email: test@mail.com</h4>
                            </div>
                        </div>-->
                        <p><?=$this->session->flashdata('successContactMSG');?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>