<!DOCTYPE html>
<html lang="en">
<head>
    <title>jxmirai</title>
</head>
<body>
    <div class="pages-banner-wrapper">
        <div class="banner-overlay ">
            <div class="banner-img-container">
                <div class="banner-opacity">
                <img src="<?php 
                       global $url;
                      echo get_template_directory_uri(). $url; ?>" alt="Banner" class="responsive-image">
            
                </div>
                <div class="page-banner-title">
                <?php
                    global $title;
                    global $caption;
                    $title = $title;
                    $caption = $img;
                            include get_template_directory() . '/custom/title.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
