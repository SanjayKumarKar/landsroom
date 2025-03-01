
			<!-- BEGIN Content Row-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PROFILE SIDEBAR -->
					<?php $this->load->view('modules/'.$view_controller.'/sidebar'); ?>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-12">
								<div class="portlet light ">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Site Information</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">Basic Info</a>
											</li>
											<li>
												<a href="#tab_1_2" data-toggle="tab">Logo & Fav Icon</a>
											</li>
											<li>
												<a href="#tab_1_3" data-toggle="tab">Change Metadata</a>
											</li>
											<li>
												<a href="#tab_1_4" data-toggle="tab">Code Editor</a>
											</li>
											<li>
												<a href="#tab_1_5" data-toggle="tab">Map</a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											
											<!-- Basic INFO TAB -->
											<div class="tab-pane active" id="tab_1_1">
												<form action="<?=base_url($view_controller.'/editSubmitted');?>" role="form" method="post" class="horizontal-form" id="form_sample_1" enctype="multipart/form-data">
													<?=form_hidden('id',$SITE[0][$default_id_field])?>
													<div class="form-group">
														<label class="control-label">Title</label>
														<input type="text" name="site_name" placeholder="Title" class= "form-control" value="<?=$SITE[0]['site_name']?>" required/> 
													</div>
													<div class="form-group">
														<label class="control-label">Moto</label>
														<input type="text" name="site_moto" placeholder="Moto" class= "form-control" value="<?=$SITE[0]['site_moto']?>" required/> 
													</div>
													<div class="form-group">
														<label class="control-label">Select Front Page</label>
														<select name="site_home_url" id="site_home_url" class="form-control item-menu select2">
															<option></option>
															<?php foreach($PAGES as $DATA) { ?>
															<option value="<?=$DATA['page_slug']?>" <?php if($DATA['page_slug']==$SITE[0]['site_home_url']) echo "selected"; ?>><?=$DATA['page_title']?></option>
															<?php } ?>
														</select>
													</div>
													<div class="form-group">
														<label class="control-label">Select Primary Menu</label>
														<select name="site_primary_menu" id="site_primary_menu" class="form-control item-menu select2">
															<option></option>
															<?php foreach($MENU as $DATA) { ?>
															<option value="<?=$DATA['menu_id']?>" <?php if($DATA['menu_id']==$SITE[0]['site_primary_menu']) echo "selected"; ?>><?=$DATA['menu_title']?></option>
															<?php } ?>
														</select>
													</div>
													<div class="form-group">
														<label class="control-label">Email</label>
														<input type="email" name="site_email" placeholder="Email" class= "form-control" value="<?=$SITE[0]['site_email']?>" required/> 
													</div>
													<div class="form-group">
														<label class="control-label">Contact Number</label>
														<input type="text" name="site_contact" placeholder="Contact Number" class= "form-control" value="<?=$SITE[0]['site_contact']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Alternative Contact Number</label>
														<input type="text" name="site_contact_alternative" placeholder="Contact Number" class= "form-control" value="<?=$SITE[0]['site_contact_alternative']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">About Site</label>
														<textarea class="form-control" id="editor1" rows="3" name="site_about" placeholder="About User"><?=$SITE[0]['site_about']?></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">Address</label>
														<textarea class="form-control" id="editor2" rows="3" name="site_address" placeholder="Address"><?=$SITE[0]['site_address']?></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">Twitter Account URL Url</label>
														<input type="url" name="site_twitter"  placeholder="https://twitter.com/example/" class= "form-control" value="<?=$SITE[0]['site_twitter']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Facebook Profile Url</label>
														<input type="url" name="site_facebook"  placeholder="https://www.facebook.com/example/" class= "form-control" value="<?=$SITE[0]['site_facebook']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Instagram Profile Url</label>
														<input type="url" name="site_instagram"  placeholder="https://www.instagram.com/example/" class= "form-control" value="<?=$SITE[0]['site_instagram']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">LinkedIN Profile Url</label>
														<input type="url" name="site_linkedin"  placeholder="https://www.linkedin.com/in/example/" class= "form-control" value="<?=$SITE[0]['site_linkedin']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Pinterest Profile Url</label>
														<input type="url" name="site_pinterest"  placeholder="https://pinterest.com/example" class= "form-control" value="<?=$SITE[0]['site_pinterest']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Youtube Channel Url</label>
														<input type="url" name="site_youtube"  placeholder="https://www.youtube.com/channel/example_channel_id" class= "form-control" value="<?=$SITE[0]['site_youtube']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">WhatsApp Chat/group Url</label>
														<input type="url" name="site_whatsapp"  placeholder="https://wa.me/message/QF5LIXC7IP67F1" class= "form-control" value="<?=$SITE[0]['site_whatsapp']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">WhatsApp Number</label>
														<input type="text" name="site_whatsapp_number"  placeholder="Whatsapp Number" class= "form-control" value="<?=$SITE[0]['site_whatsapp_number']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Telegram Chat/group/Channel Url</label>
														<input type="url" name="site_telegram"  placeholder="" class= "form-control" value="<?=$SITE[0]['site_telegram']?>"/> 
													</div>
													<div class="form-group">

														<label>Visible in search engines?</label>

														<div class="md-radio-inline">

															<div class="md-radio has-error">

																<input type="radio" id="site_discourage_search_engine0" name="site_discourage_search_engine" class="md-radiobtn" value="0"

																<?php if($SITE[0]['site_discourage_search_engine']==0) echo "checked"; ?>>

																<label for="site_discourage_search_engine0">

																	<span></span>

																	<span class="check"></span>

																	<span class="box"></span> No </label>

															</div>

															<div class="md-radio">

																<input type="radio" id="site_discourage_search_engine1" name="site_discourage_search_engine" class="md-radiobtn" value="1"

																<?php if($SITE[0]['site_discourage_search_engine']==1) echo "checked"; ?>>

																<label for="site_discourage_search_engine1">

																	<span></span>

																	<span class="check"></span>

																	<span class="box"></span> Yes </label>

															</div>

														</div>

													</div>

													<div class="margiv-top-10">
														<button type="reset" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
														<button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
														<button type="submit" class="btn yellow" name="submit" value="submit">
														<i class="fa fa-check"></i> Update</button>
													</div>
												</form>
											</div>
											<!-- END Basic INFO TAB -->
											
											
											<!-- CHANGE Logo TAB -->
											<div class="tab-pane" id="tab_1_2">
												<form action="<?=base_url($view_controller.'/editLogoSubmitted');?>" role="form" method="post" class="horizontal-form" id="form_sample_11" enctype="multipart/form-data">
													
														<div class="form-group">
															<label>Select Original Logo</label>
															<div class="input-group select2-bootstrap-append">
																<input type="text" class="form-control" name="site_logo" id="site_logo" value="<?=$SITE[0]['site_logo']?>"  pattern="([\w.%+-\/]+.png)|([\w.%+-\/]+.PNG)|([\w.%+-\/]+.jpg)|([\w.%+-\/]+.jpeg)|([\w.%+-\/]+.gif)" required readonly> 
																<div class="input-group-btn">
																	<button type="button" class="btn btn-default green" onClick="openMediaModal('site_logo')"><icon class="fa fa-photo"></icon> Choose Image
																	</button>
																</div>
															</div>
														</div>
													
														<div class="form-group">
															<label>Select Reverse Logo</label>
															<div class="input-group select2-bootstrap-append">
																<input type="text" class="form-control" name="site_logo_reverse" id="site_logo_reverse" value="<?=$SITE[0]['site_logo_reverse']?>"  pattern="([\w.%+-\/]+.png)|([\w.%+-\/]+.PNG)|([\w.%+-\/]+.jpg)|([\w.%+-\/]+.jpeg)|([\w.%+-\/]+.gif)" readonly> 
																<div class="input-group-btn">
																	<button type="button" class="btn btn-default green" onClick="openMediaModal('site_logo_reverse')"><icon class="fa fa-photo"></icon> Choose Image
																	</button>
																</div>
															</div>
														</div>
													
													
													
														<div class="form-group">
															<label>Select FAV Icon</label>
															<div class="input-group select2-bootstrap-append">
																<input type="text" class="form-control" name="site_fav_icon" id="site_fav_icon" value="<?=$SITE[0]['site_fav_icon']?>"  pattern="([\w.%+-\/]+.PNG)|([\w.%+-\/]+.png)" required readonly> 
																<div class="input-group-btn">
																	<button type="button" class="btn btn-default green" onClick="openMediaModal('site_fav_icon')"><icon class="fa fa-photo"></icon> Choose Fav Icon
																	</button>
																</div>
															</div>
														</div>
													<div class="margiv-top-10">
														<button type="reset" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
														<button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
														<button type="submit" class="btn yellow" name="submit" value="submit">
														<i class="fa fa-check"></i> Change Logo</button>
													</div>
												</form>
											</div>
											<!-- END CHANGE Logo TAB -->
											
											
											<!-- CHANGE Meta Data TAB -->
											<div class="tab-pane" id="tab_1_3">
												<form action="<?=base_url($view_controller.'/editMetadataSubmitted');?>" role="form" method="post" class="horizontal-form"id="form_sample_12"  enctype="multipart/form-data">
													<div class="form-group">
														<label class="control-label">Title</label>
														<input type="text" name="site_meta_title" placeholder="Title" class= "form-control" value="<?=$SITE[0]['site_meta_title']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Keyword</label>
														<input type="text" name="site_meta_keyword" placeholder="Keyword" class= "form-control" data-role="tagsinput" required value="<?=$SITE[0]['site_meta_keyword']?>"/> 
													</div>
													<div class="form-group">
														<label class="control-label">Description</label>
														<textarea class="form-control" rows="3" name="site_meta_description" placeholder="Description" required><?=$SITE[0]['site_meta_description']?></textarea>
													</div>
													<div class="margiv-top-10">
														<button type="reset" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
														<button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
														<button type="submit" class="btn yellow" name="submit" value="submit">
														<i class="fa fa-check"></i> Change Metadata</button>
													</div>
												</form>
											</div>
											<!-- END CHANGE Meta Data TAB -->
											
											
											<!-- Code Editor TAB -->
											<div class="tab-pane" id="tab_1_4">
												<form action="<?=base_url($view_controller.'/editCodeSubmitted');?>" role="form" method="post" class="horizontal-form"id="form_sample_13"  enctype="multipart/form-data">
													<div class="form-group">
														<label class="control-label">Extra Header Code</label>
														<textarea name="site_code_header" id="code_editor_demo_100" placeholder="Extra Header Code"><?=$SITE[0]['site_code_header']?></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">Extra Footer Code</label>
														<textarea name="site_code_footer" id="code_editor_demo_1001" placeholder="Extra Footer Code"><?=$SITE[0]['site_code_footer']?></textarea>
													</div>
													<div class="margiv-top-10">
														<button type="reset" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
														<button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
														<button type="submit" class="btn yellow" name="submit" value="submit">
														<i class="fa fa-check"></i> Save</button>
													</div>
												</form>
											</div>
											<!-- END Code Editor TAB -->
											
											
											<!-- Location Map TAB -->
											<div class="tab-pane" id="tab_1_5">
												<div id="map"><?=$SITE[0]['site_location_map']?></div>
												<form action="<?=base_url($view_controller.'/editMapSubmitted');?>" role="form" method="post" class="horizontal-form"id="form_sample_13"  enctype="multipart/form-data">
													<div class="form-group">
														<label class="control-label">Location Google Map URL</label>
														<textarea name="site_location_url" id="site_location_url" class= "form-control" placeholder="Location URL"><?=$SITE[0]['site_location_url']?></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">Location Map Data</label>
														<textarea name="site_location_map" id="site_location_map" class= "form-control" placeholder="Location Embeded HTML"><?=$SITE[0]['site_location_map']?></textarea>
													</div>
													<div class="margiv-top-10">
														<button type="reset" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
														<button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
														<button type="button" class="btn red" onclick="mapChanger()"><i class="fa fa-eye"></i> Preview</button>
														<button type="submit" class="btn yellow" name="submit" value="submit">
														<i class="fa fa-check"></i> Save</button>
													</div>
												</form>
											</div>
											<!-- Location Map TAB -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
				</div>
			</div>
