$(document).ready(function(){
    
    
    // поделиться
    $('.share').click(function(){
        $('.social_links_block, .kontakts_info_block, .describe_block').stop().slideUp();
        
        $('.contakts_info_active').removeClass('contakts_info_active');
        $('.contakts_info').find('img').attr({'src':'/images/contakts_info_logo.png'});
        $('.share_active').removeClass('share_active');
        $('.describe_active').removeClass('describe_active');
        
        $(this).parents('.social_and_contakts_in').find('.social_links_block').stop().slideDown(300);
        $(this).addClass('share_active');
        
    });
    
    $('body').click(function(){
        $('.social_links_block').stop().slideUp(300);
        $('.share').removeClass('share_active');
    });
    
    
    
    
    
    
    // контактная информация
    $('.contakts_info').click(function(){
        $('.social_links_block, .kontakts_info_block, .describe_block').stop().slideUp();
        
        $('.contakts_info_active').removeClass('contakts_info_active');
        $('.contakts_info').find('img').attr({'src':'/images/contakts_info_logo.png'});
        $('.share_active').removeClass('share_active');
        $('.describe_active').removeClass('describe_active');
        
        
        $('.kontakts_info_block').stop().slideDown(300, function(){
            $('html, body').animate({
                scrollTop: $(".kontakts_info_block").offset().top
            }, 1000, 'easeInCubic');
        });
        $(this).addClass('contakts_info_active');
        $(this).find('img').attr({'src':'/images/contakts_info_logo_active.png'});
        
    });
    
    $('.close_kontakts_info, body').click(function(){
        $('.kontakts_info_block').stop().slideUp(300);
        $('.contakts_info').removeClass('contakts_info_active');
        $('.contakts_info').find('img').attr({'src':'/images/contakts_info_logo.png'});
    });
    
    
    
    
    // подписаться
    $('.describe').click(function(){
        $('.social_links_block, .kontakts_info_block, .describe_block').stop().slideUp();
        
        $('.contakts_info_active').removeClass('contakts_info_active');
        $('.contakts_info').find('img').attr({'src':'/images/contakts_info_logo.png'});
        $('.share_active').removeClass('share_active');
        $('.describe_active').removeClass('describe_active');
        
        $('.describe_block').stop().slideDown(300, function(){
            $('html, body').animate({
                scrollTop: $(".describe_block").offset().top
            }, 1000, 'easeInCubic');
        });
        $(this).addClass('describe_active');
        
    });
    $('.close_kontakts_info, body').click(function(){
        $('.describe_block').stop().slideUp(300);
        $('.describe').removeClass('describe_active');
    });
    
    
    
    
    
    
    $('.describe_block, .describe, .share, .social_links_block, .contakts_info, .kontakts_info_block').click(function(event){
        event.stopPropagation();
    });
    
    
});