
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PROFILE SIDEBAR -->
                                <?php $this->load->view('modules/'.$view_controller.'/sidebar'); ?>
                                <!-- END BEGIN PROFILE SIDEBAR -->
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- BEGIN PORTLET -->
                                            <div class="portlet light ">
                                                <div class="portlet-title">
                                                    <div class="caption caption-md">
                                                        <i class="icon-bar-chart theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Personal Info</span>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-scrollable table-scrollable-borderless">
                                                        <table class="table table-hover table-light">
                                                            <tr>
                                                                <td> Name </td>
                                                                <td> <?=$list[0]['admin_name'];?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Date of birth </td>
                                                                <td> <?=$list[0]['admin_dob'];?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Gender </td>
                                                                <td> 
																	<?php 
																	if($list[0]['admin_gender']==0) echo "Female";
																	 if($list[0]['admin_gender']==1) echo "Male";
																	 if($list[0]['admin_gender']==2) echo "Others";?> 
																</td>
                                                            </tr>
                                                            <tr>
                                                                <td> Occupations </td>
                                                                <td> <?=$list[0]['admin_occupation'];?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Interests </td>
                                                                <td> <?=$list[0]['admin_interest'];?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <?=$list[0]['admin_unique_id_type'];?> </td>
                                                                <td> <?=$list[0]['admin_unique_id_number'];?> </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PORTLET -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- BEGIN PORTLET -->
                                            <div class="portlet light ">
                                                <div class="portlet-title">
                                                    <div class="caption caption-md">
                                                        <i class="icon-bar-chart theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Contact Info</span>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-scrollable table-scrollable-borderless">
                                                        <table class="table table-hover table-light">
                                                            <tr>
                                                                <td> Email </td>
                                                                <td> <?=$list[0]['admin_email'];?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Contact Number </td>
                                                                <td> <?=$list[0]['admin_contact'];?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Website </td>
                                                                <td> <?=$list[0]['admin_website'];?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Address </td>
                                                                <td> <?=$list[0]['admin_address'];?> </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PORTLET -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- BEGIN PORTLET -->
                                            <div class="portlet light ">
                                                <div class="portlet-title">
                                                    <div class="caption caption-md">
                                                        <i class="icon-bar-chart theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Social Links</span>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-scrollable table-scrollable-borderless">
                                                        <table class="table table-hover table-light">
                                                            <tr>
                                                                <td> Fecebook </td>
                                                                <td> <?=$list[0]['admin_facebook'];?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Twitter </td>
                                                                <td> <?=$list[0]['admin_twitter'];?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Instagram </td>
                                                                <td> <?=$list[0]['admin_instagram'];?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> LinkedIN </td>
                                                                <td> <?=$list[0]['admin_linkedin'];?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> YOUTUBE </td>
                                                                <td> <?=$list[0]['admin_youtube'];?> </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PORTLET -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    