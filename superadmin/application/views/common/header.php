
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="<?=base_url('dashboard');?>">
                            <img src="<?=file_upload_base_url($SITE[0]['site_logo']);?>" alt="<?=$SITE[0]['site_name'];?> Logo" class="logo-default"/> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            
							
							<!--
							<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
								<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<i class="icon-bell"></i>
								<span class="badge badge-default"> 7 </span>
								</a>
								<ul class="dropdown-menu">
									<li class="external">
										<h3>
											<span class="bold">12 pending</span> notifications
										</h3>
										<a href="page_user_profile_1.html">view all</a>
									</li>
									<li>
										<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
											<li>
												<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
												<span class="label label-sm label-icon label-success">
												<i class="fa fa-plus"></i>
												</span> New user registered. </span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
												<span class="label label-sm label-icon label-danger">
												<i class="fa fa-bolt"></i>
												</span> Server #12 overloaded. </span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="time">10 mins</span>
												<span class="details">
												<span class="label label-sm label-icon label-warning">
												<i class="fa fa-bell-o"></i>
												</span> Server #2 not responding. </span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="time">14 hrs</span>
												<span class="details">
												<span class="label label-sm label-icon label-info">
												<i class="fa fa-bullhorn"></i>
												</span> Application error. </span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="time">2 days</span>
												<span class="details">
												<span class="label label-sm label-icon label-danger">
												<i class="fa fa-bolt"></i>
												</span> Database overloaded 68%. </span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="time">3 days</span>
												<span class="details">
												<span class="label label-sm label-icon label-danger">
												<i class="fa fa-bolt"></i>
												</span> A user IP blocked. </span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="time">4 days</span>
												<span class="details">
												<span class="label label-sm label-icon label-warning">
												<i class="fa fa-bell-o"></i>
												</span> Storage Server #4 not responding dfdfdfd. </span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="time">5 days</span>
												<span class="details">
												<span class="label label-sm label-icon label-info">
												<i class="fa fa-bullhorn"></i>
												</span> System Error. </span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="time">9 days</span>
												<span class="details">
												<span class="label label-sm label-icon label-danger">
												<i class="fa fa-bolt"></i>
												</span> Storage server failed. </span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							-->
							
							
							
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN Page Back -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-hover="dropdown" data-close-others="true" onClick="window.history.back();" title="Back To Previous Page">
                                    <i class="fa fa-arrow-left" style="color: black"></i>
                                </a>
                                <ul class="dropdown-menu extended tasks">
                                </ul>
                            </li>
                            <!-- END Page Back -->
                            <!-- BEGIN Page Reload -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-hover="dropdown" data-close-others="true" onClick="location.reload();" title="Reload Page">
                                    <i class="icon-refresh" style="color: black"></i>
                                </a>
                                <ul class="dropdown-menu extended tasks">
                                </ul>
                            </li>
                            <!-- END Page Reload -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte --> 
                            <li class="dropdown dropdown-user" style="background-color: #363c44;">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="<?=file_upload_base_url($this->session->userdata('admin_session_image'));?>" />
                                    <span class="username username-hide-on-mobile"> <?=$this->session->userdata('admin_session_name');?> </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="<?=base_url('myProfile/details');?>">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('site/details');?>">
                                            <i class="icon-settings"></i> Settings </a>
                                    </li>
                                    <!--<li>
                                        <a href="app_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app_todo.html">
                                            <i class="icon-rocket"></i> My Tasks
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li>-->
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="<?=base_url('authenticate/lockProfileLockedSubmitted');?>">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
										<a href="<?=base_url('authenticate/logout');?>"><i class="icon-key"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>