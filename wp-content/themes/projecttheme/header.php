<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

</head>
<header>
    <?php wp_nav_menu(array('theme_location'=>'primary-menu',
    'menu_class'=> 'menu-menu-1-container')) ?>
    <div class="content"><?php the_content();?></div>
</header>