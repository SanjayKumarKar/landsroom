
<!--****************Get Country Slug Script*****************-->

<script type="text/javascript">
	//setup before functions
	var typingTimer;                //timer identifier
	var doneTypingInterval = 1000;  //time in ms (5 seconds)

	//on keyup, start the countdown
	function countrySlugCheck(){
		clearTimeout(typingTimer);
		if ($('#country_name').val()) {
			typingTimer = setTimeout(getSlug, doneTypingInterval);
		}
	}

	//user is "finished typing," do something
	function getSlug() 
	{
		var country_name = document.getElementById("country_name").value;
		var country_slug_prev = document.getElementById("country_slug_prev").value;
		var country_slug = country_name.toLowerCase().replace(/[^A-Z0-9]+/ig, "-").replace(/-$/, '').replace(/^-/, '');
			$.ajax({
				url: "<?=base_url('Country/checkCountrySlug');?>",
				type: "post",
				data: {
					country_slug: country_slug,
					country_slug_prev: country_slug_prev
				},
				dataType: 'json',
				success: function (response) {
					document.getElementById('country_slug').value = response['country_slug'];
					toastr.success('Country Slug generated!');
				},
				error: function (data) {
					console.log(data);
					return false;
				}
			});
	}
</script>


