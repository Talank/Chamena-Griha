$(document).ready(function(){
	$('#search_food').keyup(function(){
		var food_name=$('#search_food').val();
		$.ajax({
			type: 'POST',
			url: 'search_food.php',
			data: {name:food_name},
			success: function(feedback){
				$('#search_results').html(feedback);
			}
		})
	})
})