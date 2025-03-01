
                        <!-- BEGIN Content Row-->
						<div class="row">
							<div class="col-lg-12 col-xs-12 col-sm-12">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-pencil-square-o"></i>Edit This <?=$title?>
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse"> </a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url($view_controller.'/editSubmitted');?>" role="form" method="post" class="horizontal-form" id="form_sample_1" enctype="multipart/form-data">
											<?=form_hidden('id',$list[0][$default_id_field])?>
											<div class="form-body">
											
												<h3 class="form-section"><?=$title?> Info</h3>
												<div class="row">
													<div class="col-md-6 ">
														<div class="form-group">
															<label>Title</label>
															<input type="text" class="form-control" name="testimonial_title" id="testimonial_title"  value="<?=$list[0]['testimonial_title']?>" required> 
														</div>
														<div class="form-group">
															<label>Select Speciality</label>
															<select id="testimonial_speciality" name="testimonial_speciality[]" class="form-control select2" required multiple>
																<option></option>
																<?php 
																$SELECT_SPECIALITY=explode(",",$list[0]['testimonial_speciality']);
																foreach($SPECIALITY as $DATA) { ?>
																<option value="<?=$DATA['speciality_id']?>" <?=in_array($DATA['speciality_id'],$SELECT_SPECIALITY)?"selected":"";?>><?=$DATA['speciality_title'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Procedure</label>
															<select id="testimonial_procedure" name="testimonial_procedure[]" class="form-control select2" multiple>
																<option></option>
																<?php 
																$SELECT_PROCEDURE=explode(",",$list[0]['testimonial_procedure']);
																foreach($PROCEDURE as $DATA) { ?>
																<option value="<?=$DATA['procedure_id']?>" <?=in_array($DATA['procedure_id'],$SELECT_PROCEDURE)?"selected":"";?>><?=$DATA['procedure_title'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Disease</label>
															<select id="testimonial_disease" name="testimonial_disease[]" class="form-control select2" multiple>
																<option></option>
																<?php 
																$SELECT_DISEASE=explode(",",$list[0]['testimonial_disease']);
																foreach($DISEASE as $DATA) { ?>
																<option value="<?=$DATA['disease_id']?>" <?=in_array($DATA['disease_id'],$SELECT_DISEASE)?"selected":"";?>><?=$DATA['disease_title'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Doctor</label>
															<select id="testimonial_doctor" name="testimonial_doctor[]" class="form-control select2" multiple>
																<option></option>
																<?php 
																$SELECT_DOCTOR=explode(",",$list[0]['testimonial_doctor']);
																foreach($DOCTOR as $DATA) { ?>
																<option value="<?=$DATA['doctor_id']?>" <?=in_array($DATA['doctor_id'],$SELECT_DOCTOR)?"selected":"";?>><?=$DATA['doctor_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Hospital</label>
															<select id="testimonial_hospital" name="testimonial_hospital[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																$SELECT_HOSPITAL=explode(",",$list[0]['testimonial_hospital']);
																foreach($HOSPITAL as $DATA) { ?>
																<option value="<?=$DATA['hospital_id']?>" <?=in_array($DATA['hospital_id'],$SELECT_HOSPITAL)?"selected":"";?>><?=$DATA['hospital_name'];?></option>
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
																$SELECT_COUNTRY=explode(",",$list[0]['testimonial_country']);
																foreach($COUNTRY as $DATA) { ?>
																<option value="<?=$DATA['country_id']?>" <?=in_array($DATA['country_id'],$SELECT_COUNTRY)?"selected":"";?>><?=$DATA['country_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select State</label>
															<select id="testimonial_state" name="testimonial_state[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																$SELECT_STATE=explode(",",$list[0]['testimonial_state']);
																foreach($STATE as $DATA) { ?>
																<option value="<?=$DATA['state_id']?>" <?=in_array($DATA['state_id'],$SELECT_STATE)?"selected":"";?>><?=$DATA['state_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select City</label>
															<select id="testimonial_city" name="testimonial_city[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																$SELECT_CITY=explode(",",$list[0]['testimonial_city']);
																foreach($CITY as $DATA) { ?>
																<option value="<?=$DATA['city_id']?>" <?=in_array($DATA['city_id'],$SELECT_CITY)?"selected":"";?>><?=$DATA['city_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Video ID</label>
															<input type="text" class="form-control" name="testimonial_video_id" id="testimonial_video_id" value="<?=$list[0]['testimonial_video_id']?>"> 
														</div>
														<div class="form-group">
															<label>Featured Image</label>
															<div class="input-group">
																<span class="input-group-btn">
																	<button class="btn red" type="button" onClick="mediaRemove('testimonial_image')"><icon class="fa fa-times"></icon> Remove</button>
																</span>
																<input type="text" class="form-control" name="testimonial_image" id="testimonial_image" value="<?=$list[0]['testimonial_image']?>"  pattern="([\w.%+-\/]+.png)|([\w.%+-\/]+.jpg)|([\w.%+-\/]+.jpeg)|([\w.%+-\/]+.gif)" readonly> 
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
																	<input type="radio" id="testimonial_show_in_featured0" name="testimonial_show_in_featured" class="md-radiobtn" value="0"
																	<?php if($list[0]['testimonial_show_in_featured']==0) echo "checked"; ?>>
																	<label for="testimonial_show_in_featured0">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> No </label>
																</div>
																<div class="md-radio">
																	<input type="radio" id="testimonial_show_in_featured1" name="testimonial_show_in_featured" class="md-radiobtn" value="1"
																	<?php if($list[0]['testimonial_show_in_featured']==1) echo "checked"; ?>>
																	<label for="testimonial_show_in_featured1">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> Yes </label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label>Short Description</label>
															<textarea class="form-control" name="testimonial_short_details" rows="2"><?=$list[0]['testimonial_short_details']?></textarea>
														</div>
														<div class="form-group">
															<label>Page</label>
															<select id="testimonial_page" name="testimonial_page[]" class="form-control select2" multiple>
																<option></option>
																<?php 
																$SELECT_TESTIMONIAL_PAGE=explode(",",$list[0]['testimonial_page']);
																foreach($DATA_SHOW_IN_PAGES as $DATA) { ?>
																<option value="<?=$DATA['id']?>" <?=in_array($DATA['id'],$SELECT_TESTIMONIAL_PAGE)?"selected":"";?>><?=$DATA['content'];?></option>
																<?php } ?>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 ">
														<div class="form-group">
															<label>Details</label>
															<textarea class="form-control" id="editor1" name="testimonial_details" rows="20"><?=$list[0]['testimonial_details']?></textarea>
														</div>
													</div>
												</div>
											</div>
											<div class="form-actions right">
												<button type="button" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
												<button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
												<button type="submit" class="btn yellow" name="submit" value="submit">
												<i class="fa fa-check"></i> Update</button>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
						</div>
                        <div class="clearfix"></div>
                        <!-- END Content Row-->