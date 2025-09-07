<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/project.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
<section class="project-sec1">

    <header>
        <?php wp_nav_menu(array('theme_location'=>'primary-menu',
        'menu_class'=> 'menu-menu-1-container')) ?>
        <div class="content"><?php the_content();?></div>
        <a href="home">
        <img width="150" height="42" src="https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo-150x42.png" 
        class="custom-logo" alt="" decoding="async" srcset="https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo.png 1x, https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo@2x.png 2x" 
        sizes="(max-width: 150px) 100vw, 150px">    </a>
    </header>
</section>   

<section class="project-sec2">
    <div class="header1">
        <h2> Water Sports</h2>
    </div>
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/watersport2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/watersport3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/watersport4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/watersport5.jpg" alt=""></div>
            
          
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
</section>


<section class="project-sec3">
    <div class="header1">
        <h2> Winter Sports</h2>
    </div>
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/wintersport.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/wintersport2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/wintersport3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/wintersport4.jpg" alt=""></div>
          
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
</section>


<section class="project-sec4">
    <div class="header1">
        <h2> Camping</h2>
    </div>
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/camping1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/camping2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/camping3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/camping4.jpg" alt=""></div>
          
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
</section>


<?php

 get_footer();
 
?>
<!-- linking  swiperjs scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- linking custom scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/project.js"></script>

</body>
