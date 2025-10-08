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
        <?php
        // Template Name: Project
        get_header();
 
        ?>
        
        <?php
            $bg_image = get_the_post_thumbnail_url(get_queried_object_id(), 'full');
            ?>
            <style>
            .project-sec1 {
                background-image: url('<?php echo esc_url($bg_image); ?>');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                height: 100vh;
            }
            </style>

         
    </header>
</section>   




        <!-- Group Slider -->
        <?php
        $group_images = [
            get_field('group_image_1'),
            get_field('group_image_2'),
            get_field('group_image_3'),
            get_field('group_image_4')
        ];
        $group_images = array_filter($group_images);
        ?>

        <div class="project-sec2">

            <div class="header1">
               <h2> Camping </h2>
            </div>

            <div class="swiper">
                
                <!--  Swiper wrapper wraps ALL slides -->
                <div class="swiper-wrapper">
                <?php foreach ($group_images as $img): ?>
                    <div class="swiper-slide">
                    <img src="<?php echo esc_url($img); ?>" alt="Group Image">
                    </div>
                <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>

                <!-- Navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>


        <!-- Team Slider -->
        <?php
        $team_images = [
            get_field('team_image_1'),
            get_field('team_image_2'),
            get_field('team_image_3'),
            get_field('team_image_4')
        ];
        $team_images = array_filter($team_images);
        ?>

        <div class="project-sec3">

            <div class="header1">
               <h2> Winter Sports</h2>
            </div>

            <div class="swiper">
                
                <!--  Swiper wrapper wraps ALL slides -->
                <div class="swiper-wrapper">
                <?php foreach ($team_images as $img): ?>
                    <div class="swiper-slide">
                    <img src="<?php echo esc_url($img); ?>" alt="Team Image">
                    </div>
                <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>

                <!-- Navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>



        <!-- Gallery Slider -->
        <?php
        $gallery_images = [
            get_field('gallery_image_1'),
            get_field('gallery_image_2'),
            get_field('gallery_image_3'),
            get_field('gallery_image_4')
        ];
        $gallery_images = array_filter($gallery_images);
        ?>

        <div class="project-sec4">

            <div class="header1">
               <h2> Water Sports </h2>
            </div>

            <div class="swiper">
                
                <!--  Swiper wrapper wraps ALL slides -->
                <div class="swiper-wrapper">
                <?php foreach ($gallery_images as $img): ?>
                    <div class="swiper-slide">
                    <img src="<?php echo esc_url($img); ?>" alt="Gallery Image">
                    </div>
                <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>

                <!-- Navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>


<?php

 get_footer();
 
?>
<!-- linking  swiperjs scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- linking custom scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/project.js"></script>

</body>
