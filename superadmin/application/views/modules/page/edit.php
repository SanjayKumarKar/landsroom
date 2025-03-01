
						<!--*****************************Scan View Directory****************-->
						<?php
						//Get File Name From Directory
						$dir    = '../website/application/views/modules/template/';
						$FILES= scandir($dir);
						//Filter Only PHP Files
						function filter($FILES)
						{
							if(strchr($FILES,".php")==true)       
								return TRUE;
							else
							   return FALSE; 
						}
						$FILES=array_values(array_filter($FILES,"filter"));
						$i=0;
						foreach($FILES as $FILE)
						{
							if (strpos(strtolower($FILE), '_template') !== false) 
							{
								$TEMPLATE_FILE[$i]=rtrim($FILE,".php");
								$TEMPLATE_NAME[$i]=ucwords(str_replace('_',' ',rtrim($FILE,".php")));
								$i++;
							}
						}
						?>
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
															<input type="text" class="form-control" name="page_title" id="page_title" value="<?=$list[0]['page_title']?>" required> 
														</div>
														<div class="form-group">
															<label>Page Slug</label>
															<input type="text" class="form-control" name="page_slug" id="page_slug"  value="<?=$list[0]['page_slug']?>" required> 
															<input type="hidden" name="page_slug_prev" id="page_slug_prev" value="<?=$list[0]['page_slug']?>"> 
														</div>
														<div class="form-group">
															<label>Page Template</label>
															<select id="page_template" name="page_template" class="form-control select2" onChange="getTemplate(this.value)">
																	<option value='single'>**Default Template**</option><?php 
																	if(!empty($TEMPLATE_FILE)){
																	for($i=0;$i<count($TEMPLATE_FILE);$i++) { ?>
																	<option value="<?=$TEMPLATE_FILE[$i];?>" <?php if($TEMPLATE_FILE[$i]==$list[0]['page_template']) echo "selected"; ?>><?=$TEMPLATE_NAME[$i];?></option>
																	<?php } } ?>
															</select>
														</div>
														<div class="form-group">
															<label>Featured Image</label>
															<div class="input-group">
																<span class="input-group-btn">
																	<button class="btn red" type="button" onClick="mediaRemove('page_image')"><icon class="fa fa-times"></icon> Remove</button>
																</span>
																<input type="text" class="form-control" name="page_image" id="page_image" value="<?=$list[0]['page_image']?>"  pattern="([\w.%+-\/]+.png)|([\w.%+-\/]+.jpg)|([\w.%+-\/]+.jpeg)|([\w.%+-\/]+.gif)" readonly> 
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default green" onClick="openMediaModal('page_image')"><icon class="fa fa-photo"></icon> Choose
																	</button>
																</span>
															</div>
														</div>
													</div>
													<div class="col-md-6 ">
														<div class="form-group">
															<label>Parameter</label>
															<input type="text" class="form-control" name="page_parameter" id="page_parameter" value="<?=$list[0]['page_parameter']?>"> 
														</div>
														<div class="form-group">
															<label>Meta Title</label>
															<input type="text" class="form-control" name="page_meta_title" id="page_meta_title" value="<?=$list[0]['page_meta_title']?>"> 
														</div>
														<div class="form-group">
															<label>Meta Description</label>
															<textarea class="form-control" name="page_meta_description" rows="3"><?=$list[0]['page_meta_description']?></textarea>
														</div>
														<div class="form-group">
															<label>Meta Keyword</label>
															<input type="text" name="page_meta_keyword" placeholder="Keyword" class= "form-control" data-role="tagsinput" value="<?=$list[0]['page_meta_keyword']?>"/>  
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 ">
														<div class="form-group">
															<label>Details</label>
															<textarea class="form-control" id="editor1" name="page_details" rows="20"><?=$list[0]['page_details']?></textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 ">
														<div class="form-group">
															<label>OG Tag</label>
															<textarea class="form-control" name="page_og_tag" rows="5"><?=$list[0]['page_og_tag']?></textarea>
														</div>
														<div class="form-group">
															<label>Schema</label>
															<textarea class="form-control" name="page_schema" rows="5"><?=$list[0]['page_schema']?></textarea>
														</div>
													</div>
												</div>
												<span id="add_template">
													<?php 
	if (is_file(APPPATH.'views/modules/'.$view_controller.'/template/'.$list[0]['page_template']. EXT))
	$this->load->view('modules/'.$view_controller.'/template/'.$list[0]['page_template']);
													?>
												</span>
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