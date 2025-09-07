<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css" rel="stylesheet">

</head>
<body>
    

<section class="about-page1">
    <?php wp_nav_menu(array('theme_location'=>'primary-menu',
    'menu_class'=> 'menu-menu-1-container')) ?>
    <div class="content"><?php the_content();?></div>
    <a href="home">
<img width="150" height="42" src="https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo-150x42.png" 
class="custom-logo" alt="" decoding="async" srcset="https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo.png 1x, https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo@2x.png 2x" 
sizes="(max-width: 150px) 100vw, 150px">    </a>
</section>


        <div class="container">
                <div class="blog-container">
                
                    <div class="blog-content">
                        <h2>Our Mission</h2>
                        <p>At Outdoor Adventure, our mission is to inspire people to step outside, explore nature, and embrace the spirit of adventure. We believe that the great outdoors is more than just a destination 
                            it's a way to challenge yourself, connect with others, and find peace away from the noise of everyday life.</p>
                        
                    </div>
                
                
                </div>
            <div class="column-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/project.jpg" alt="Blog Image">
        
            </div>
                    
        </div> 
        <div class="container1">
            <div class="blog-container1">
                    
                <div class="blog-content1">
                    <h2>Extraordinary Experiences</h2>
                    <p>We believe that life's greatest stories are written through extraordinary experiences. 
                        Whether it's reaching the summit of a mountain, kayaking through wild rivers, or watching the sunrise from a hidden trail, 
                        every moment in the outdoors has the power to inspire and transform.</p>
                    
                </div>
            
                    
                            
                    
            </div>
       
            <div class="blog-container2">
                
            <div class="blog-content1">
                <h2>Our Core Values</h2>
                <p>At the heart of everything we do are the values that guide our adventures and shape the experiences we create are
                    Respect for nature, Adventure & Discovery, Community and Connections.
                </p>
                
            </div>
        
                
                        
                
        </div>
       
                    
    </div> 

</body>

</html>


<?php
// Template Name: Home
 get_footer();
?>