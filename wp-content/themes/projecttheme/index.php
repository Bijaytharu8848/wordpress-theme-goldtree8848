<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css" rel="stylesheet">

</head>
<body>
    <section class="service-page1">
            <header>
            <?php
            // Template Name: services 
            get_header();
            ?>
            <?php
            $bg_image = get_the_post_thumbnail_url(get_queried_object_id(), 'full');
            ?>
            <style>
            .service-page1 {
                background-image: url('<?php echo esc_url($bg_image); ?>');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                height: 100vh;
            }
            </style>
                   
      
            </header>
           
                
                

    </section>  
    <section class="service-page2">
        <div class="element">
            <h2>It's Time to Start Your Adventures</h2>
            <p>Step outside your comfort zone and discover the thrill of the great outdoors.
                 From mountains to rivers, every journey is a chance to explore, grow, and create unforgettable memories.</p>
        </div>
        
        <?php
        // Show posts from "services" category only
        $services = new WP_query([
            
            'category_name' => 'services',
            'posts_per_page' => '4'
            
        ]); 

        
        if($services->have_posts()): ?>
        <div class="container" >    
            <?php   while($services->have_posts()) : $services->the_post(); ?>
                   
                <div class="blog-content">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="column-image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                    

                
                    <h2><?php the_title(); ?> </h2>
                    <p><?php the_content(); ?></p>
                </div>
                

            <?php endwhile;
                    wp_reset_postdata();

                    
                else :
                    echo "<p>No About posts yet.</p>";
                endif;
                ?>
                 
        </div>      
        
    </section>
   
</body>

</html>
<?php
 get_footer();
?>