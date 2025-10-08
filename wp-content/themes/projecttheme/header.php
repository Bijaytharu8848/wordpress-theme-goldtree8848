<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
  <style>
header {
    
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}

/* Navigation container */
#primary-navigation {
    display: flex;
}

/* Menu styles */
.menu-menu-1-container {
    list-style: none;
    display: flex;
    
    margin: 0;
    padding: 0;
}

.menu-menu-1-container li {
    margin: 20px;
}

.menu-menu-1-container li a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    display: block;
    transition: background-color 0.3s;
}

.menu-menu-1-container li a:hover {
    background-color: rgba(10, 89, 236, 0.1);
    border-radius: 4px;
}

/* Hamburger icon (hidden by default) */
.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
    z-index: 1000;
}

.hamburger span {
    height: 3px;
    width: 25px;
    background: white;
    margin: 3px 0;
    border-radius: 2px;
    transition: 0.3s;
}

/* Hamburger animation */
.hamburger.active span:nth-child(1) {
    transform: rotate(-45deg) translate(-5px, 6px);
}

.hamburger.active span:nth-child(2) {
    opacity: 0;
}

.hamburger.active span:nth-child(3) {
    transform: rotate(45deg) translate(-5px, -6px);
}

/* Mobile styles */
@media (max-width: 768px) {
    #primary-navigation  {
        position: absolute;
        top: 100%;          /* sits just below the header */
        left: 0;
        width: 140px;        /* cover full navbar width */
        background: rgba(51, 51, 51, 0.5); /* semi-transparent dark */
        backdrop-filter: blur(10px);       /* 🔥 blur the entire nav area */
        transform: translateY(-100%);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 999;
    }

    #primary-navigation.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    .menu-menu-1-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
        padding: 20px;
        margin: 0;
        list-style: none;
    }

    .menu-menu-1-container li a {
        color: white;
        font-size: 18px;
        text-decoration: none;
    }


    
    .hamburger {
        display: flex;
    }

 

}

/* Container (optional) */
a.custom-logo-link {
    display: inline-block;
}

/* Logo image */
.custom-logo {
    width: 100%;       /* Logo scales with parent container */
    max-width: 200px;  /* Maximum width to prevent it from being too big */
    height: auto;      /* Maintains aspect ratio */
    display: block;    /* Remove inline spacing issues */
}

/* Optional: make it responsive inside smaller screens */
@media (max-width: 768px) {
    .custom-logo {
        max-width: 150px; /* Adjust max-width for tablets/mobiles */
    }
}

@media (max-width: 480px) {
    .custom-logo {
        max-width: 120px; /* Adjust for small screens */
    }
}





</style>  
</head>
<body>
<header>
    <!-- WordPress Menu -->
    <nav id="primary-navigation">
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'menu_class'     => 'menu-menu-1-container',
            'container'      => false, // Remove default container
            'fallback_cb'    => false
        ));
        ?>
    </nav>
    
    <!-- Hamburger icon -->
    <div class="hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>



<script>
function toggleMenu() {
    const nav = document.getElementById('primary-navigation');
    const hamburger = document.querySelector('.hamburger');
    
    nav.classList.toggle('active');
    hamburger.classList.toggle('active');
}

// Close menu when clicking on a link (optional)
document.addEventListener('DOMContentLoaded', function() {
    const menuLinks = document.querySelectorAll('.menu-menu-1-container a');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            const nav = document.getElementById('primary-navigation');
            const hamburger = document.querySelector('.hamburger');
            nav.classList.remove('active');
            hamburger.classList.remove('active');
        });
    });
});
</script>
        <?php
            $logoimg = get_header_image();
        ?>
        <a href="home">
            
            <img width="200" height="150" src="<?php echo $logoimg;  ?>" 
            class="custom-logo" alt="" decoding="async" 
            sizes="(max-width: 150px) 100vw, 150px"> </a> 
</body>
</html>