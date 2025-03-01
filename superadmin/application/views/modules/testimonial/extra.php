
<script type="text/javascript">

	//get State By Country
	$('#testimonial_country').on('change', function() {
		// Get selected values using jQuery
        var country = $(this).val();
		
		$.ajax({
			url: "<?=base_url('State/getState');?>",
			type: "post",
			data: {
				country: country
			},
			dataType: 'json',
			success: function (response) {
				// Add a blank option to the beginning of the response array
				response.unshift({ state_id: '', state_name: '' });

				// Empty and trigger change for the Select2 dropdown
				$('#testimonial_state').empty().trigger("change");

				// Initialize Select2 with the modified response data
				$("#testimonial_state").select2({
					data: response.map(function(item) {
						var data_set='<?=empty($list[0]['testimonial_state'])?"":$list[0]['testimonial_state'];?>';
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
	});

	
	
	

	//get City By State
	$('#testimonial_state').on('change', function() {
		// Get selected values using jQuery
        var state = $(this).val();
		
		$.ajax({
			url: "<?=base_url('City/getCity');?>",
			type: "post",
			data: {
				state: state
			},
			dataType: 'json',
			success: function (response) {
				response.unshift({ city_id: '', city_name: '' });
				$('#testimonial_city').empty().trigger("change");
				 $("#testimonial_city").select2({
					data: response.map(function(item) {
						var data_set='<?=empty($list[0]['testimonial_city'])?"":$list[0]['testimonial_city'];?>';
						var numbers = data_set.split(','); 
						var isPresent = numbers.includes(item.city_id); 
						if (isPresent && data_set!='') {
							var selected=true;
						} else {
							var selected=false;
						}
						return { id: item.city_id, text: item.city_name, selected: selected };
					})
				  });
				toastr.success('State list fetched!');
			},
			error: function (data) {
				console.log(data);
				return false;
			}
		});
	});

	
	
	

	//get Procedure & Disease By Speciality
	$('#testimonial_speciality').on('change', function() {
		// Get selected values using jQuery
        var speciality = $(this).val();
		
		$.ajax({
			url: "<?=base_url('Procedure/getProcedure');?>",
			type: "post",
			data: {
				speciality: speciality
			},
			dataType: 'json',
			success: function (response) {
				response.unshift({ procedure_id: '', procedure_title: '' });
				$('#testimonial_procedure').empty().trigger("change");
				 $("#testimonial_procedure").select2({
					data: response.map(function(item) {
						var data_set='<?=empty($list[0]['testimonial_procedure'])?"":$list[0]['testimonial_procedure'];?>';
						var numbers = data_set.split(','); 
						var isPresent = numbers.includes(item.procedure_id); 
						if (isPresent && data_set!='') {
							var selected=true;
						} else {
							var selected=false;
						}
						return { id: item.procedure_id, text: item.procedure_title, selected: selected };
					})
				  });
				toastr.success('Procedure list fetched!');
			},
			error: function (data) {
				console.log(data);
				return false;
			}
		});
		
		
		
		$.ajax({
			url: "<?=base_url('Disease/getDisease');?>",
			type: "post",
			data: {
				speciality: speciality
			},
			dataType: 'json',
			success: function (response) {
				response.unshift({ disease_id: '', disease_title: '' });
				$('#testimonial_disease').empty().trigger("change");
				 $("#testimonial_disease").select2({
					data: response.map(function(item) {
						var data_set='<?=empty($list[0]['testimonial_disease'])?"":$list[0]['testimonial_disease'];?>';
						var numbers = data_set.split(','); 
						var isPresent = numbers.includes(item.disease_id); 
						if (isPresent && data_set!='') {
							var selected=true;
						} else {
							var selected=false;
						}
						return { id: item.disease_id, text: item.disease_title, selected: selected };
					})
				  });
				toastr.success('Disease list fetched!');
			},
			error: function (data) {
				console.log(data);
				return false;
			}
		});
	});
</script>