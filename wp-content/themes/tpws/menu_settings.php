<?php

add_action("admin_menu", "generate_theme_menu");
add_action("admin_init", "add_option_customs");


add_action("admin_enqueue_scripts", "script_menu_settings");



function script_menu_settings(){
    wp_enqueue_script( "colorScript", get_template_directory_uri()."/js/jscolor.min.js", array("jquery"));
    wp_enqueue_style( "colorStyle", get_template_directory_uri()."/css/settings_menu.css");
}

function add_option_customs(){

    add_option("custom_colors", []);

}

function generate_theme_menu(){
    add_menu_page(
        "Settings_Theme",
        "Settings-Theme",
        "administrator",
        "lucas_theme_menu",
        "generate_MenuPage",  
        "dashicons-admin-generic",
        60
    );
}

function generate_MenuPage(){

    if(isset($_POST["colorHeader"])){
        update_option("custom_colors", $_POST["colorHeader"]);
    }

    if(get_option("custom_colors")){
        $color_val = get_option("custom_colors");
    }

?>

    <form method="post">


        <label>
            <span>Couleur principale:</span>
            <input class="jscolor" type="text" name="colorHeader" value="<?= $color_val ?>">
        </label>

        <label>
            <span>Couleur secondaire:</span>
            <input class="jscolor" type="text" name="colorHeader" value="<?= $color_val ?>">
        </label>

        <input type="submit" value="Valider">
    </form>

<?php
}
?>

