$(document).ready( function() {
	form = $('#myForm');
	
	form.submit(function(e) {
		e.preventDefault();
		
		$.ajax({
			url: '/weatherinfo',
			type: 'get',
			dataType: 'json',
			data: form.serialize(),
			success: function(response) {
				$('#wInfo').empty();
				$.each(response, function(key, value) {
					$('#wInfo').append(key + ': ' + value + '<br/>');
				});
			},
			error: function() {
				alert('something wrong');
			}
		});
	});
});