
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-12">
								<div class="portlet light ">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">Personal Info</a>
											</li>
											<li>
												<a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
											</li>
											<li>
												<a href="#tab_1_3" data-toggle="tab">Change Password</a>
											</li>
											<!--<li>
												<a href="#tab_1_4" data-toggle="tab">Privacy Settings</a>
											</li>-->
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- PERSONAL INFO TAB -->
											<div class="tab-pane active" id="tab_1_1">
												<form action="<?=base_url($view_controller.'/editSubmitted');?>" role="form" method="post" class="horizontal-form" id="form_sample_1" enctype="multipart/form-data">
													<?=form_hidden('id',$list[0][$default_id_field])?>
													<div class="form-group">
														<label class="control-label">Name</label>
														<input type="text" name="admin_name" placeholder="Name" class= "form-control" value="<?=$list[0]['admin_name']?>" pattern="[a-zA-Z0-9\s]+" required/> 
													</div>
													<div class="form-group">
														<label class="control-label">Email</label>
														<input type="email" name="admin_email" placeholder="Email" class= "form-control" value="<?=$list[0]['admin_email']?>" required/> 
														<input type="hidden" name="admin_email_prev"  value="<?=$list[0]['admin_email']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Contact Number</label>
														<input type="text" name="admin_contact" placeholder="Contact Number" minlength="10" maxlength="13" class= "form-control" value="<?=$list[0]['admin_contact']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Interests</label>
														<input type="text" name="admin_interest" placeholder="Interests" class= "form-control" data-role="tagsinput" value="<?=$list[0]['admin_interest']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Occupation</label>
														<input type="text" name="admin_occupation" placeholder="Occupation" class= "form-control" value="<?=$list[0]['admin_occupation']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Date of Birth</label>
														<input type="text" name="admin_dob" placeholder="Date of Birth" class= "form-control form-control-inline date-picker"  data-date-format="yyyy-mm-dd" value="<?=$list[0]['admin_dob']?>"/> 
													</div>
													<div class="form-group">
														<label>Gender</label>
														<div class="md-radio-inline">
															<div class="md-radio">
																<input type="radio" id="admin_gender0" name="admin_gender" class="md-radiobtn" value="0"
																<?php if($list[0]['admin_gender']==0) echo "checked"; ?>>
																<label for="admin_gender0">
																	<span></span>
																	<span class="check"></span>
																	<span class="box"></span> Female </label>
															</div>
															<div class="md-radio has-error">
																<input type="radio" id="admin_gender1" name="admin_gender" class="md-radiobtn" value="1"
																<?php if($list[0]['admin_gender']==1) echo "checked"; ?>>
																<label for="admin_gender1">
																	<span></span>
																	<span class="check"></span>
																	<span class="box"></span> Male</label>
															</div>
															<div class="md-radio has-warning">
																<input type="radio" id="admin_gender2" name="admin_gender" class="md-radiobtn" value="2"
																<?php if($list[0]['admin_gender']==2) echo "checked"; ?>>
																<label for="admin_gender2">
																	<span></span>
																	<span class="check"></span>
																	<span class="box"></span> Others </label>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">Unique ID Number</label>
														<input type="text" name="admin_unique_id_number" placeholder="Unique ID Number" class= "form-control" value="<?=$list[0]['admin_unique_id_number']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Unique ID Type</label> 
														<select name="admin_unique_id_type" class="form-control select2">
															<option></option>
															<option value="Aadhaar Card" <?php if($list[0]['admin_unique_id_type']=="Aadhaar Card") echo "selected"; ?>>Aadhaar Card</option>
															<option value="PAN Card" <?php if($list[0]['admin_unique_id_type']=="PAN Card") echo "selected"; ?>>PAN Card</option>
															<option value="Voter ID Card" <?php if($list[0]['admin_unique_id_type']=="Voter ID Card") echo "selected"; ?>>Voter ID Card</option>
															<option value="Driving Licence" <?php if($list[0]['admin_unique_id_type']=="Driving Licence") echo "selected"; ?>>Driving Licence</option>
															<option value="Passport" <?php if($list[0]['admin_unique_id_type']=="Passport") echo "selected"; ?>>Passport</option>
														</select>
													</div>
													<div class="form-group">
														<label class="control-label">About</label>
														<textarea class="form-control" id="editor1" rows="3" name="admin_about" placeholder="About User"><?=$list[0]['admin_about']?></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">Address</label>
														<textarea class="form-control" id="editor2" rows="3" name="admin_address" placeholder="Address"><?=$list[0]['admin_address']?></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">Website Url</label>
														<input type="url" name="admin_website"  placeholder="http://www.example.com" class= "form-control" value="<?=$list[0]['admin_website']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Twitter Account URL Url</label>
														<input type="url" name="admin_twitter"  placeholder="https://twitter.com/example/" class= "form-control" value="<?=$list[0]['admin_twitter']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Facebook Profile Url</label>
														<input type="url" name="admin_facebook"  placeholder="https://www.facebook.com/example/" class= "form-control" value="<?=$list[0]['admin_facebook']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Instagram Profile Url</label>
														<input type="url" name="admin_instagram"  placeholder="https://www.instagram.com/example/" class= "form-control" value="<?=$list[0]['admin_instagram']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">LinkedIN Profile Url</label>
														<input type="url" name="admin_linkedin"  placeholder="https://www.linkedin.com/in/example/" class= "form-control" value="<?=$list[0]['admin_linkedin']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Youtube Channel Url</label>
														<input type="url" name="admin_youtube"  placeholder="https://www.youtube.com/channel/example_channel_id" class= "form-control" value="<?=$list[0]['admin_youtube']?>"/> 
													</div>
													<div class="margiv-top-10">
														<button type="reset" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
														<button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
														<button type="submit" class="btn yellow" name="submit" value="submit">
														<i class="fa fa-check"></i> Update</button>
													</div>
												</form>
											</div>
											<!-- END PERSONAL INFO TAB -->
											<!-- CHANGE AVATAR TAB -->
											<div class="tab-pane" id="tab_1_2">
												<center>
												<img src="<?=file_upload_base_url($list[0]['admin_image']);?>" id="image_preview" width="20%" style="border: black solid 2px; border-radius: 5px" alt="Image Preview Box">
												</center>
												<form action="<?=base_url($view_controller.'/editAvatorSubmitted');?>" role="form" method="post" class="horizontal-form" id="form_sample_11" enctype="multipart/form-data">
													
														<div class="form-group">
															<label>Select Avator</label>
															<div class="input-group select2-bootstrap-append">
																<input type="text" class="form-control" name="admin_image" id="admin_image" value="<?=$list[0]['admin_image']?>"  pattern="([\w.%+-\/]+.png)|([\w.%+-\/]+.jpg)|([\w.%+-\/]+.jpeg)|([\w.%+-\/]+.gif)" required readonly> 
																<div class="input-group-btn">
																	<button type="button" class="btn btn-default green" onClick="openMediaModal('admin_image')"><icon class="fa fa-photo"></icon> Choose Profile Picture
																	</button>
																</div>
															</div>
														</div>
													<div class="margiv-top-10">
														<button type="reset" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
														<button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
														<button type="submit" class="btn yellow" name="submit" value="submit">
														<i class="fa fa-check"></i> Change Avator</button>
													</div>
												</form>
											</div>
											<!-- END CHANGE AVATAR TAB -->
											<!-- CHANGE PASSWORD TAB -->
											<div class="tab-pane" id="tab_1_3">
												<form action="<?=base_url($view_controller.'/editPasswordSubmitted');?>" role="form" method="post" class="horizontal-form"id="form_sample_12"  enctype="multipart/form-data">
													<div class="form-group">
														<label class="control-label">Current Password</label> 
														<div class="input-icon right">
															<i class="fa fa-eye font-blue" title="View Password" onClick="changeType('admin_current_password','password','text')"></i>
															<input type="password" name="admin_current_password" id="admin_current_password" placeholder="Current Password" minlength="8" maxlength="40" class= "form-control" required />
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">New Password</label> 
														<div class="input-icon right">
															<i class="fa fa-eye font-blue" title="View Password" onClick="changeType('admin_password','password','text')"></i>
															<input type="password" name="admin_password" id="admin_password"  placeholder="New Password" minlength="8" maxlength="40" class= "form-control" onKeyUp="validatePassword()" required />
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">Re-type New Password</label> 
														<div class="input-icon right">
															<i class="fa fa-eye font-blue" title="View Password" onClick="changeType('admin_password_recovery','password','text')"></i>
															<input type="password" name="admin_password_recovery" id="admin_password_recovery"  placeholder="Re-Type New Password" minlength="8" maxlength="40" class= "form-control" onKeyUp="validatePassword()" required />
														</div>
													</div>
													<div class="margiv-top-10">
														<button type="reset" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
														<button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
														<button type="submit" class="btn yellow" name="submit" value="submit">
														<i class="fa fa-check"></i> Change Password</button>
													</div>
												</form>
											</div>
											<!-- END CHANGE PASSWORD TAB -->
											<!-- PRIVACY SETTINGS TAB -->
											<!--<div class="tab-pane" id="tab_1_4">
												<form action="#">
													<table class="table table-light table-hover">
														<tr>
															<td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
															<td>
																<div class="mt-radio-inline">
																	<label class="mt-radio">
																	<input type="radio" name="optionsRadios1" value="option1" /> Yes
																	<span></span>
																	</label>
																	<label class="mt-radio">
																	<input type="radio" name="optionsRadios1" value="option2" checked/> No
																	<span></span>
																	</label>
																</div>
															</td>
														</tr>
														<tr>
															<td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
															<td>
																<div class="mt-radio-inline">
																	<label class="mt-radio">
																	<input type="radio" name="optionsRadios11" value="option1" /> Yes
																	<span></span>
																	</label>
																	<label class="mt-radio">
																	<input type="radio" name="optionsRadios11" value="option2" checked/> No
																	<span></span>
																	</label>
																</div>
															</td>
														</tr>
														<tr>
															<td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
															<td>
																<div class="mt-radio-inline">
																	<label class="mt-radio">
																	<input type="radio" name="optionsRadios21" value="option1" /> Yes
																	<span></span>
																	</label>
																	<label class="mt-radio">
																	<input type="radio" name="optionsRadios21" value="option2" checked/> No
																	<span></span>
																	</label>
																</div>
															</td>
														</tr>
														<tr>
															<td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
															<td>
																<div class="mt-radio-inline">
																	<label class="mt-radio">
																	<input type="radio" name="optionsRadios31" value="option1" /> Yes
																	<span></span>
																	</label>
																	<label class="mt-radio">
																	<input type="radio" name="optionsRadios31" value="option2" checked/> No
																	<span></span>
																	</label>
																</div>
															</td>
														</tr>
													</table>
													<div class="margin-top-10">
														<a href="javascript:;" class="btn red"> Save Changes </a>
														<a href="javascript:;" class="btn default"> Cancel </a>
													</div>
												</form>
											</div>-->
											<!-- END PRIVACY SETTINGS TAB -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
				</div>
			</div>