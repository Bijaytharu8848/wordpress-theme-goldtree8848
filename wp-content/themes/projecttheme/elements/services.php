<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/service.css" rel="stylesheet">

</head>
<body>
    <section class="service-page1">
        
            <?php wp_nav_menu(array('theme_location'=>'primary-menu',
            'menu_class'=> 'menu-menu-1-container')) ?>
            <div class="content"><?php the_content();?></div>
            <a href="home">
                <img width="150" height="42" src="https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo-150x42.png" 
                class="custom-logo" alt="" decoding="async" srcset="https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo.png 1x, https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo@2x.png 2x" 
                sizes="(max-width: 150px) 100vw, 150px">    
            </a>
      

    </section>  
    <section class="service-page2">
        <div class="element">
            <h2>It's Time to Start Your Adventures</h2>
            <p>Step outside your comfort zone and discover the thrill of the great outdoors.
                 From mountains to rivers, every journey is a chance to explore, grow, and create unforgettable memories.</p>
        </div>

        <div class="container1">
                <div class="blog-content1">
                    <div class="column-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/hiking.jpg" alt="Blog Image">
                
                    </div>
                    
                        <h2>Backpacking Trips</h2>
                        <p>At Outdoor Adventure, our mission is to inspire people to step outside, explore nature, and embrace the spirit of adventure. We believe that the great outdoors is more than just a destination.</p>
                    
                </div>
                <div class="blog-content1">
                    <div class="column-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/project.jpg" alt="Blog Image">
                
                    </div>
                    <h2>Family Hiking Trips</h2>
                    <p>At Outdoor Adventure, our mission is to inspire people to step outside, explore nature, and embrace the spirit of adventure. We believe that the great outdoors is more than just a destination .</p>
        
                </div>
        </div>        
        <div class="container2">
                <div class="blog-content2">
                    <div class="column-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/watersport2.jpg" alt="Blog Image">
                
                    </div>
                    <h2>Water Sports</h2>
                    <p>At Outdoor Adventure, our mission is to inspire people to step outside, explore nature, and embrace the spirit of adventure. We believe that the great outdoors is more than just a destination.</p>
        
                </div>
                <div class="blog-content2">
                    <div class="column-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/wintersport.jpg" alt="Blog Image">
                
                    </div>
                    <h2>Winter Sports</h2>
                    <p>At Outdoor Adventure, our mission is to inspire people to step outside, explore nature, and embrace the spirit of adventure. 
                        We believe that the great outdoors is more than just a destination.</p>
        
                </div>
            
        </div>
    </section>
   
</body>

</html>
<?php
// Template Name: Service
 get_footer();
?>