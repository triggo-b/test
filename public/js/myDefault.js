$(document).ready( function() {
	
	$('#buttona').click(function() {
		cityVal = $('#city').val();
		
		$.ajax({
			url: '/weatherinfo',
			type: 'get',
			dataType: 'json',
			data: {'city': cityVal},
			success: function(data) {
				$('#wInfo').append(data);
			}
		});
		
	});
	
});