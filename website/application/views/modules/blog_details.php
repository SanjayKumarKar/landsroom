<?php
$SLUG = front_base_url("blogs/");

?>
<section class="page-header border-bottom-0 border-width-2">
	<div class="container">
		<div class="row">
			<div class="col align-self-center p-static">
				<ul class="breadcrumb d-block">
					<li><a href="<?= front_base_url(); ?>">Home</a></li>
					<li><a href="<?= front_base_url('blogs'); ?>">Blogs</a></li>
					<li class="active"><?= $PAGE_DETAILS['blog_title'] ?></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="section pt-0 section-wrap">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 pb-lg-0 pb-4 mb-lg-0 mb-4">
				<div class="filter-box">
					<div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow" id="accordionFilter">
						<div class="card p-3 card-default">
							<div class="card-header" id="collapseFilterHeading">
								<h2 class="m-0"><a class="accordion-toggle p-0 py-3 text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter" id="collapseFilterShow">Filters</a></h2>
							</div>
							<div id="collapseFilter" class="collapse" data-parent="#accordionFilter">
								<div class="country-box-wrap box-border-bottom box-heading pb-4 mb-4">
									<h4>By Country</h4>
									<div class="row filter-search">
										<div class="form-group col-12">
											<input type="text" placeholder="Search..." class="form-control search-filter">
										</div>
									</div>
									<?php $COUNTRY_LIST = $THIS->getCountry(); ?>
									<div class="country-box place-box-content">
										<ul>
											<?php
											foreach ($COUNTRY_LIST as $DATA) {
											?>
												<li><a href="<?= $SLUG . $DATA['country_slug']; ?>"><?= $DATA['country_name']; ?></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
								<div class="city-box-wrap box-border-bottom box-heading pb-4 mb-4">
									<h4>By City</h4>
									<div class="row filter-search">
										<div class="form-group col-12">
											<input type="text" placeholder="Search..." class="form-control search-filter">
										</div>
									</div>
									<?php $CITY_LIST = $THIS->getCityByCountry($FEATURED_COUNTRY); ?>
									<div class="city-box place-box-content">
										<ul>
											<?php foreach ($CITY_LIST as $DATA) {
											?>
												<li><a href="<?= $SLUG . $DATA['city_slug']; ?>"><?= $DATA['city_name']; ?></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
								<div class="deptHospital-box-wrap box-border-bottom box-heading pb-4 mb-4">
									<h4>By Department</h4>
									<div class="row filter-search">
										<div class="form-group col-12">
											<input type="text" placeholder="Search..." class="form-control search-filter">
										</div>
									</div>
									<?php $SPECIALITY_LIST = $THIS->getSpeciality(); ?>
									<div class="deptHospital-box place-box-content">
										<ul>
											<?php foreach ($SPECIALITY_LIST as $DATA) {
											?>
												<li><a href="<?= $SLUG . $DATA['speciality_slug']; ?>"><?= $DATA['speciality_title']; ?></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
								<div class="left-form-section">
									<div class="card-body bg-white rounded-3 p-0">
										<form action="<?= front_base_url('Operation/enquiryAssistanceFormSubmitted') ?>" method="post" class="contact-form form-style-3">
											<input type="hidden" name="enquiry_assistance_subject" value="Blog Details : <?= $PAGE_DETAILS['blog_title'] ?>">
											<input type="hidden" name="enquiry_assistance_source" value="<?= $CURRENT_URL_V2; ?>">
											<div class="row">
												<div class="form-group col-lg-12">
													<label class="form-label mb-1 text-2 text-black font-weight-bold">Name*</label>
													<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="enquiry_assistance_name" required>
												</div>
												<div class="form-group col-lg-12">
													<label class="form-label mb-1 text-2 text-black font-weight-bold">Mobile Number*</label>
													<input type="text" value="" name="enquiry_assistance_contact" data-msg-required="Please enter your mobile number." data-msg-number="Please enter a valid mobile number." maxlength="100" class="form-control text-3 h-auto py-2" required>
												</div>
												<div class="form-group text-center col-lg-12">
													<input type="submit" value="Submit" class="btn w-100 btn-primary rounded-3" data-loading-text="Loading...">
												</div>
											</div>
										</form>
										<p>Enquire now in case of any assistance needed</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-6 col-sm-12 col-12 hospital-card-list">
				<div class="blog-details-wrapper">
					<div class="blogs-post">
						<a href="#">
							<img src="<?= file_upload_base_url($PAGE_DETAILS['blog_image']); ?>" alt="<?= $PAGE_DETAILS['blog_title'] ?>" class="img-fluid">
						</a>
					</div>
					<div class="blog-details-content">
						<h3><?= $PAGE_DETAILS['blog_title'] ?></h3>
						<?php
						$AUTHOR = $THIS->getAuthorByID($PAGE_DETAILS['blog_author']);
						$AUTHOR_DOCTOR = $THIS->getDoctorAuthorByID($PAGE_DETAILS['blog_author_doctor']);
						?>
						<?php if (!empty($AUTHOR_DOCTOR) or !empty($AUTHOR)) { ?>
							<a href="javascript:void(0);">
								<h5>
									By Author : 
									<?php if (!empty($AUTHOR_DOCTOR)) { echo $AUTHOR_DOCTOR[0]['doctor_name']; } ?>
									<?php if (!empty($AUTHOR_DOCTOR) and !empty($AUTHOR)) { echo ", "; } ?>
									<?php if (!empty($AUTHOR)) { echo $AUTHOR[0]['author_name']; } ?>
								</h5>
							</a>
						<?php } ?>
						<span><img src="img/calender.png" alt="" class="me-2"> <?= date('d F,Y', strtotime($PAGE_DETAILS['blog_date'])) ?></span>
						<?= $PAGE_DETAILS['blog_details'] ?>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
						<div class="card-body bg-white rounded-3 mt-4">
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-3 mb-md-3 mb-4 pb-lg-0 pb-3">
									<div class="sec-title">
										<h3>Author</h3>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-end">
									<div class="viewall-btn desktop-block">
										<a href="<?= front_base_url('author'); ?>" class="text-black">View All <i><img src="img/right-arrow.png" alt=""></i></a>
									</div>
								</div>
							</div>
							<?php
							$AUTHOR_DOCTOR = $THIS->getDoctorByIDBulk($PAGE_DETAILS['blog_author_doctor']);
							foreach ($AUTHOR_DOCTOR as $DATA) {  ?>
								<div class="hospital-card">
									<div class="hospital-card-image position-relative">
										<img src="<?= file_upload_base_url($DATA['doctor_image']); ?>" alt="<?= $DATA['doctor_name']; ?>" class="img-fluid">
									</div>
									<div class="doctor-content px-2 mt-3">
										<h2><?= $DATA['doctor_name']; ?></h2>
										<p><?= $THIS->getDesignation($DATA['doctor_designation']); ?> <br> <?= $THIS->getSpecialistIn($DATA['doctor_specialist_in']); ?></p>
										<?php
										$HOSPITAL_OF_DOCTOR = $THIS->getHospitalByID($DATA['doctor_hospital']);
										?>
										<p><a href="<?= front_base_url('hospital/' . $HOSPITAL_OF_DOCTOR['hospital_slug']); ?>"><?= $HOSPITAL_OF_DOCTOR['hospital_name'] ?></a></p>
										<a href="<?= front_base_url('doctor/' . $DATA['doctor_slug']); ?>">View Doctor Profile</a>
										<a href="<?= front_base_url('doctor/' . $DATA['doctor_slug']); ?>#doctor-appointment" class="btn btn-primary text-white text-decoration-none text-uppercase">Book an Appointment</a>
									</div>
								</div>
							<?php } ?>
							<?php
							$AUTHOR = $THIS->getAuthorByID($PAGE_DETAILS['blog_author']);
							foreach ($AUTHOR as $DATA) {  ?>
								<div class="hospital-card">
									<div class="hospital-card-image position-relative">
										<img src="<?= file_upload_base_url($DATA['author_image']); ?>" alt="<?= $DATA['author_name']; ?>" class="img-fluid">
									</div>
									<div class="doctor-content px-2 mt-3">
										<h2><?= $DATA['author_name']; ?></h2>
										<p><?= $DATA['author_qualification']; ?><br> <?= $DATA['author_short_details']; ?></p>
										<a href="<?= front_base_url('author/' . $DATA['author_slug']); ?>" class="btn btn-primary text-white text-decoration-none text-uppercase">View Profile</a>
									</div>
								</div>
							<?php } ?>
							<div class="viewall-btn mobile-block">
								<a href="<?= front_base_url('author'); ?>" class="text-black">View All <i><img src="img/right-arrow.png" alt=""></i></a>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
						<div class="card-body bg-white rounded-3 mt-4">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-3 mb-md-3 mb-4 pb-lg-0 pb-3">
									<div class="sec-title">
										<h3>Reviewer</h3>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 text-end">
									<div class="viewall-btn desktop-block">
										<a href="<?= front_base_url('reviewer'); ?>" class="text-black">View All <i><img src="img/right-arrow.png" alt=""></i></a>
									</div>
								</div>
							</div>
							<?php
							$REVIEWER = $THIS->getDoctorByIDBulk($PAGE_DETAILS['blog_reviewer_doctor']);
							foreach ($REVIEWER as $DATA) {  ?>
								<div class="hospital-card">
									<div class="hospital-card-image position-relative">
										<img src="<?= file_upload_base_url($DATA['doctor_image']); ?>" alt="<?= $DATA['doctor_name']; ?>" class="img-fluid">
									</div>
									<div class="doctor-content px-2 mt-3">
										<h2><?= $DATA['doctor_name']; ?></h2>
										<p><?= $THIS->getDesignation($DATA['doctor_designation']); ?> <br> <?= $THIS->getSpecialistIn($DATA['doctor_specialist_in']); ?></p>
										<?php
										$HOSPITAL_OF_DOCTOR = $THIS->getHospitalByID($DATA['doctor_hospital']);
										?>
										<p><a href="<?= front_base_url('hospital/' . $HOSPITAL_OF_DOCTOR['hospital_slug']); ?>"><?= $HOSPITAL_OF_DOCTOR['hospital_name'] ?></a></p>
										<a href="<?= front_base_url('doctor/' . $DATA['doctor_slug']); ?>">View Doctor Profile</a>
										<a href="<?= front_base_url('doctor/' . $DATA['doctor_slug']); ?>#doctor-appointment" class="btn btn-primary text-white text-decoration-none text-uppercase">Book an Appointment</a>
									</div>
								</div>
							<?php } ?>
							<div class="viewall-btn mobile-block">
								<a href="<?= front_base_url('reviewer'); ?>" class="text-black">View All <i><img src="img/right-arrow.png" alt=""></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="section-container-text container-spacing bg-white rounded-3 doctor-section mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-3 mb-md-3 mb-4 pb-lg-0 pb-3">
							<div class="sec-title">
								<h3>Featured Doctors</h3>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 text-end">
							<div class="viewall-btn desktop-block">
								<a href="<?= front_base_url('doctors'); ?>" class="text-black">View All <i><img src="img/right-arrow.png" alt=""></i></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div id="expertDoctor" class="owl-carousel owl-theme">
								<?php
								$FEATURED_DOCTOR_LIST = $THIS->getFeaturedDoctor(10);
								foreach ($FEATURED_DOCTOR_LIST as $DATA) {  ?>
									<div class="doctor-card p-2">
										<div class="doctor-image position-relative">
											<img src="<?= file_upload_base_url($DATA['doctor_image']); ?>" alt="<?= $DATA['doctor_name']; ?>" class="img-fluid">
										</div>
										<div class="doctor-content px-2 mt-3">
											<h2><?= $DATA['doctor_name']; ?></h2>
											<p><?= $THIS->getDesignation($DATA['doctor_designation']); ?> <br> <?= $THIS->getSpecialistIn($DATA['doctor_specialist_in']); ?></p>
											<?php
											$HOSPITAL_OF_DOCTOR = $THIS->getHospitalByID($DATA['doctor_hospital']);
											?>
											<p><a href="<?= front_base_url('hospital/' . $HOSPITAL_OF_DOCTOR['hospital_slug']); ?>"><?= $HOSPITAL_OF_DOCTOR['hospital_name'] ?></a></p>
											<a href="<?= front_base_url('doctor/' . $DATA['doctor_slug']); ?>">View Doctor Profile</a>
											<a href="<?= front_base_url('doctor/' . $DATA['doctor_slug']); ?>#doctor-appointment" class="btn btn-primary text-white text-decoration-none text-uppercase">Book an Appointment</a>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="col-12">
							<div class="viewall-btn mobile-block">
								<a href="<?= front_base_url('doctors'); ?>" class="text-black">View All <i><img src="img/right-arrow.png" alt=""></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="container-spacing form-section bg-white rounded-3 mt-5">
					<h2>Looking for the best doctor ?</h2>
					<p>Fill up the form and get assured assitance within 24 hrs!</p>
					<form action="<?= front_base_url('Operation/enquiryFormSubmitted') ?>" method="post" class="contact-form form-style-3" enctype="multipart/form-data">
						<input type="hidden" name="enquiry_subject" value="Blog Details : <?= $PAGE_DETAILS['blog_title'] ?>">
						<input type="hidden" name="enquiry_source" value="<?= $CURRENT_URL_V2; ?>">
						<div class="row">
							<div class="form-group col-lg-6">
								<label class="form-label mb-1 text-2 text-black font-weight-bold">Name*</label>
								<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="enquiry_name" required>
							</div>
							<div class="form-group col-lg-6">
								<label class="form-label mb-1 text-2 text-black font-weight-bold">Email*</label>
								<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="enquiry_email" required>
							</div>
							<div class="form-group col-lg-6">
								<label class="form-label mb-1 text-2 text-black font-weight-bold">Mobile Number*</label>
								<input type="text" value="" name="enquiry_contact" data-msg-required="Please enter your mobile number." data-msg-number="Please enter a valid mobile number." maxlength="100" class="form-control text-3 h-auto py-2" required>
							</div>
							<div class="form-group col-lg-6">
								<label class="form-label mb-1 text-2 text-black font-weight-bold">Attach Reports</label>
								<input type="file" value="" name="enquiry_file" data-msg-required="Please enter your file." data-msg-email="Please enter a valid file." maxlength="100" class="form-control text-3 h-auto py-2">
							</div>
							<div class="form-group col-lg-12">
								<label class="form-label mb-1 text-2 text-black font-weight-bold">Query</label>
								<textarea maxlength="5000" placeholder="Type your comments" name="enquiry_message" data-msg-required="Please enter your message." rows="3" class="form-control text-3 h-auto py-2"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="form-group text-center col-12">
								<input type="submit" value="Submit" class="btn w-lg-25 w-50 btn-primary rounded-3" data-loading-text="Loading...">
							</div>
						</div>
					</form>
				</div>

				<div class="section-container-text container-spacing bg-white rounded-3 mt-5 blog-section">
					<div class="row">
						<div class="col-lg-6 col-md-6 mb-3">
							<div class="sec-title">
								<h2>Blogs</h2>
								<p>The Art of Effective Communication</p>
							</div>
						</div>
						<div class="col-lg-6 my-lg-auto text-end col-md-6">
							<div class="viewall-btn desktop-block">
								<a href="<?= front_base_url('blogs'); ?>" class="text-black">View All <i><img src="img/right-arrow.png" alt=""></i></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 3}}, 'loop': false, 'autoplay': false, 'autoHeight': true, 'margin': 10}">
								<?php
								$BLOG = $THIS->getBlogLimit();
								foreach ($BLOG as $DATA) {
								?>
									<div class="blog-card mt-4">
										<div class="thumbnail-image position-relative">
											<a href="<?= front_base_url('blog/' . $DATA['blog_slug']); ?>">
												<img src="<?= file_upload_base_url($DATA['blog_image']); ?>" alt="<?= $DATA['blog_title']; ?>" class="img-fluid">
											</a>
										</div>
										<div class="blog-content mt-3">
											<h2><?= $DATA['blog_title']; ?></h2>
											<div class="blog-line"></div>
											<div class="d-flex align-items-center justify-content-between">
												<span class="d-block text-black">
													<i><img src="img/calender.png" class="me-2" alt=""></i>
													<?= date('d F,Y', strtotime($DATA['blog_date'])) ?>
												</span>
												<span class="d-block"><a href="<?= front_base_url('blog/' . $DATA['blog_slug']); ?>">Read More</a></span>
											</div>
										</div>
									</div>
								<?php
								}
								?>
							</div>
						</div>
						<div class="col-12 viewall-btn mobile-block">
							<a href="<?= front_base_url('blogs'); ?>" class="text-black">View All <i><img src="img/right-arrow.png" alt=""></i></a>
						</div>
					</div>
				</div>

				<div class="section-container-text container-spacing bg-white rounded-3 mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="sec-title">
								<h2 class="mb-0">Reviews</h2>
								<p>Trusted by Patients</p>
							</div>
						</div>
						<div class="col-lg-6 my-auto text-end col-md-6">
							<div class="viewall-btn desktop-block">
								<a href="<?= front_base_url('reviews'); ?>" class="text-black">View All <i><img src="img/right-arrow.png" alt=""></i></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 3}}, 'loop': false, 'autoplay': false, 'autoHeight': true, 'margin': 10}">
								<?php
								$REVIEW = $THIS->getFeaturedReview(10);
								foreach ($REVIEW as $DATA) {
								?>
									<div class="card border-0 card-bg-gray">
										<div class="card-body reviews-card p-3">
											<h4><?= $DATA['review_title']; ?></h4>
											<span><?= $THIS->generateStarRating($DATA['review_rating']) ?></span>
											<p>"<?= $DATA['review_short_details']; ?>"</p>
										</div>
									</div>
								<?php
								}
								?>
							</div>
						</div>
						<div class="col-12">
							<div class="viewall-btn mobile-block">
								<a href="<?= front_base_url('reviews'); ?>" class="text-black">View All <i><img src="img/right-arrow.png" alt=""></i></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<!--<section class="section faq-section">
        <div class="container">
            <div class="sec-title">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span>Which are the Top Heart Doctors in India?</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>The top 10 heart doctors in India are listed above along with their description.
                                        You May be Interested in: List of hospitals in India.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Why You Must Choose a Hospital in Japan?</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>The top 10 heart doctors in India are listed above along with their description.
                                        You May be Interested in: List of hospitals in India.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>Worrying About Your Travel and Stay in Germany For Your Medical Treatment?</span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>The top 10 heart doctors in India are listed above along with their description.
                                        You May be Interested in: List of hospitals in India.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->