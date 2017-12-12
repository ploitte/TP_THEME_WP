var $ = jQuery;

$(document).ready(function(){



    $(window).scroll(function(){
        if($("html").scrollTop() > 800){
            $("#goTop").css("left", "1%");
        }else{
            $("#goTop").css("left", "-10%");
        }
    });

    $(document).on("click", "#goTop", function(){
        $("html").animate({scrollTop: 0}, "slow");
    })


});