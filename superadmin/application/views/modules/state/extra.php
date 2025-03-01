
<!--****************Get State Slug Script*****************-->

<script type="text/javascript">
	//setup before functions
	var typingTimer;                //timer identifier
	var doneTypingInterval = 1000;  //time in ms (5 seconds)

	//on keyup, start the countdown
	function stateSlugCheck(){
		clearTimeout(typingTimer);
		if ($('#state_name').val()) {
			typingTimer = setTimeout(getSlug, doneTypingInterval);
		}
	}

	//user is "finished typing," do something
	function getSlug() 
	{
		var state_name = document.getElementById("state_name").value;
		var state_slug_prev = document.getElementById("state_slug_prev").value;
		var state_slug = state_name.toLowerCase().replace(/[^A-Z0-9]+/ig, "-").replace(/-$/, '').replace(/^-/, '');
			$.ajax({
				url: "<?=base_url('State/checkStateSlug');?>",
				type: "post",
				data: {
					state_slug: state_slug,
					state_slug_prev: state_slug_prev
				},
				dataType: 'json',
				success: function (response) {
					document.getElementById('state_slug').value = response['state_slug'];
					toastr.success('State Slug generated!');
				},
				error: function (data) {
					console.log(data);
					return false;
				}
			});
	}
</script>


