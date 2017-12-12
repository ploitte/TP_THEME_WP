<?php

add_action("init", "create_slide_post_type");


function create_slide_post_type(){
    register_post_type("slider", [
        "label" => "Slider",
        "description" => "Ajoutez des images à votre slider !",
        "show_in_menu" => true,
        "public" => true,
        "menu_icon" => "dashicons-images-alt",
        "supports" => [
            "thumbnail"
        ]
    ]);
}


?>

           