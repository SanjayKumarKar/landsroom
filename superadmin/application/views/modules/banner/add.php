
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
															<label>Order</label>
															<input type="text" class="form-control" name="banner_order" id="banner_order" value="<?=set_value('banner_order');?>" required> 
														</div>
														<div class="form-group">
															<label>Title</label>
															<input type="text" class="form-control" name="banner_title" id="banner_title" value="<?=set_value('banner_title');?>" required> 
														</div>
														<div class="form-group">
															<label>URL</label>
															<input type="text" class="form-control" name="banner_url" id="banner_url" value="<?=set_value('banner_url');?>" required> 
														</div>
													</div>
													
													<div class="col-md-6 ">
														<div class="form-group">
															<label>Button Text</label>
															<input type="text" class="form-control" name="banner_button_text" id="banner_button_text" value="<?=set_value('banner_button_text');?>"> 
														</div>
														<div class="form-group">
															<label>Desktop Image</label>
															<div class="input-group">
																<span class="input-group-btn">
																	<button class="btn red" type="button" onClick="mediaRemove('banner_image_desktop')"><icon class="fa fa-times"></icon> Remove</button>
																</span>
																<input type="text" class="form-control" name="banner_image_desktop" id="banner_image_desktop" value="<?=set_value('banner_image_desktop');?>" required readonly> 
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default green" onClick="openMediaModal('banner_image_desktop')"><icon class="fa fa-photo"></icon> Choose
																	</button>
																</span>
															</div>
														</div>
														<div class="form-group">
															<label>Mobile Image</label>
															<div class="input-group">
																<span class="input-group-btn">
																	<button class="btn red" type="button" onClick="mediaRemove('banner_image_mobile')"><icon class="fa fa-times"></icon> Remove</button>
																</span>
																<input type="text" class="form-control" name="banner_image_mobile" id="banner_image_mobile" required readonly> 
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default blue" onClick="openMediaModal('banner_image_mobile')"><icon class="fa fa-file"></icon> Choose
																	</button>
																</span>
															</div>
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