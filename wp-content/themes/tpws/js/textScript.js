var $ = jQuery;




$(document).ready(function(){

    // TEXT LENGTH GENERATOR 

    $(".contentDetail").each(function(i){
        let content =  $(this).text();
        let delet = content.substr(0, 150);
        $(this).html("<p>" + delet + "...</p>");
    })

    

})