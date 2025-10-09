<?php
 register_nav_menus(
    array('primary-menu'=>'Header menu')
 ); 

 add_theme_support('post-thumbnails');
 add_theme_support('custom-header');
 add_theme_support('custom-background');
 add_theme_support('custom-logo' , array(
   'width' => 200,
   'height' => 150,
   'flex-height' => true,
   'flex-width' => true
 ));

function exclude_about_category_global( $query ) {
    if ( $query->is_main_query() && !is_admin() ) {
        $query->set( 'category__not_in', array( get_cat_ID('about') ) );
    }
}
add_action( 'pre_get_posts', 'exclude_about_category_global' );


// Enable Custom Fields for posts
function enable_custom_fields_support() {
    add_post_type_support('post', 'custom-fields');
}
add_action('init', 'enable_custom_fields_support');

// Show custom fields meta box by default
function show_custom_fields_metabox() {
    if (function_exists('add_meta_box')) {
        add_meta_box(
            'postcustom',
            __('Custom Fields'),
            'post_custom_meta_box',
            'post',
            'normal',
            'core'
        );
    }
}
add_action('add_meta_boxes', 'show_custom_fields_metabox');


// Add global options page for footer
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer Settings',
        'menu_slug'     => 'footer-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);
}
// Add global options page for Contactinfo
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title'    => 'Contact info',
        'menu_title'    => 'Contact info',
        'menu_slug'     => 'contact-info',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);
}


// Handle Contact Form AJAX Submission
add_action('wp_ajax_submit_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_submit_contact_form', 'handle_contact_form');

function handle_contact_form() {
    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'contact_form_nonce')) {
        wp_send_json(['success' => false, 'message' => 'Invalid security token.']);
    }

    $name    = sanitize_text_field($_POST['name'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json(['success' => false, 'message' => 'Please fill in all fields.']);
    }

    if (!is_email($email)) {
        wp_send_json(['success' => false, 'message' => 'Invalid email address.']);
    }

    $to      = get_option('admin_email'); // Admin email
    $subject = 'New Contact Form Submission from ' . get_bloginfo('name');
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Use From email same as WP Mail SMTP
    $from_email = get_option('wp_mail_smtp')['from_email'] ?? get_option('admin_email');
    $from_name  = get_option('wp_mail_smtp')['from_name'] ?? get_bloginfo('name');

    $headers = [
        'From: ' . $from_name . ' <' . $from_email . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json(['success' => true, 'message' => ' Your message has been sent successfully!']);
    } else {
        wp_send_json(['success' => false, 'message' => ' Something went wrong. Please check SMTP settings.']);
    }
}




?>




