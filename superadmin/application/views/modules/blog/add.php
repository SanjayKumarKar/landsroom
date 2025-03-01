
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
															<input type="text" class="form-control" name="blog_title" id="blog_title" onKeyUp="blogSlugCheck()" value="<?=set_value('blog_title');?>" required> 
														</div>
														<div class="form-group">
															<label>Blog Slug</label>
															<input type="text" class="form-control" name="blog_slug" id="blog_slug" value="<?=set_value('blog_slug');?>" required readonly>
															<input type="hidden" name="blog_slug_prev" id="blog_slug_prev" value=""> 
														</div>
														<div class="form-group">
															<label>Date</label>
															<input type="text" class="form-control form-control-inline date-picker" data-date-format="yyyy-mm-dd" name="blog_date" id="blog_date" value="<?=date('Y-m-d')?>"> 
														</div>
														<div class="form-group">
															<label>Select Blog Category</label>
															<div class="input-group select2-bootstrap-append">
																<select id="blog_blog_category_id" name="blog_blog_category_id[]" class="form-control select2" required multiple>
																	<option></option>
																	<?php
																	foreach($BLOG_CATEGORY as $DATA) { ?>
																	<option value="<?=$DATA['blog_category_id']?>"><?=$DATA['blog_category_title']?></option>
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
															<select id="blog_speciality" name="blog_speciality[]" class="form-control select2" multiple>
																<option></option>
																<?php foreach($SPECIALITY as $DATA) { ?>
																<option value="<?=$DATA['speciality_id']?>"><?=$DATA['speciality_title']?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Procedure</label>
															<select id="blog_procedure" name="blog_procedure[]" class="form-control select2" multiple>
																<option></option>
																<?php 
																foreach($PROCEDURE as $DATA) { ?>
																<option value="<?=$DATA['procedure_id']?>"><?=$DATA['procedure_title'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Disease</label>
															<select id="blog_disease" name="blog_disease[]" class="form-control select2" multiple>
																<option></option>
																<?php 
																foreach($DISEASE as $DATA) { ?>
																<option value="<?=$DATA['disease_id']?>"><?=$DATA['disease_title'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Country</label>
															<select id="blog_country" name="blog_country[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																foreach($COUNTRY as $DATA) { ?>
																<option value="<?=$DATA['country_id']?>"><?=$DATA['country_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select State</label>
															<select id="blog_state" name="blog_state[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																foreach($STATE as $DATA) { ?>
																<option value="<?=$DATA['state_id']?>"><?=$DATA['state_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select City</label>
															<select id="blog_city" name="blog_city[]" class="form-control select2" multiple>
																<option></option>
																<?php  
																foreach($CITY as $DATA) { ?>
																<option value="<?=$DATA['city_id']?>"><?=$DATA['city_name'];?></option>
																<?php } ?>
															</select>
														</div>
													</div>
													<div class="col-md-6 ">
														<div class="form-group">
															<label>Date</label>
															<input type="text" class="form-control form-control-inline date-picker" data-date-format="yyyy-mm-dd" name="blog_date" id="blog_date" value="<?=date('Y-m-d')?>"> 
														</div>
														<div class="form-group">
															<label>Select Hospital</label>
															<select id="blog_hospital" name="blog_hospital" class="form-control select2">
																<option></option>
																<?php foreach($HOSPITAL as $DATA) { ?>
																<option value="<?=$DATA['hospital_id']?>"><?=$DATA['hospital_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Doctor</label>
															<select id="blog_doctor" name="blog_doctor" class="form-control select2">
																<option></option>
																<?php foreach($DOCTOR as $DATA) { ?>
																<option value="<?=$DATA['doctor_id']?>"><?=$DATA['doctor_name']?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Doctor/Reviewer</label>
															<select id="blog_reviewer_doctor" name="blog_reviewer_doctor" class="form-control select2">
																<option></option>
																<?php foreach($BLOG_DOCTOR_REVIEWER as $DATA) { ?>
																<option value="<?=$DATA['doctor_id']?>"><?=$DATA['doctor_name']?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select Doctor/Author</label>
															<select id="blog_author_doctor" name="blog_author_doctor" class="form-control select2">
																<option></option>
																<?php foreach($BLOG_DOCTOR_AUTHOR as $DATA) { ?>
																<option value="<?=$DATA['doctor_id']?>"><?=$DATA['doctor_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Author</label>
															<select id="blog_author" name="blog_author" class="form-control select2">
																<option></option>
																<?php foreach($BLOG_AUTHOR as $DATA) { ?>
																<option value="<?=$DATA['author_id']?>"><?=$DATA['author_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Featured Image</label>
															<div class="input-group">
																<span class="input-group-btn">
																	<button class="btn red" type="button" onClick="mediaRemove('blog_image')"><icon class="fa fa-times"></icon> Remove</button>
																</span>
																<input type="text" class="form-control" name="blog_image" id="blog_image" value="<?=set_value('blog_image');?>"  pattern="([\w.%+-\/]+.png)|([\w.%+-\/]+.jpg)|([\w.%+-\/]+.jpeg)|([\w.%+-\/]+.gif)" readonly> 
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default green" onClick="openMediaModal('blog_image')"><icon class="fa fa-photo"></icon> Choose
																	</button>
																</span>
															</div>
														</div>
														<div class="form-group">
															<label>Short Description</label>
															<textarea class="form-control" name="blog_short_details" rows="2"></textarea>
														</div>
														<div class="form-group">
															<label>Meta Title</label>
															<input type="text" class="form-control" name="blog_meta_title" id="blog_meta_title"> 
														</div>
														<div class="form-group">
															<label>Meta Description</label>
															<textarea class="form-control" name="blog_meta_description" rows="7"><?=set_value('blog_meta_description');?></textarea>
														</div>
														<div class="form-group">
															<label>Meta Keyword</label>
															<input type="text" name="blog_meta_keyword" placeholder="Keyword" class= "form-control" data-role="tagsinput" value="<?=set_value('blog_meta_keyword');?>"/>  
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 ">
														<div class="form-group">
															<label>Details</label>
															<textarea class="form-control" id="editor1" name="blog_details" rows="20"><?=set_value('blog_details');?></textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 ">
														<div class="form-group">
															<label>OG Tag</label>
															<textarea class="form-control" name="blog_og_tag" rows="5"></textarea>
														</div>
														<div class="form-group">
															<label>Schema</label>
															<textarea class="form-control" name="blog_schema" rows="5"></textarea>
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