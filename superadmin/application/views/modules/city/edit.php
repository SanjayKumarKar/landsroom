
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
															<input type="text" class="form-control" name="city_name" id="city_name" value="<?=$list[0]['city_name']?>" required> 
														</div>
														<div class="form-group">
															<label>City Slug</label>
															<input type="text" class="form-control" name="city_slug" id="city_slug"  value="<?=$list[0]['city_slug']?>" required> 
															<input type="hidden" name="city_slug_prev" id="city_slug_prev" value="<?=$list[0]['city_slug']?>"> 
														</div>
														<div class="form-group">
															<label>Master Order</label>
															<input type="text" class="form-control" name="city_order_master" id="city_order_master" value="<?=$list[0]['city_order_master']?>" required> 
														</div>
														<div class="form-group">
															<label>Feature Order</label>
															<input type="text" class="form-control" name="city_order_featured" id="city_order_featured" value="<?=$list[0]['city_order_featured']?>" required> 
														</div>
														<div class="form-group">
															<label>Status</label>
															<div class="md-radio-inline">
																<div class="md-radio has-error">
																	<input type="radio" id="city_status0" name="city_status" class="md-radiobtn" value="0"
																	<?php if($list[0]['city_status']==0) echo "checked"; ?>>
																	<label for="city_status0">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> Inactive </label>
																</div>
																<div class="md-radio">
																	<input type="radio" id="city_status1" name="city_status" class="md-radiobtn" value="1"
																	<?php if($list[0]['city_status']==1) echo "checked"; ?>>
																	<label for="city_status1">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> Active </label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 ">
														<div class="form-group">
															<label>Select Country</label>
															<select id="city_country_id" name="city_country_id" class="form-control select2" onChange="getState(this.value)" required>
																<option></option>
																<?php 
																foreach($COUNTRY as $DATA) { ?>
																<option value="<?=$DATA['country_id']?>" <?=$DATA['country_id']==$list[0]['city_country_id']?"selected":"";?>><?=$DATA['country_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Select State</label>
															<select id="city_state_id" name="city_state_id" class="form-control select2" required>
																<option></option>
																<?php 
																foreach($STATE as $DATA) { ?>
																<option value="<?=$DATA['state_id']?>" <?=$DATA['state_id']==$list[0]['city_state_id']?"selected":"";?>><?=$DATA['state_name'];?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Show in Featured List</label>
															<div class="md-radio-inline">
																<div class="md-radio has-error">
																	<input type="radio" id="city_show_in_featured0" name="city_show_in_featured" class="md-radiobtn" value="0"
																	<?php if($list[0]['city_show_in_featured']==0) echo "checked"; ?>>
																	<label for="city_show_in_featured0">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> No </label>
																</div>
																<div class="md-radio">
																	<input type="radio" id="city_show_in_featured1" name="city_show_in_featured" class="md-radiobtn" value="1"
																	<?php if($list[0]['city_show_in_featured']==1) echo "checked"; ?>>
																	<label for="city_show_in_featured1">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span> Yes </label>
																</div>
															</div>
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