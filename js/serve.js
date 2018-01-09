$(document).ready(function(){
   $('#serve_btn').click(function(){
   var name=1;
    $.post('fetch_serve.php',{name:name},function(data){

 		
 	});
   });
});