<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="google-site-verification" content="t5beHzKzRFYhdfvlvKLNJ4pYjIT3bP3KlDewNICX24c" />
	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="/wp-content/themes/watsonstheme/assets/img/favicon.ico">
    <?php
        wp_head();
    ?>
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <!-- Link to icons for Font Awesome 5 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!-- Link to stylesheet for AOS animate on scroll library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Link to Osano privacy pop-up-->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <!-- Preload -->
    <link rel="preload" as="image" href="/wp-content/themes/watsonstheme/assets/img/watson.webp">	
	<!--Script for CDN (slider breaks if placed at the end)-->
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!-- AOS -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <?php
                if(function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
            ?>
            <a class="navbar-brand" href="#"><img src=<?php echo $logo[0] ?> alt="website logo" width="200" height="50"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php
                    wp_nav_menu(
                        array(
                            'meny' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>'
                        )
                    )
                ?>
            </div>
        </div>
    </nav>
    
    <?php
        dynamic_sidebar('sidebar-1');
    ?>
    