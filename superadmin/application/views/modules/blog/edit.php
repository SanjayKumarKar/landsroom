
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
															<input type="text" class="form-control" name="blog_title" id="blog_title" onKeyUp="blogSlugCheck()" value="<?=$list[0]['blog_title']?>" required> 
														</div>
														<div class="form-group">
															<label>Blog Slug</label>
															<input type="text" class="form-control" name="blog_slug" id="blog_slug"  value="<?=$list[0]['blog_slug']?>" required readonly> 
															<input type="hidden" name="blog_slug_prev" id="blog_slug_prev" value="<?=$list[0]['blog_slug']?>"> 
														</div>
														<div class="form-group">
															<label>Select Blog Category</label>
															<div class="input-group select2-bootstrap-append">
																<select id="blog_blog_category_id" name="blog_blog_category_id[]" class="form-control select2" required multiple>
																	<option></option>
																	<?php
																	$CATEGORY=explode(",",$list[0]['blog_blog_category_id']);
																	foreach($BLOG_CATEGORY as $DATA) { ?>
																	<option value="<?=$DATA['blog_category_id']?>" <?php if(in_array($DATA['blog_category_id'],$CATEGORY)) echo "selected"; ?>><?=$DATA['blog_category_title']?></option>
																	<?php } ?>
																</select>
																<div class="input-group-btn">
																	<a href="#blog_category" data-toggle="modal" class="btn btn-default red"><icon class="fa fa-plus"></icon> Add New
																	</a>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label>Select Speciality</label>
															<select id="blog_speciality" name="blog_speciality[]" class="form-control select2" required multiple>
																<option></option>
																<?php 
																$SELECT_SPECIALITY=explode(",",$list[0]['blog_speciality']);
																foreach($SPECIALITY as $DATA) { ?>
																<option value="<?=$DATA['speciality_id']?>" <?=in_array($DATA['speciality_id'],$SELECT_SPECIALITY)?"selected":"";?>><?=$DATA['speciality_title'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Procedure</label>
															<select id="blog_procedure" name="blog_procedure[]" class="form-control select2" multiple>
																<option></option>
																<?php 
																$SELECT_PROCEDURE=explode(",",$list[0]['blog_procedure']);
																foreach($PROCEDURE as $DATA) { ?>
																<option value="<?=$DATA['procedure_id']?>" <?=in_array($DATA['procedure_id'],$SELECT_PROCEDURE)?"selected":"";?>><?=$DATA['procedure_title'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Disease</label>
															<select id="blog_disease" name="blog_disease[]" class="form-control select2" multiple>
																<option></option>
																<?php 
																$SELECT_DISEASE=explode(",",$list[0]['blog_disease']);
																foreach($DISEASE as $DATA) { ?>
																<option value="<?=$DATA['disease_id']?>" <?=in_array($DATA['disease_id'],$SELECT_DISEASE)?"selected":"";?>><?=$DATA['disease_title'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Country</label>
															<select id="blog_country" name="blog_country[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																$SELECT_COUNTRY=explode(",",$list[0]['blog_country']);
																foreach($COUNTRY as $DATA) { ?>
																<option value="<?=$DATA['country_id']?>" <?=in_array($DATA['country_id'],$SELECT_COUNTRY)?"selected":"";?>><?=$DATA['country_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select State</label>
															<select id="blog_state" name="blog_state[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																$SELECT_STATE=explode(",",$list[0]['blog_state']);
																foreach($STATE as $DATA) { ?>
																<option value="<?=$DATA['state_id']?>" <?=in_array($DATA['state_id'],$SELECT_STATE)?"selected":"";?>><?=$DATA['state_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select City</label>
															<select id="blog_city" name="blog_city[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																$SELECT_CITY=explode(",",$list[0]['blog_city']);
																foreach($CITY as $DATA) { ?>
																<option value="<?=$DATA['city_id']?>" <?=in_array($DATA['city_id'],$SELECT_CITY)?"selected":"";?>><?=$DATA['city_name'];?></option>
																<?php } ?>
															</select>
														</div>
													</div>
													<div class="col-md-6 ">
														<div class="form-group">
															<label>Date</label>
															<input type="text" class="form-control form-control-inline date-picker" data-date-format="yyyy-mm-dd" name="blog_date" id="blog_date" value="<?=$list[0]['blog_date']?>"> 
														</div>
														<div class="form-group">
															<label>Select Hospital</label>
															<select id="blog_hospital" name="blog_hospital" class="form-control select2">
																<option></option>
																<?php foreach($HOSPITAL as $DATA) { ?>
																<option value="<?=$DATA['hospital_id']?>" <?=$DATA['hospital_id']==$list[0]['blog_hospital']?"selected":"";?>><?=$DATA['hospital_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Doctor</label>
															<select id="blog_doctor" name="blog_doctor" class="form-control select2">
																<option></option>
																<?php foreach($DOCTOR as $DATA) { ?>
																<option value="<?=$DATA['doctor_id']?>" <?=$DATA['doctor_id']==$list[0]['blog_doctor']?"selected":"";?>><?=$DATA['doctor_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Doctor/Reviewer</label>
															<select id="blog_reviewer_doctor" name="blog_reviewer_doctor" class="form-control select2">
																<option></option>
																<?php foreach($BLOG_DOCTOR_REVIEWER as $DATA) { ?>
																<option value="<?=$DATA['doctor_id']?>" <?=$DATA['doctor_id']==$list[0]['blog_reviewer_doctor']?"selected":"";?>><?=$DATA['doctor_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Doctor/Author</label>
															<select id="blog_author_doctor" name="blog_author_doctor" class="form-control select2">
																<option></option>
																<?php foreach($BLOG_DOCTOR_AUTHOR as $DATA) { ?>
																<option value="<?=$DATA['doctor_id']?>" <?=$DATA['doctor_id']==$list[0]['blog_author_doctor']?"selected":"";?>><?=$DATA['doctor_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Author</label>
															<select id="blog_author" name="blog_author" class="form-control select2">
																<option></option>
																<?php foreach($BLOG_AUTHOR as $DATA) { ?>
																<option value="<?=$DATA['author_id']?>" <?=$DATA['author_id']==$list[0]['blog_author']?"selected":"";?>><?=$DATA['author_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Featured Image</label>
															<div class="input-group">
																<span class="input-group-btn">
																	<button class="btn red" type="button" onClick="mediaRemove('blog_image')"><icon class="fa fa-times"></icon> Remove</button>
																</span>
																<input type="text" class="form-control" name="blog_image" id="blog_image" value="<?=$list[0]['blog_image']?>"  pattern="([\w.%+-\/]+.png)|([\w.%+-\/]+.jpg)|([\w.%+-\/]+.jpeg)|([\w.%+-\/]+.gif)" readonly> 
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default green" onClick="openMediaModal('blog_image')"><icon class="fa fa-photo"></icon> Choose
																	</button>
																</span>
															</div>
														</div>
														<div class="form-group">
															<label>Short Description</label>
															<textarea class="form-control" name="blog_short_details" rows="2"><?=$list[0]['blog_short_details']?></textarea>
														</div>
														<div class="form-group">
															<label>Meta Title</label>
															<input type="text" class="form-control" name="blog_meta_title" id="blog_meta_title" value="<?=$list[0]['blog_meta_title']?>"> 
														</div>
														<div class="form-group">
															<label>Meta Description</label>
															<textarea class="form-control" name="blog_meta_description" rows="2"><?=$list[0]['blog_meta_description']?></textarea>
														</div>
														<div class="form-group">
															<label>Meta Keyword</label>
															<input type="text" name="blog_meta_keyword" placeholder="Keyword" class= "form-control" data-role="tagsinput" value="<?=$list[0]['blog_meta_keyword']?>"/>  
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 ">
														<div class="form-group">
															<label>Details</label>
															<textarea class="form-control" id="editor1" name="blog_details" rows="20"><?=$list[0]['blog_details']?></textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 ">
														<div class="form-group">
															<label>OG Tag</label>
															<textarea class="form-control" name="blog_og_tag" rows="5"><?=$list[0]['blog_og_tag']?></textarea>
														</div>
														<div class="form-group">
															<label>Schema</label>
															<textarea class="form-control" name="blog_schema" rows="5"><?=$list[0]['blog_schema']?></textarea>
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