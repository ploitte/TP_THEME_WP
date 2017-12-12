var $ = jQuery;

$(document).ready(function(){

    let $slider = $(".slider");
    let $slides = $(".slides");
    let $arrowLeft = $("#arrowLeft");
    let $arrowRight = $("#arrowRight");

    let $first = $slides.first();

    let paused = false;
    
    let taille = $slides.length;

    let taillePlus = (taille * 100) - 100;
    let tailleMoins = 0 - taillePlus;

    let test = 0;
    let test2 = 0;

    let waiter = false;

    if($slides.length < 1){
        $slider.css("background-image", "url(./wp-content/themes/tpws/js/bgbase.jpg)");
    }

    if($slides.length > 1){
        $(".video").css("display", "block");
    }

    $slides.each(function(){
        if($(this).attr("id") < 2){
            $first = $(this);
        }else{
            test += 100;
            $(this).css("left", test+"%")
            console.log($(this));
        }
    });


    function translateSlide(){
        $slider.css("transform", "translateX("+test2+"%)");
    }

    var timer = setInterval(function(){
        if(!paused){
            if(test2 > tailleMoins && test2 != tailleMoins){
                test2 -= 100;
            }else{
                test2 = 0;
            }
        }
        translateSlide();
    },3000);


    $(document).on("click", "#pause", function(e){
        e.preventDefault();
        paused = true;

        $(".arrow").show();
        $("#arrowRight").css({
            "display" : "block",
            "right" : "3%"
        });
        $("#arrowLeft").css({
            "display" : "block",
            "left" : "3%"            
        });
        //Petite anime à prévoir
    });

    $(document).on("click", "#play", function(e){
        e.preventDefault();
        paused = false;

        $("#arrowRight").css({
            "right" : "-10%"
        });
        $("#arrowLeft").css({
            "left" : "-10%"            
        });
    });

    $(document).on("click", "#arrowRight", function(){
        resetWaiter();
        if(!waiter){
            if(paused){
                if(test2 > tailleMoins && test2 != tailleMoins){
                    test2-=100;
                }else{
                    test2 = 0;
                }
                waiter = true;
            }
        }
        translateSlide();
    });

    $(document).on("click", "#arrowLeft", function(){
        resetWaiter();
        if(!waiter){
            if(paused){
                if(test2 != 0){
                    test2+=100;

                }else{
                    test2 = tailleMoins;
                }
                waiter = true;
            }
        }
        translateSlide();
    });

    function resetWaiter(){
        setTimeout(function(){
            waiter = false;
        }, 1200);
    }

});



