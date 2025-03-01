

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
											<input type="hidden" name="widget_area" value="hearit">
											<div class="form-body">

												<h3 class="form-section">Hear it Info</h3>

												<div class="row">

													<div class="col-md-6">

														<div class="form-group">

															<label>Title</label>

															<input type="text" class="form-control" name="widget_details[title]" > 

														</div>

														<div class="form-group">

															<label>Sub Title</label>

															<input type="text" class="form-control" name="widget_details[sub_title]" > 

														</div>
														
														<div class="form-group">
															<label>Featured Image</label>
															<div class="input-group">
																<span class="input-group-btn">
																	<button class="btn red" type="button" onClick="mediaRemove('featured_image')"><icon class="fa fa-times"></icon> Remove</button>
																</span>
																<input type="text" class="form-control" name="widget_details[featured_image]" id="featured_image" value=""  pattern="([\w.%+-\/]+.png)|([\w.%+-\/]+.jpg)|([\w.%+-\/]+.jpeg)|([\w.%+-\/]+.gif)" readonly> 
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default green" onClick="openMediaModal('featured_image')"><icon class="fa fa-photo"></icon> Choose
																	</button>
																</span>
															</div>
														</div>

													</div>

													<div class="col-md-6">

														<div class="form-group">

															<label>Video URL</label>

															<input type="text" class="form-control" name="widget_details[video_url]" value=""> 

														</div>

														<div class="form-group">

															<label>Order</label>

															<input type="number" class="form-control" name="widget_order" id="widget_order" min="1" > 

														</div>
														
														<div class="form-group">

															<label>Details</label>

															<textarea class="form-control" name="widget_details[details]" ></textarea>

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