<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tpWS
 */

get_header(); 
?>


    <div class="articleContainer">
        <div class="singleContainer">
        <?php 
            while(have_posts()){
                the_post();


                $title = get_the_title();
                $content = get_the_content();
                $image = get_the_post_thumbnail_url( null, "small" );
                $categories = get_the_category();
                $tags = get_the_tags();
                $cat = new WP_Query(array(
                    "category_name" => $categories[0]->name,
                    "order" => "ASC",
                    "orderby" => "date"
                ));
        ?>
            <div class="singleLeft">
                <div class="singleImage" style="background-image: url(<?= $image ?>)"></div>
            </div>
            

            <div class="singleRight">
                  <div class="titleSingleCont">
                    <h1><?= $title ?></h1>
                </div>
                <div class="singleContent">
                    <p><?= $content ?></p>
                </div>
                <div class="singleCatIco">
                <span>Catégorie: 
                <?php foreach($categories as $cat){ ?>
                    <a href="<?= get_category_link($cat->cat_ID) ?>">
                        <span>
                            <?= $cat -> name ?>
                        </span>
                    </a>
                <?php } ?>
                </span>
                </div>  
            </div>
        <?php } ?>
        </div>
    </div>



<?php
get_footer();
