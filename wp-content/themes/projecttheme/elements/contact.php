<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css" rel="stylesheet">

</head>
<body>
    <section class="contact-sec">  

        <header>
        <?php
        // Template Name: contact
         get_header();
 
        ?>


        <?php
            $bg_image = get_the_post_thumbnail_url(get_queried_object_id(), 'full');
            ?>
            <style>
            .contact-sec {
                background-image: url('<?php echo esc_url($bg_image); ?>');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                height: 100vh;
            }
            </style>


             
        </header>
    </section>

    <section class="contact-sec1">
        
    <div class="container1">
    <h3>We're Ready, Let's Talk.</h3>

    <?php
    // Handle form submission
    if(isset($_POST['submit_contact'])) {

        // Get and sanitize submitted values
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        // Build email
        $to = get_option('admin_email');
        $subject = 'Contact Form Submission';
        $headers = 'From: '. $name .' <'. $email .'>' . "\r\n";
        $body = "Name: $name\nEmail: $email\nMessage: $message";

        if(wp_mail($to, $subject, $body, $headers)){
            echo '<p style="color:green;">Thank you! Your message has been sent.</p>';
        } else {
            echo '<p style="color:red;">Sorry, something went wrong.</p>';
        }
    }

    // Get placeholders from ACF fields
    $name_placeholder = get_field('name') ?: 'Your Name';
    $email_placeholder = get_field('email') ?: 'Email address';
    $message_placeholder = get_field('message') ?: 'Message';
    ?>

    <form method="POST" action="">
        <div class="form-group">
            <input type="text" name="name" id="name" placeholder="<?php echo esc_attr($name_placeholder); ?>" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="<?php echo esc_attr($email_placeholder); ?>" required>
        </div>

        <div class="form-group">
            <textarea name="message" id="message" placeholder="<?php echo esc_attr($message_placeholder); ?>" rows="3" required></textarea>
        </div>

        <div class="btn-group">
            <input class="btn-submit" type="submit" name="submit_contact" value="Submit">
        </div>
    </form>
</div>





        <div class="container2">

            <?php
            $contactinfo_page = get_page_by_title('Contact info');
            if ($contactinfo_page) :
                $contactinfo_id = $contactinfo_page->ID;
            ?>
            <div class="contactinfo">
                <div class="contactinfo-container1">
                    <div class="contactinfo-content1">
                        <div class="contactinfo-section1">
                            <h3><?php echo esc_html(get_field('contactinfo_heading', $contactinfo_id)); ?></h3>
                            <div class="contact-info1">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                    </svg>
                                <p><?php echo wp_kses_post(get_field('contactinfo_address', $contactinfo_id)); ?></p>
                            </div>
                            
                            <div class="contact-info1">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/>
                                    </svg>
                                <p><?php echo esc_html(get_field('contactinfo_phone', $contactinfo_id)); ?></p>
                            </div>

                            <div class="contact-info1">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    </svg>
                                <p><?php echo esc_html(get_field('contactinfo_email', $contactinfo_id)); ?></p>
                            </div>
                        </div>

                        
                        
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>    

    </section>



<?php

 get_footer();
 
?>

</body>
</html>


