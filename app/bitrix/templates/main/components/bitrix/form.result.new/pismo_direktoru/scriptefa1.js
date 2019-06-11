$(document).ready(function(){
    $("form[name='MAIL_TO_DIRECTOR']").submit(function(event){
        $("form[name='MAIL_TO_DIRECTOR'] input").each(function(){
            if ($(this).attr("data-validation") == "required"){
                if (!$(this).val()){
                    $(this).focus();
                    event.preventDefault();
                }
            }
        });
    });
});