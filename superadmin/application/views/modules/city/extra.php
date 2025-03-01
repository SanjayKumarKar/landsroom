
<!--****************Get City Slug Script*****************-->

<script type="text/javascript">
	//setup before functions
	var typingTimer;                //timer identifier
	var doneTypingInterval = 1000;  //time in ms (5 seconds)

	//on keyup, start the countdown
	function citySlugCheck(){
		clearTimeout(typingTimer);
		if ($('#city_name').val()) {
			typingTimer = setTimeout(getSlug, doneTypingInterval);
		}
	}

	//user is "finished typing," do something
	function getSlug() 
	{
		var city_name = document.getElementById("city_name").value;
		var city_slug_prev = document.getElementById("city_slug_prev").value;
		var city_slug = city_name.toLowerCase().replace(/[^A-Z0-9]+/ig, "-").replace(/-$/, '').replace(/^-/, '');
			$.ajax({
				url: "<?=base_url('City/checkCitySlug');?>",
				type: "post",
				data: {
					city_slug: city_slug,
					city_slug_prev: city_slug_prev
				},
				dataType: 'json',
				success: function (response) {
					document.getElementById('city_slug').value = response['city_slug'];
					toastr.success('City Slug generated!');
				},
				error: function (data) {
					console.log(data);
					return false;
				}
			});
	}
	
	
	

	//get State By Country
	function getState(country) 
	{
		$.ajax({
			url: "<?=base_url('State/getState');?>",
			type: "post",
			data: {
				country: country
			},
			dataType: 'json',
			success: function (response) {
				$('#city_state_id').empty().trigger("change");
				 $("#city_state_id").select2({
					data: response.map(function(item) {
						var data_set='<?=empty($list[0]['city_state_id'])?"":$list[0]['city_state_id'];?>';
						var numbers = data_set.split(','); 
						var isPresent = numbers.includes(item.state_id); 
						if (isPresent && data_set!='') {
							var selected=true;
						} else {
							var selected=false;
						}
						return { id: item.state_id, text: item.state_name, selected: selected };
					})
				  });
				toastr.success('State list fetched!');
			},
			error: function (data) {
				console.log(data);
				return false;
			}
		});
	}
</script>


