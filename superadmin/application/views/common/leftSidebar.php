<div class="page-sidebar-wrapper">
					<!-- BEGIN SIDEBAR -->
					<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
					<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
					<div class="page-sidebar navbar-collapse collapse">
						<!-- BEGIN SIDEBAR MENU -->
						<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
						<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
						<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
						<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
						<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
						<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
						<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
							<li class="sidebar-search-wrapper">
								<form class="sidebar-search  ">
									<div class="input-group">
										<input type="text" class="form-control" id="search" placeholder="Search..." onKeyUp="searchMenu()">
										<span class="input-group-btn">
											<a href="javascript:void(0);" class="btn submit">
												<i class="icon-magnifier"></i>
											</a>
										</span>
									</div>
								</form>
							</li>
						</ul>
						<script>
						function searchMenu() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = document.querySelectorAll('#myMenu > li');
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0].getElementsByTagName("span")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
						</script>
						<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" id="myMenu">
							<li class="nav-item">
								<a href="<?=base_url('dashboard');?>" class="nav-link nav-toggle">
								<i class="icon-home" style='color:lawngreen'></i>
								<span class="title">Dashboard</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?=front_base_url();?>" class="nav-link nav-toggle" target="_blank">
								<i class="fa fa-globe" style='color:red'></i>
								<span class="title">Visit Main Site</span>
								</a>
							</li>
							
							<li class="heading" style="background: black;">
								<h3 class="uppercase">CMS</h3>
							</li>
							<li class="nav-item  ">
								<a href="<?=site_url('media');?>" class="nav-link nav-toggle">
								<i class="fa fa-file-image-o"></i>
								<span class="title">Manage Media</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-rss"></i>
								<span class="title">Manage Banner</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('banner/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('banner');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-file"></i>
								<span class="title">Manage Page</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('page/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('page');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-rss"></i>
								<span class="title">Manage Blog</span>
								<span class="arrow"></span>
								</a>

								<ul class="sub-menu">
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
										<i class="fa fa-tasks" style='color:cyan'></i>
										<span class="title">Category</span>
										<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="<?=site_url('blogCategory/add');?>" class="nav-link "> 
												<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
												</a>
											</li>
											<li class="nav-item">
												<a href="<?=site_url('blogCategory');?>" class="nav-link ">
												<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
										<i class="fa fa-user" style='color:cyan'></i>
										<span class="title">Author</span>
										<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="<?=site_url('author/add');?>" class="nav-link "> 
												<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
												</a>
											</li>
											<li class="nav-item">
												<a href="<?=site_url('author');?>" class="nav-link ">
												<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
										<i class="fa fa-tasks" style='color:cyan'></i>
										<span class="title">Post</span>
										<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="<?=site_url('blog/add');?>" class="nav-link "> 
												<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
												</a>
											</li>
											<li class="nav-item">
												<a href="<?=site_url('blog');?>" class="nav-link ">
												<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<!--<li class="heading" style="background: black;">
								<h3 class="uppercase">Support and Enquiry</h3>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">Support</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('support/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('support/import');?>" class="nav-link "> 
										<i class="fa fa-upload" style='color:lightgreen'></i> Import 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('support');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">Newsletter</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('newsletter/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('newsletter/import');?>" class="nav-link "> 
										<i class="fa fa-upload" style='color:lightgreen'></i> Import 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('newsletter');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">Enquiry Assistance</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('enquiryAssistance/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('enquiryAssistance/import');?>" class="nav-link "> 
										<i class="fa fa-upload" style='color:lightgreen'></i> Import 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('enquiryAssistance');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">Enquiry</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('enquiry/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('enquiry/import');?>" class="nav-link "> 
										<i class="fa fa-upload" style='color:lightgreen'></i> Import 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('enquiry');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">Doctor Enquiry</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('enquiryDoctor/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('enquiryDoctor/import');?>" class="nav-link "> 
										<i class="fa fa-upload" style='color:lightgreen'></i> Import 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('enquiryDoctor');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">Hospital Enquiry</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('enquiryHospital/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('enquiryHospital/import');?>" class="nav-link "> 
										<i class="fa fa-upload" style='color:lightgreen'></i> Import 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('enquiryHospital');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li> -->
							
							<li class="heading" style="background: black;">
								<h3 class="uppercase">Others</h3>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">Manage User</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('user/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('user');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">Country</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('country/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('country/import');?>" class="nav-link "> 
										<i class="fa fa-upload" style='color:lightgreen'></i> Import 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('country');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">State</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('state/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('state/import');?>" class="nav-link "> 
										<i class="fa fa-upload" style='color:lightgreen'></i> Import 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('state');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">City</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('city/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('city/import');?>" class="nav-link "> 
										<i class="fa fa-upload" style='color:lightgreen'></i> Import 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('city');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>
							
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">Patient Testimonial</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('testimonial/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('testimonial/import');?>" class="nav-link "> 
										<i class="fa fa-upload" style='color:lightgreen'></i> Import 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('testimonial');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li>
							<!-- <li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa fa-support"></i>
								<span class="title">FAQ</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=site_url('faq/add');?>" class="nav-link "> 
										<i class="fa fa-plus-circle" style='color:orange'></i> Add New 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('faq/import');?>" class="nav-link "> 
										<i class="fa fa-upload" style='color:lightgreen'></i> Import 
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=site_url('faq');?>" class="nav-link ">
										<i class="fa fa-list-alt" style='color:lightskyblue'></i> List 
										</a>
									</li>
								</ul>
							</li> -->
						</ul>
						<!-- END SIDEBAR MENU -->
						<!-- END SIDEBAR MENU -->
					</div>
					<!-- END SIDEBAR -->
				</div>