
                        <!-- BEGIN Content Row-->
						<div class="row">
							<div class="col-lg-12 col-xs-12 col-sm-12">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-plus-circle"></i>Add New <?=$title?> 
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse"> </a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url($view_controller.'/addSubmitted');?>" role="form" method="post" class="horizontal-form" id="form_sample_1" enctype="multipart/form-data">
											<div class="form-body">
											
												<h3 class="form-section"><?=$title;?> Info</h3>
												<div class="row">
													<div class="col-md-6 ">
														<div class="form-group">
															<label>Title</label>
															<input type="text" class="form-control" name="testimonial_title" id="testimonial_title"  value="<?=set_value('testimonial_title');?>" required> 
														</div>
														<div class="form-group">
															<label>Select Speciality</label>
															<select id="testimonial_speciality" name="testimonial_speciality[]" class="form-control select2" multiple>
																<option></option>
																<?php foreach($SPECIALITY as $DATA) { ?>
																<option value="<?=$DATA['speciality_id']?>"><?=$DATA['speciality_title']?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Procedure</label>
															<select id="testimonial_procedure" name="testimonial_procedure[]" class="form-control select2" multiple>
																<option></option>
																<?php 
																foreach($PROCEDURE as $DATA) { ?>
																<option value="<?=$DATA['procedure_id']?>"><?=$DATA['procedure_title'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Disease</label>
															<select id="testimonial_disease" name="testimonial_disease[]" class="form-control select2" multiple>
																<option></option>
																<?php 
																foreach($DISEASE as $DATA) { ?>
																<option value="<?=$DATA['disease_id']?>"><?=$DATA['disease_title'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Doctor</label>
															<select id="testimonial_doctor" name="testimonial_doctor[]" class="form-control select2" multiple>
																<option></option>
																<?php foreach($DOCTOR as $DATA) { ?>
																<option value="<?=$DATA['doctor_id']?>"><?=$DATA['doctor_name']?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Hospital</label>
															<select id="testimonial_hospital" name="testimonial_hospital[]" class="form-control select2" multiple>
																<option></option>
																<?php foreach($HOSPITAL as $DATA) { ?>
																<option value="<?=$DATA['hospital_id']?>"><?=$DATA['hospital_name'];?></option>
																<?php } ?>
															</select>
														</div>
													</div>
													<div class="col-md-6 ">
														<div class="form-group">
															<label>Select Country</label>
															<select id="testimonial_country" name="testimonial_country[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																foreach($COUNTRY as $DATA) { ?>
																<option value="<?=$DATA['country_id']?>"><?=$DATA['country_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select State</label>
															<select id="testimonial_state" name="testimonial_state[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																foreach($STATE as $DATA) { ?>
																<option value="<?=$DATA['state_id']?>"><?=$DATA['state_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select City</label>
															<select id="testimonial_city" name="testimonial_city[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																foreach($CITY as $DATA) { ?>
																<option value="<?=$DATA['city_id']?>"><?=$DATA['city_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Video ID</label>
															<input type="text" class="form-control" name="testimonial_video_id" id="testimonial_video_id" value="<?=set_value('testimonial_video_id');?>"> 
														</div>
														<div class="form-group">
															<label>Featured Image</label>
															<div class="input-group">
																<span class="input-group-btn">
																	<button class="btn red" type="button" onClick="mediaRemove('testimonial_image')"><icon class="fa fa-times"></icon> Remove</button>
																</span>
																<input type="text" class="form-control" name="testimonial_image" id="testimonial_image" value="<?=set_value('testimonial_image');?>"  pattern="([\w.%+-\/]+.png)|([\w.%+-\/]+.jpg)|([\w.%+-\/]+.jpeg)|([\w.%+-\/]+.gif)" readonly> 
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default green" onClick="openMediaModal('testimonial_image')"><icon class="fa fa-photo"></icon> Choose
																	</button>
																</span>
															</div>
														</div>
														<div class="form-group">
															<label>Show in Featured List</label>
															<div class="md-radio-inline">
																<div class="md-radio has-error">
																	<input type="radio" id="testimonial_show_in_featured0" name="testimonial_show_in_featured" class="md-radiobtn" value="0" checked>
																	<label for="testimonial_show_in_featured0">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> No </label>
																</div>
																<div class="md-radio">
																	<input type="radio" id="testimonial_show_in_featured1" name="testimonial_show_in_featured" class="md-radiobtn" value="1">
																	<label for="testimonial_show_in_featured1">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> Yes </label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label>Short Description</label>
															<textarea class="form-control" name="testimonial_short_details" rows="2"></textarea>
														</div>
														<div class="form-group">
															<label>Page</label>
															<select id="testimonial_page" name="testimonial_page[]" class="form-control select2" multiple>
																<option></option>
																<?php 
																foreach($DATA_SHOW_IN_PAGES as $DATA) { ?>
																<option value="<?=$DATA['id']?>"><?=$DATA['content'];?></option>
																<?php } ?>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 ">
														<div class="form-group">
															<label>Details</label>
															<textarea class="form-control" id="editor1" name="testimonial_details" rows="20"><?=set_value('testimonial_details');?></textarea>
														</div>
													</div>
												</div>
											</div>
											<div class="form-actions right">
												<button type="reset" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
												<button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
												<button type="submit" class="btn green" name="submit" value="submit">
												<i class="fa fa-check"></i> Save</button>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
						</div>
                        <div class="clearfix"></div>
                        <!-- END Content Row-->