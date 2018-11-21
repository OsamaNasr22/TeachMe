$(document).ready(function(){
     $(".carousel-indicators li:first-child").attr("class","active");
     $(".carousel-inner div:first-child").attr("class","item active");
     $('.carousel').carousel({
	 interval:3000
	
 	});	
   
});
