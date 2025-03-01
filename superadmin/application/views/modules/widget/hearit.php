

                        <!-- BEGIN Content Row-->

						<div class="row">

                            <div class="col-md-12">

                                <!-- BEGIN EXAMPLE TABLE PORTLET-->

                                <div class="portlet light bordered">

                                    <div class="portlet-title">

                                        <div class="caption font-dark">

                                            <i class="icon-settings font-dark"></i>

                                            <span class="caption-subject bold uppercase"> 

												Hear it List

											</span>

                                        </div>

                                    </div>

                                    <div class="portlet-body">

                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">

                                            <thead>

                                                <tr>

                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
													
                                                    <th> Order </th>

                                                    <th> Title </th>

                                                    <th> Actions </th>

                                                </tr>

                                            </thead>

                                            <tfoot>

                                                <tr>

                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th> Order </th>

                                                    <th> Title </th>

                                                    <th> Actions </th>

                                                </tr>

                                            </tfoot>

                                            <tbody>

												<?php $i=0; foreach($list as $FETCH) { ?>
												<?php $DATA=json_decode($FETCH['widget_details'],true);?>
                                                <tr class="odd gradeX">


												
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                           <input type="checkbox" class="checkboxes operation_checkbox" value="<?=$FETCH[$default_id_field]?>" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td> <?=$FETCH['widget_order'];?> </td>

                                                    <td> <?=$DATA['title']?> </td>

                                                    <td>

                                                        <div class="btn-group">

                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions

                                                                <i class="fa fa-angle-down"></i>

                                                            </button>

                                                            <ul class="dropdown-menu pull-right" role="menu">

                                                                <li>

                                                                    <a href="<?=base_url($view_controller);?>/edit/hearitEdit/<?=$FETCH[$default_id_field]?>">

                                                                        <i class="fa fa-pencil-square-o" style="color:darkorange"></i> Edit </a>

                                                                </li>

																<?php if($FETCH['IsDel']==1) { ?>

                                                                <li>

                                                                    <a href="javascript:;" id="<?=$FETCH[$default_id_field]?>" onClick="restore_from_trash(this.id,'<?=base_url($view_controller)?>/restoreFromTrash/<?=$FETCH[$default_id_field]?>')">

																		

                                                                        <i class="fa fa-refresh" style="color:darkgreen"></i> Restore 

																	</a>

                                                                </li>

																<?php } else { ?>

                                                                <li>

                                                                    <a href="javascript:;" id="<?=$FETCH[$default_id_field]?>" onClick="move_to_trash(this.id,'<?=base_url($view_controller);?>/moveToTrash/<?=$FETCH[$default_id_field]?>')">

																		

                                                                        <i class="fa fa-trash" style="color:darkgreen"></i> 

																		Move to Trash 

																	</a>

                                                                </li>

																<?php } ?>

                                                                <li>

                                                                    <a href="javascript:;" id="<?=$FETCH[$default_id_field]?>" onClick="delete_forever(this.id,'<?=base_url($view_controller);?>/deleteForever/<?=$FETCH[$default_id_field]?>')">

                                                                        <i class="fa fa-remove" style="color:darkred"></i> 

																		Delete Forever

																	</a>

                                                                </li>

                                                            </ul>

                                                        </div>

                                                    </td>

                                                </tr>

												<?php } ?>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                                <!-- END EXAMPLE TABLE PORTLET-->

                            </div>

                        </div>

                        <div class="clearfix"></div>

                        <!-- END Content Row-->