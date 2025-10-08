<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css" rel="stylesheet">
</head>
<body>
    <section class="about-page1">
        <header>
            <?php
            /* Template Name: About */
            get_header();
            ?>

            <?php
            $bg_image = get_the_post_thumbnail_url(get_queried_object_id(), 'full');
            ?>
            <style>
            .about-page1 {
                background-image: url('<?php echo esc_url($bg_image); ?>');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                height: 100vh;
            }
            </style>

            
        </header>
    </section>

    <div class="container">
  
        
        <?php
        // Show posts from "about" category only
        $about_query = new WP_Query([
            'category_name' => 'about',
            'posts_per_page' => 3,
        ]);

        if ($about_query->have_posts()) :
            while ($about_query->have_posts()) : $about_query->the_post(); ?>
            
            <div class="about-post">
                
                
                <div class="blog-container">
                    <div class="blog-content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
                
                <?php if (has_post_thumbnail()) : ?>
                <div class="column-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <?php endif; ?>

            </div>
            
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo "<p>No About posts yet.</p>";
        endif;
        ?>
    </div>


   <!-- Most explicit method - specify left/right in post -->
<div class="two-column-text-container">
    <?php
    // Get left column post
    $left_query = new WP_Query([
        'category_name' => 'two-column',
        'meta_key' => 'column_position',
        'meta_value' => 'left',
        'posts_per_page' => 1
    ]);
    
    // Get right column post
    $right_query = new WP_Query([
        'category_name' => 'two-column',
        'meta_key' => 'column_position',
        'meta_value' => 'right',
        'posts_per_page' => 1
    ]);
    ?>
    
    <!-- Left Column -->
    <div class="left-column">
        <?php if ($left_query->have_posts()) : ?>
            <?php while ($left_query->have_posts()) : $left_query->the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <h3>No Left Column Content</h3>
            <p>Add a post with custom field: column_position = left</p>
        <?php endif; ?>
    </div>
    
    <!-- Right Column -->
    <div class="right-column">
        <?php if ($right_query->have_posts()) : ?>
            <?php while ($right_query->have_posts()) : $right_query->the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <h3>No Right Column Content</h3>
            <p>Add a post with custom field: column_position = right</p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>

<?php get_footer(); ?>