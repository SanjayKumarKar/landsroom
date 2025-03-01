
                        <!-- BEGIN Content Row-->
						<div class="row">
							<div class="col-lg-12 col-xs-12 col-sm-12">
								<div class="portlet box red">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-plus-circle"></i>Details View <?=$title?>
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse"> </a>
										</div>
									</div>
									

									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form class="form-horizontal" role="form">
											<div class="form-body">
												<h3 class="form-section"><?=$title;?> Info</h3>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Title:</label>
															<div class="col-md-9">
																<p class="form-control-static"> <?=$list[0]['blog_category_title']?> </p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Details:</label>
															<div class="col-md-9">
																<p class="form-control-static"> <?=$list[0]['blog_category_details']?> </p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
											</div>
											<div class="form-actions right">
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="button" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
																<a href="<?=base_url($view_controller)?>/edit/<?=$list[0][$default_id_field]?>" class="btn green">
																<i class="fa fa-pencil"></i> Edit</a>
															</div>
														</div>
													</div>
													<div class="col-md-6"> </div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>


								</div>
							</div>
						</div>
                        <div class="clearfix"></div>
                        <!-- END Content Row-->