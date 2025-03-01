
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
													<div class="col-md-6">
														<div class="form-group">
															<label>Old URL</label>
															<input type="text" class="form-control" name="redirection_old_url" id="redirection_old_url" value="<?=urldecode($list[0]['redirection_old_url'])?>" required> 
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>New URL</label>
															<input type="text" class="form-control" name="redirection_new_url" id="redirection_new_url" value="<?=urldecode($list[0]['redirection_new_url'])?>" required> 
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