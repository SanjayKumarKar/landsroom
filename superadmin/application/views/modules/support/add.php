
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
													<div class="col-md-6">
														<div class="form-group">
															<label>Name</label>
															<input type="text" class="form-control" name="support_name" id="support_name" value="" required> 
														</div>
														<div class="form-group">
															<label>Contact Number</label>
															<input type="text" class="form-control" name="support_contact" id="support_contact" value="" required> 
														</div>
														<div class="form-group">
															<label>Email</label>
															<input type="email" class="form-control" name="support_email" id="support_email" value=""> 
														</div>
														<div class="form-group">
															<label>Subject</label>
															<input type="text" class="form-control" name="support_subject" id="support_subject" value=""> 
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Source URL</label>
															<input type="text" class="form-control" name="support_source" id="support_source" value=""> 
														</div>
														<div class="form-group">
															<label>Message</label>
															<textarea class="form-control" name="support_message" id="support_message" rows="5"></textarea>
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