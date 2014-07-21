$(document).ready(function(){
    $('.form_describe input[type=button]').click(function(){
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        var mail = $('.form_describe').children('input[type=text]').val();
        var sub = $('.form_describe label').children('input[type=checkbox]').prop("checked");
        if(pattern.test(mail)){           
            $.ajax({
                url: "/ajax/setSub.php",
                type: "POST",
                dataType : "json",
                data: {mail: mail, sub:sub},
                success: function(result) {
                    if(result.RESULT == true){
                        $('.form_describe').html('<div style="color: #fff; margin-top: 9px;">Спасибо!</div>');
                    } else {
                        $('.form_describe').html('<div style="color: #fff; margin-top: 9px;">Ошибка!</div>');
                    }
                }
            });
        } else {
            alert('Введенный EMail некорректен.');
        }
    });
});