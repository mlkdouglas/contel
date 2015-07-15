$(function(){
    
    //$('.scrolloff').css('pointer-events', 'none');
    $('.maps').click(function(){
        $('iframe', this).removeClass('scrolloff');
       
    }).mouseleave(function(){
        $('iframe', this).addClass('scrolloff');
    });
});