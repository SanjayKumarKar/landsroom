
                        <!-- BEGIN Content Row-->
						<div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase"> 
												<?=$title;?> 
												<?php if($this->router->fetch_method()=='trash') echo "Trash"?> 
												Table
											</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_server_side" data-url="<?=base_url($view_controller);?>" data-mode="<?=$MODE?>" data-set=''>
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_server_side .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th> Date & Time </th>
                                                    <th> Name </th>
                                                    <th> Contact Number </th>
                                                    <th> Email </th>
                                                    <th> Subject </th>
                                                    <th> Source </th>
                                                    <th> Actions </th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_server_side .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th> Date & Time </th>
                                                    <th> Name </th>
                                                    <th> Contact Number </th>
                                                    <th> Email </th>
                                                    <th> Subject </th>
                                                    <th> Source </th>
                                                    <th> Actions </th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- END Content Row-->