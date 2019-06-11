$(document).ready(function(){
    $("form[name='CALL_ZAMERSHIK']").submit(function(event){
        //console.log("click on submit");
        $("form[name='CALL_ZAMERSHIK'] input").each(function(){
            if ($(this).attr("data-validation") == "required"){
                if (!$(this).val()){
                    $(this).focus();
                    event.preventDefault();
                }
            }
        });
    });
});

