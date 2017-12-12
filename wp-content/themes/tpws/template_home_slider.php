<?php

    add_action("wp_enqueue_scripts", "home_slide_settings");

    function home_slide_settings(){
        wp_enqueue_style('slider', get_template_directory_uri()."/css/slider.css");
        wp_enqueue_script( "slider",get_template_directory_uri()."/js/slider.js", array("jquery"));
    }

/*
    Template Name: Home_Slider
*/
get_header();
?>

    <div id="pause" class="video"></div>
    <div id="play" class="video"></div>
    <div id="arrowLeft" class="arrow"></div>
    <div id="arrowRight" class="arrow"></div>


<div class="slider">

            <?php
            $slider = new WP_Query([
                "post_type" => "slider"
            ]);
            $idBg = 0;

            if($slider -> have_posts()){
                while($slider->have_posts()){
                
                $idBg++;
                $slider -> the_post();

                $bg = get_the_post_thumbnail_url( null, "full");
        
        ?>    
                
            <div class="slides" id="<?= $idBg ?>" style="background-image: url(<?= $bg ?>)"></div>
                
        <?php }
        } else{return; } ?>

</div>
</div> <!-- Cont Slider -->



<div id="contAllCat">
    <div id="bannerCat">
        <h1>Catégories</h1>
    </div>

    <?php $categories = get_categories();

        foreach($categories as $cats){
            $catID = $cats -> term_id;
            $img = apply_filters( 'taxonomy-images-queried-term-image', '');
            $links = get_category_link( $catID );

    ?>

        <a class="linkCat" href="<?= $links ?>">
            <div class="catDetails">
                <h1 class="titleCatHome"><?= $cats -> name ?></h1>
            </div>
        </a>

    <?php
        }
    ?>

</div>