
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
															<input type="text" class="form-control" name="country_name" id="country_name" onKeyUp="countrySlugCheck()" value="<?=set_value('country_name');?>" required> 
														</div>
														<div class="form-group">
															<label>Country Slug</label>
															<input type="text" class="form-control" name="country_slug" id="country_slug" value="<?=set_value('country_slug');?>" required>
															<input type="hidden" name="country_slug_prev" id="country_slug_prev" value=""> 
														</div>
														<div class="form-group">
															<label>Short Name</label>
															<input type="text" class="form-control" name="country_short_name" id="country_short_name" value=""> 
														</div>
														<div class="form-group">
															<label>Master Order</label>
															<input type="text" class="form-control" name="country_order_master" id="country_order_master" value="0" required> 
														</div>
														<div class="form-group">
															<label>Feature Order</label>
															<input type="text" class="form-control" name="country_order_featured" id="country_order_featured" value="0" required> 
														</div>
													</div>
													<div class="col-md-6 ">
														<div class="form-group">
															<label>Phone Code</label>
															<input type="text" class="form-control" name="country_phone_code" id="country_phone_code" value=""> 
														</div>
														<div class="form-group">
															<label>Show in Featured List</label>
															<div class="md-radio-inline">
																<div class="md-radio has-error">
																	<input type="radio" id="country_show_in_featured0" name="country_show_in_featured" class="md-radiobtn" value="0" checked>
																	<label for="country_show_in_featured0">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> No </label>
																</div>
																<div class="md-radio">
																	<input type="radio" id="country_show_in_featured1" name="country_show_in_featured" class="md-radiobtn" value="1">
																	<label for="country_show_in_featured1">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> Yes </label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label>Status</label>
															<div class="md-radio-inline">
																<div class="md-radio has-error">
																	<input type="radio" id="country_status0" name="country_status" class="md-radiobtn" value="0" checked>
																	<label for="country_status0">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> Inactive </label>
																</div>
																<div class="md-radio">
																	<input type="radio" id="country_status1" name="country_status" class="md-radiobtn" value="1">
																	<label for="country_status1">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> Active </label>
																</div>
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