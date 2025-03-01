
	<?php
	$COUNTRY_ID=empty($FILTER['COUNTRY_DATA']['ID'])?0:$FILTER['COUNTRY_DATA']['ID'];
	$CITY_ID=empty($FILTER['CITY_DATA']['ID'])?0:$FILTER['CITY_DATA']['ID'];
	$SPECIALITY_ID=empty($FILTER['SPECIALITY_DATA']['ID'])?0:$FILTER['SPECIALITY_DATA']['ID'];
	$PROCEDURE_ID=empty($FILTER['PROCEDURE_DATA']['ID'])?0:$FILTER['PROCEDURE_DATA']['ID'];
	$DISEASE_ID=empty($FILTER['DISEASE_DATA']['ID'])?0:$FILTER['DISEASE_DATA']['ID'];

	$COUNTRY_SLUG = empty( $FILTER[ 'COUNTRY_DATA' ][ 'SLUG' ] ) ? "" : $FILTER[ 'COUNTRY_DATA' ][ 'SLUG' ];
	$CITY_SLUG = empty( $FILTER[ 'CITY_DATA' ][ 'SLUG' ] ) ? "" : $FILTER[ 'CITY_DATA' ][ 'SLUG' ];
	$SPECIALITY_SLUG = empty( $FILTER[ 'SPECIALITY_DATA' ][ 'SLUG' ] ) ? "" : $FILTER[ 'SPECIALITY_DATA' ][ 'SLUG' ];
	$PROCEDURE_SLUG = empty( $FILTER[ 'PROCEDURE_DATA' ][ 'SLUG' ] ) ? "" : $FILTER[ 'PROCEDURE_DATA' ][ 'SLUG' ];
	$DISEASE_SLUG = empty( $FILTER[ 'DISEASE_DATA' ][ 'SLUG' ] ) ? "" : $FILTER[ 'DISEASE_DATA' ][ 'SLUG' ];

	$DATA_LIST=$THIS->getBlogList($COUNTRY_ID,$CITY_ID,$SPECIALITY_ID,$PROCEDURE_ID,$DISEASE_ID);

	$PAGE_TITLE_OTHER=$THIS->getTitle("Doctors",$COUNTRY_ID,$CITY_ID,$SPECIALITY_ID,$PROCEDURE_ID,$DISEASE_ID);
	$FEATURED_LIST=$THIS->getHospitalFeaturedList($COUNTRY_ID,$CITY_ID,$SPECIALITY_ID,$PROCEDURE_ID,$DISEASE_ID);

	$SLUG=front_base_url("blogs/");
	$SLUG_OTHER=front_base_url("doctors/");
	
	?>
    <section class="page-header border-bottom-0 border-width-2">
        <div class="container">
            <div class="row">
                <div class="col align-self-center p-static">
                    <ul class="breadcrumb d-block">
                        <li><a href="<?=front_base_url();?>">Home</a></li>
                        <li class="active">Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-0 section-wrap hospital-speciality">
        <div class="container">
            <div class="row">
			<div class="col-lg-3 col-sm-12 col-md-12 col-12 pb-lg-0 pb-4 mb-lg-0 mb-4">
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
									<?php $COUNTRY_LIST=$THIS->getCountry(); ?>
									<div class="country-box place-box-content">
										<ul>
											<?php 
											foreach($COUNTRY_LIST as $DATA) { 
											$SLUG_BASE=$THIS->getSlug($SLUG,$DATA['country_slug'],"",$SPECIALITY_SLUG,$PROCEDURE_SLUG,$DISEASE_SLUG);
											?>
											<li class="<?=$DATA['country_slug']==$COUNTRY_SLUG?'filter-active':'';?>"><a href="<?=$SLUG_BASE;?>"><?=$DATA['country_name'];?></a></li>
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
									<?php $CITY_LIST=$THIS->getCityByCountry($COUNTRY_ID); ?>
									<div class="city-box place-box-content">
										<ul>
											<?php foreach($CITY_LIST as $DATA) { 
											$SLUG_BASE=$THIS->getSlug($SLUG,$COUNTRY_SLUG,$DATA['city_slug'],$SPECIALITY_SLUG,$PROCEDURE_SLUG,$DISEASE_SLUG);
											?>
											<li class="<?=$DATA['city_slug']==$CITY_SLUG?'filter-active':'';?>"><a href="<?=$SLUG_BASE;?>"><?=$DATA['city_name'];?></a></li>
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
									<?php $SPECIALITY_LIST=$THIS->getSpeciality(); ?>
									<div class="deptHospital-box place-box-content">
										<ul>
											<?php foreach($SPECIALITY_LIST as $DATA) { 
											$SLUG_BASE=$THIS->getSlug($SLUG,$COUNTRY_SLUG,$CITY_SLUG,$DATA['speciality_slug'],"","");
											?>
											<li class="<?=$DATA['speciality_slug']==$SPECIALITY_SLUG?'filter-active':'';?>"><a href="<?=$SLUG_BASE;?>"><?=$DATA['speciality_title'];?></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
								<?php if(!empty($SPECIALITY_ID)){ ?>
								<div class="treatment-box-wrap box-border-bottom box-heading pb-4 mb-4">
									<h4>By Treatment</h4>
									<div class="row filter-search">
										<div class="form-group col-12">
											<input type="text" placeholder="Search..." class="form-control search-filter">
										</div>
									</div>
									<?php $PROCEDURE_LIST=$THIS->getProcedureBySpeciality($SPECIALITY_ID); ?>
									<div class="treatment-box place-box-content">
										<ul>
											<?php foreach($PROCEDURE_LIST as $DATA) { 
											$SLUG_BASE=$THIS->getSlug($SLUG,$COUNTRY_SLUG,$CITY_SLUG,$SPECIALITY_SLUG,$DATA['procedure_slug'],"");
											?>
											<li class="<?=$DATA['procedure_slug']==$PROCEDURE_SLUG?'filter-active':'';?>"><a href="<?=$SLUG_BASE;?>"><?=$DATA['procedure_title'];?></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
								<div class="diseases-box-wrap box-border-bottom box-heading pb-4 mb-4">
									<h4>By Diseases</h4>
									<div class="row filter-search">
										<div class="form-group col-12">
											<input type="text" placeholder="Search..." class="form-control search-filter">
										</div>
									</div>
									<?php $DISEASE_LIST=$THIS->getDiseaseBySpeciality($SPECIALITY_ID); ?>
									<div class="diseases-box place-box-content">
										<ul>
											<?php foreach($DISEASE_LIST as $DATA) { 
											$SLUG_BASE=$THIS->getSlug($SLUG,$COUNTRY_SLUG,$CITY_SLUG,$SPECIALITY_SLUG,"",$DATA['disease_slug']);
											?>
											<li class="<?=$DATA['disease_slug']==$DISEASE_SLUG?'filter-active':'';?>"><a href="<?=$SLUG_BASE;?>"><?=$DATA['disease_title'];?></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
								<?php } ?>
								<div class="topHospital-box-wrap box-border-bottom box-heading pb-4 mb-4">
									<h4>Top Hospitals</h4>
									<div class="row filter-search">
										<div class="form-group col-12">
											<input type="text" placeholder="Search..." class="form-control search-filter">
										</div>
									</div>
									<div class="topHospital-box place-box-content">
										<ul>
											<?php foreach($FEATURED_LIST as $DATA) { ?>
											<li><a href="<?=front_base_url('hospital/'.$DATA['hospital_slug']);?>"><?=$DATA['hospital_name']?></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
								<div class="topHospital-box-wrap box-border-bottom box-heading pb-4 mb-4">
									<h4>Best Doctors</h4>
									<div class="row filter-search">
										<div class="form-group col-12">
											<input type="text" placeholder="Search..." class="form-control search-filter">
										</div>
									</div>
									<div class="topHospital-box place-box-content">
										<?php
										$SLUG_BASE=$THIS->getSlug($SLUG_OTHER,$COUNTRY_SLUG,$CITY_SLUG,$SPECIALITY_SLUG,$PROCEDURE_SLUG,$DISEASE_SLUG);
										?>
										<ul>
											<li><a href="<?=$SLUG_BASE;?>"><?=$PAGE_TITLE_OTHER;?></a></li>
										</ul>
									</div>
								</div>
								<div class="left-form-section">
									<div class="card-body bg-white rounded-3">

										<form action="<?=front_base_url('Operation/enquiryAssistanceFormSubmitted')?>" method="post" class="contact-form form-style-3" >
											<input type="hidden" name="enquiry_assistance_subject" value="Blog List">
											<input type="hidden" name="enquiry_assistance_source" value="<?=$CURRENT_URL_V2;?>">
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
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="blog-master-section">
						<?php if(empty($DATA_LIST)) { ?>
						<div class="alert alert-warning" role="alert">Records do not match.</div>
						<?php } ?>
                        <div class="row">
							<?php
							foreach($DATA_LIST as $DATA)
							{
							?>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12 pb-3 mb-4">
								
								<div class="blog-card">
									<div class="thumbnail-image position-relative">
										<a href="<?=front_base_url('blog/'.$DATA['blog_slug']);?>">
											<img src="<?=file_upload_base_url($DATA['blog_image']);?>" alt="<?= $DATA['blog_title']; ?>" class="img-fluid">
										</a>
									</div>
									<div class="blog-content mt-3">
										<h2><?= $DATA['blog_title']; ?></h2>
										<div class="blog-line"></div>
										<div class="d-flex align-items-center justify-content-between">
											<span class="d-block text-black">
												<i><img src="img/calender.png" class="me-2" alt=""></i>
												<?=date('d F,Y',strtotime($DATA['blog_date']))?>
											</span>
											<span class="d-block"><a href="<?=front_base_url('blog/'.$DATA['blog_slug']);?>">Read More</a></span>
										</div>
									</div>
								</div>
								
                            </div>
							<?php
							}
							?>
                        </div>
                        <div class="container-spacing form-section bg-white rounded-3">
                            <h2>Looking for the best doctor ?</h2>
                            <p>Fill up the form and get assured assitance within 24 hrs!</p>
                            <form action="<?=front_base_url('Operation/enquiryFormSubmitted')?>" method="post" class="contact-form form-style-3"  enctype="multipart/form-data">
								<input type="hidden" name="enquiry_subject" value="Blog List">
								<input type="hidden" name="enquiry_source" value="<?=$CURRENT_URL_V2;?>">
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
                    </div>
                </div>
            </div>
        </div>
    </section>