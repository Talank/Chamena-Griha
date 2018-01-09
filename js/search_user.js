$(document).ready(function() {  
	$('.clz-search').keyup(function() { 
		var name=$('.clz-search').val();
		$.post('../process/search_users.php',{n:name},function(data){
			//alert("sss00");
			$('#id1').html(data);
		});
	});
});