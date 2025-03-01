
<!--****************Get Blog Slug Script*****************-->

<script type="text/javascript">
	//setup before functions
	var typingTimer;                //timer identifier
	var doneTypingInterval = 1000;  //time in ms (5 seconds)

	//on keyup, start the countdown
	function blogSlugCheck(){
		clearTimeout(typingTimer);
		if ($('#blog_title').val()) {
			typingTimer = setTimeout(getSlug, doneTypingInterval);
		}
	}

	//user is "finished typing," do something
	function getSlug() 
	{
		var blog_title = document.getElementById("blog_title").value;
		var blog_slug_prev = document.getElementById("blog_slug_prev").value;
		var blog_slug = blog_title.toLowerCase().replace(/[^A-Z0-9]+/ig, "-").replace(/-$/, '').replace(/^-/, '');
			$.ajax({
				url: "<?=base_url('Blog/checkBlogSlug');?>",
				type: "post",
				data: {
					blog_slug: blog_slug,
					blog_slug_prev: blog_slug_prev
				},
				dataType: 'json',
				success: function (response) {
					document.getElementById('blog_slug').value = response['blog_slug'];
					toastr.success('Blog Slug generated!');
				},
				error: function (data) {
					console.log(data);
					return false;
				}
			});
	}
</script>





<!--===========================Add New Blog Category=========================-->
<div id="blog_category" class="modal fade" tabindex="-1" data-width="760">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h4 class="modal-title">Add New Blog Category</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<h4>Title</h4>
					<p>
						<input type="text" class="form-control" name="blog_category_title" id="blog_category_title" value="" required>
						<p id="warningValid" style="color:red"></p>
					</p>
				</div>
				<div class="col-md-12">
					<h4>Details</h4>
					<p>
						<textarea class="form-control" name="blog_category_details" id="blog_category_details" rows="7"></textarea>
					</p>
				</div>
				
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
			<button type="submit" class="btn green" name="submit" value="submit" onClick="blog_categoryForm()"><i class="fa fa-check"></i> Save</button>
		</div>
</div>

<!--****************Form Submission Script*****************-->

<script type="text/javascript">
  function blog_categoryForm()
  {
	var blog_category_title=document.getElementById("blog_category_title").value;
	var blog_category_details=document.getElementById("blog_category_details").value;
	  
	if(blog_category_title!='')
	{
		document.getElementById("warningValid").innerHTML = "";
		
		$.ajax({
			url:"<?=base_url('blogCategory/addSubmitted/AJAX');?>",
			type:"post",
			data: {blog_category_title: blog_category_title,blog_category_details: blog_category_details},
			dataType: 'json',
			success: function(response) {
					$('#blog_blog_category_id').append('<option value="'+response['id']+'" selected>'+blog_category_title+'</option>');
					$('#blog_category').modal('hide');
					toastr.success('Blog Category Added Successfully !');
				},
			error: function() {
				return false;
				}
		});
	}
	else
	{
		document.getElementById("warningValid").innerHTML = "Title Can't be blank.";
	}
 }
    
</script>


