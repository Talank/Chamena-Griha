$(document).ready(function() {  
	$('#serve_btn').onclick(function() { 
		var u_id=$('#u_id').val();
		$.post('../process/serve_process.php',{u_id:u_id},function(data){
			//alert("sss00");
			// if (data=="success") {
			// 	alert("serve request sent");
			// }
			alert(data);
			$('.cart').html(data);
			//$('#id1').html(data);
		});
	});
});