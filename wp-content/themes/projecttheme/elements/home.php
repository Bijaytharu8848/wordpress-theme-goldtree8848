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
                <a href="home">
                            <img width="150" height="42" src="https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo-150x42.png" 
                            class="custom-logo" alt="" decoding="async" srcset="https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo.png 1x, https://websitedemos.net/outdoor-adventure-02/wp-content/uploads/sites/351/2020/01/white-logo@2x.png 2x" 
                            sizes="(max-width: 150px) 100vw, 150px"> </a>    
                            
            </header>
            
               
                
                <div class= "header-content" >
                <h3>Explore the Colorful World</h3>
                <h1>A Wonderful Gift</h1> </div> 
            </div>


        <h1 style="text-align:center; margin-bottom:40px;">Upcoming Events</h1>

        <div class="blog-container">
            
            <!-- Blog Card 1 -->
            <div class="blog-card">
            <img src="https://picsum.photos/600/400?random=1" alt="Blog Image">
            <div class="blog-content">
                <h2>Exploring the Mountains</h2>
                <p>Discover the beauty of the mountains with our detailed travel guide and breathtaking photos from around the world.</p>
                <a href="#" class="read-more">Read More →</a>
            </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="blog-card">
            <img src="https://picsum.photos/600/400?random=2" alt="Blog Image">
            <div class="blog-content">
                <h2>Beach Paradise Awaits</h2>
                <p>Unwind on golden sands, enjoy crystal clear water, and find out the best beaches to visit this summer.</p>
                <a href="#" class="read-more">Read More →</a>
            </div>
            </div>

        </div>


            <div class="hero1">
                    <div class="blog-container1">
                    <!-- Blog Card 3 -->
                        <div class="blog-card1">
                            
                            <div class="blog-content1">
                                <h2>City Lights and Nightlife</h2>
                                <p>From rooftop bars to cultural festivals, experience the best nightlife in vibrant cities around the globe.</p>
                                <a href="#" class="read-more1">Read More →</a>
                            </div>
                        </div>
                    </div>
            </div> 
            <div class="container">
                    <div class="blog-container2">
                        <!-- Blog Card 3 -->
                            <div class="blog-card2">
                                
                                <div class="blog-content2">
                                    <h2>Upcoming Tours & Destination</h2>
                                    <p>From rooftop bars to cultural festivals, experience the best nightlife in vibrant cities around the globe.</p>
                                    <a href="#" class="read-more2">Read More →</a>
                                </div>
                            
                            
                                    
                            </div>
                            
                        
                            
                    </div>
                    <div class="column2-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/project.jpg" alt="Blog Image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/service.jpg" alt="Blog Image">
                    </div>
                    <div class="column3-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/about.jpg" alt="Blog Image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/about.jpg" alt="Blog Image">
                        
                    </div> 
            </div>    
</body>


</html>

<?php

 get_footer();
?> 