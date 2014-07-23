$(document).ready(function(){
    $('.buy_tickets_7').show();
    $('.buy_tickets_button_7').css('color', '#c1272d');
    $('.buy_tickets_button').click(function(){
        id = $(this).attr('group_tickets'); 
        $('.buy_tickets_all').children('div').hide();
        $('.buy_tickets_' + id).show();
        $(this).parent('div').children('a').css('color', '#000');
        $(this).css('color', '#c1272d');
    });
});