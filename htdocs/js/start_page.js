$(window).load(function(){
    
//    $('.start_page_wrapper').css({'min-height':$(window).height()});
    
    
    $('a[href^="#"]').click(function () { 
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;

        $('body,html').animate( { scrollTop: destination }, 1000, 'easeInOutCubic' );
        return false;
    });
    
});