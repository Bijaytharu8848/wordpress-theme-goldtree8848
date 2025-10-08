<?php
// Template Name: Home

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

</head>

<body>
        <div class="hero">
            <header>
                <?php
                    // Template Name: Home
                    get_header();
                ?>

                <?php
                $bg_image = get_the_post_thumbnail_url(get_queried_object_id(), 'full');
                ?>
                <style>
                .hero {
                    background-image: url('<?php echo esc_url($bg_image); ?>');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    height: 100vh;
                }
                </style>

                   
                            
            </header>
            
               
                
                <div class= "header-content" >
                <h3><?php the_content();  ?></h3>
                 </div> 
            </div>
            

            <!--  for upcoming events heading -->

            <?php 

            $heading = get_field('home_heading');
            
            ?>

            <?php if($heading): ?>

                <h1 style="text-align:center; margin-bottom:40px; margin-top: 40px; "> <?php echo $heading; ?> </h1>
                
            <?php endif; ?> 

        
        
        <?php
        // Show posts from "home-section1" category only
        $home_s1 = new WP_query([
            
            'category_name' => 'home-section1',
            'posts_per_page' => '2'
            
        ]); 

        
        if($home_s1->have_posts()): ?>
        <div class="blog-container" >    
            <?php   while($home_s1->have_posts()) : $home_s1->the_post(); ?>
                   
            
                 
            
                
                    <div class="blog-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="column-image">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                       
                        <div class="blog-content">
                    
                        <h2><?php the_title(); ?> </h2>
                        <p><?php the_content(); ?></p>
                        <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>
                
            
               
               
       
            <?php endwhile;
                    wp_reset_postdata();

                    
                else :
                    echo "<p>No About posts yet.</p>";
                endif;
                ?>
                 
        </div>  

        
<!--  for 2nd background section -->

            <?php
         
            $bg2 = get_field('background_section_2');
            ?>

            <section class="hero1" style="background-image: url('<?php echo esc_url($bg2); ?>');">
                <div class="content">
                    <?php
            $home_s2 = new WP_Query([
                'category_name' => 'home-section2',
                'posts_per_page' => 1
            ]); 

            if ($home_s2->have_posts()) : ?>
                <div class="container">
                    <?php while ($home_s2->have_posts()) : $home_s2->the_post(); ?>

                        <div class="blog-container1">
                            <div class="blog-card1">  
                                <div class="blog-content1">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                    <a href="#" class="read-more2">Read More →</a>
                                    
                                </div>
                            </div>
                            
                        </div>

                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php else: ?>
                <p>No posts yet.</p>
            <?php endif; ?>
                </div>
            </section>

            <style>

                .hero1{ 
                margin-top: 40px;
                background-size: cover;
                height: 100vh;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                
                }
            </style>


        <!--  this is for last section of the homepage -->
            <?php
            $home_s2 = new WP_Query([
                'category_name' => 'home-section3',
                'posts_per_page' => 1
            ]); 

            if ($home_s2->have_posts()) : ?>
                <div class="container">
                    <?php while ($home_s2->have_posts()) : $home_s2->the_post(); ?>

                        <div class="blog-container2">
                            <div class="blog-card2">  
                                <div class="blog-content2">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                    <a href="#" class="read-more2">Read More →</a>
                                    
                                </div>
                            </div>
                            
                        </div>


                        <div class="image-grid">
                            <?php 
                            $images = [];
                            for ($i = 1; $i <= 4; $i++) {
                                $img = get_field('image_' . $i);
                                if ($img) $images[] = $img;
                            }

                            foreach ($images as $image): ?>
                                <div class="column2-image">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>

                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php else: ?>
                <p>No posts yet.</p>
            <?php endif; ?>
     
</body>


</html>

<?php

 get_footer();
?> 