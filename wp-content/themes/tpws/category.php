<?php 

add_action("wp_enqueue_scripts", "myScript");

function myScript(){
    wp_enqueue_script( "textScript", get_template_directory_uri()."/js/textScript.js", array("jquery"));
}

get_header();
?>
<div class="contentTitleCat">
    <h1 class="titleCategory"><?php single_cat_title(); ?></h1>
</div>

<div class="categorieCont">

   

    <?php 
    
        if(have_posts()){
            while(have_posts()){

            the_post();

            get_template_part("template-parts/article");
        }

    ?>

    <?php } ?>

</div>

<?php

get_footer();