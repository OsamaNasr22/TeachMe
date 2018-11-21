$(document).ready(function(){
    $('.main i').on('mouseenter mouseleave',function(){
        $('input').toggleClass('active');
        if($('.pass').hasClass('active')){
            $(this).attr('class',"fa fa-eye-slash fa-lg");
            $('.pass').attr('type',"text");
        }else{
            $(this).attr('class',"fa fa-eye fa-lg");
           $('.pass').attr('type','password');
        }
    });
    $('.option-box .box-check').click(function(){
        $('.option-box .colors').fadeToggle();
        
    });
    
   
});