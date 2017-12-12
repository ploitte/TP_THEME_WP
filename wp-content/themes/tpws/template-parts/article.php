<?php
    $title = get_the_title();
    $content = get_the_content();
    $image_url = get_the_post_thumbnail_url(null, "full");
    $permalink = get_the_permalink();
?>


    <a class="linkCat" href="<?= $permalink ?>">
    <div class="contArticleDetails">
    
        <div class="articleImage" style="background-image: url(<?= $image_url ?>)"></div>

        <div class="titleDetail">
            <h2><?= $title ?></h2>
        </div>

        <div class="contentDetail">
                <p><?= $content ?></p>      
        </div>         
            
    </div>
    </a>







