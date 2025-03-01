
<!--****************Get Page Slug Script*****************-->

<script type="text/javascript">
	//setup before functions
	var typingTimer;                //timer identifier
	var doneTypingInterval = 1000;  //time in ms (5 seconds)

	//on keyup, start the countdown
	function pageSlugCheck(){
		clearTimeout(typingTimer);
		if ($('#page_title').val()) {
			typingTimer = setTimeout(getSlug, doneTypingInterval);
		}
	}

	//user is "finished typing," do something
	function getSlug() 
	{
		var page_title = document.getElementById("page_title").value;
		var page_slug_prev = document.getElementById("page_slug_prev").value;
		var page_slug = page_title.toLowerCase().replace(/[^A-Z0-9]+/ig, "-").replace(/-$/, '').replace(/^-/, '');
			$.ajax({
				url: "<?=base_url('Page/checkPageSlug');?>",
				type: "post",
				data: {
					page_slug: page_slug,
					page_slug_prev: page_slug_prev
				},
				dataType: 'json',
				success: function (response) {
					document.getElementById('page_slug').value = response['page_slug'];
					toastr.success('Page Slug generated!');
				},
				error: function (data) {
					console.log(data);
					return false;
				}
			});
	}
</script>





<!--****************Get Page Template Script*****************-->
<script type="text/javascript">
	function getTemplate(template) 
	{
		$.ajax({
			url: "<?=base_url('Page/getTemplate');?>",
			type: "post",
			data: {
				template: template
			},
			dataType: 'json',
			success: function (response) {
				$('#add_template').html(response['template_view']);
				initiateEditor();
				$('.select2_copy').select2();
				toastr.success('Template Fetched!');
			},
			error: function (data) {
				console.log(data);
				return false;
			}
		});
	}
</script>




<!--======================================Set Parameter Field================================-->
<script type="text/javascript">
	function setParameter(data){
		$('#page_parameter').val(data);
	}
</script>




<!--======================================Testimonial Repeat Field================================-->
<script type="text/javascript">
	function addMoreTestimonial(){
		var fieldHTML = '<tr class="odd gradeX" draggable="true" ondragstart="start()" ondragover="dragover()"><td><input type="text" class="form-control" name="page_data[testimonial_data][name][]" placeholder="Name"></td><td><input type="text" class="form-control" name="page_data[testimonial_data][designation][]" placeholder="Designation"></td><td><input type="text" class="form-control" name="page_data[testimonial_data][comment][]" placeholder="Comment"></td><td><button type="button" class="btn red" onclick="removeThisTestimonial(this)"><i class="fa fa-times"></i></button></td></tr>';
		
		$("#testimonial_table").append(fieldHTML);
		toastr.success('One more row added.');
	}
	
	function removeThisTestimonial(element)
	{
		$(element).parent().parent().remove();
		toastr.error('One row removed.');
	}
</script>




<!--======================================Testimonial With Image Repeat Field================================-->
<script type="text/javascript">
	function addMoreTestimonialWithImage(){
		var random_id=Math.floor(Math.random() * 9999999999); 
		
		var fieldHTML = '<tr class="odd gradeX" draggable="true" ondragstart="start()" ondragover="dragover()"><td><input type="text" class="form-control" name="page_data[testimonial_data][name][]" placeholder="Name"></td><td><div class="input-group"><span class="input-group-btn"><button class="btn red" type="button" onclick=\'mediaRemove("field_id")\'><icon class="fa fa-times"></icon>&nbsp;Remove</button></span><input type="text" class="form-control" name="page_data[testimonial_data][image][]" id="field_id" readonly="readonly"><span class="input-group-btn"><button type="button" class="btn btn-default green" onclick=\'openMediaModal("field_id")\'><icon class="fa fa-photo"></icon>&nbsp;Choose</button></span></div></td><td><input type="text" class="form-control" name="page_data[testimonial_data][comment][]" placeholder="Comment"></td><td><button type="button" class="btn red" onclick="removeThisTestimonial(this)"><i class="fa fa-times"></i></button></td></tr>';
		
		var fieldHTML = fieldHTML.replace(/field_id/g, random_id);
		$("#testimonial_table").append(fieldHTML);
		toastr.success('One more row added.');
	}
	
</script>






<!--======================================Gallery Image Repeat Field================================-->
<script type="text/javascript">
	function addMoreGalleryImage(){
		var random_id=Math.floor(Math.random() * 9999999999); 
		var fieldHTML = '<tr class="odd gradeX" draggable="true" ondragstart="start()" ondragover="dragover()"><td><input type="text" class="form-control" name="page_data[gallery_data][title][]" placeholder="Name"></td><td><div class="input-group"><span class="input-group-btn"><button class="btn red" type="button" onclick=\'mediaRemove("field_id")\'><icon class="fa fa-times"></icon>&nbsp;Remove</button></span><input type="text" class="form-control" name="page_data[gallery_data][image][]" id="field_id" readonly="readonly"><span class="input-group-btn"><button type="button" class="btn btn-default green" onclick=\'openMediaModal("field_id")\'><icon class="fa fa-photo"></icon>&nbsp;Choose</button></span></div></td><td><button type="button" class="btn red" onclick="removeThisGalleryImage(this)"><i class="fa fa-times"></i></button></td></tr>';
		
		
		var fieldHTML = fieldHTML.replace(/field_id/g, random_id);
		$("#gallery_image_table").append(fieldHTML);
		toastr.success('One more row added.');
		
		
	}
	
	function removeThisGalleryImage(element)
	{
		$(element).parent().parent().remove();
		toastr.error('One row removed.');
	}
</script>




<!--======================================FAQ Repeat Field================================-->
<script type="text/javascript">
	function addMoreFAQ(){
		var random_id="faq"+Math.floor(Math.random() * 9999999999); 
		var fieldHTML = '<tr class="odd gradeX" draggable="true" ondragstart="start()" ondragover="dragover()"><td><input type="text" class="form-control" name="page_data[faq_data][question][]" placeholder="Question"></td><td><textarea name="page_data[faq_data][answer][]" placeholder="Answer" id="field_id"></textarea></td><td><button type="button" class="btn red" onclick="removeThisFAQ(this)"><i class="fa fa-times"></i></button></td></tr>';
		
		var fieldHTML = fieldHTML.replace(/field_id/g, random_id);
		$("#faq_table").append(fieldHTML);

		toastr.success('One more row added.');

		CKEDITOR.replace(random_id, {
			allowedContent:true,
			//startupMode : 'source',
			filebrowserBrowseUrl:'<?=base_url();?>/media/browser'
		});
	}
	
	function removeThisFAQ(element)
	{
		$(element).parent().parent().remove();
		toastr.error('One row removed.');
	}
</script>




//Drag Rows
<script type="text/javascript">
	var row;

	function start() {
		row = event.target;
	}

	function dragover() {
		var e = event;
		e.preventDefault();

		let children = Array.from( e.target.parentNode.parentNode.children );
		if ( children.indexOf( e.target.parentNode ) > children.indexOf( row ) )
			e.target.parentNode.after( row );
		else
			e.target.parentNode.before( row );
	}
</script>



