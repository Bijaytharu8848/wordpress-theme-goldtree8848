<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;                
            flex-direction: column;
                       
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
}


        /* Footer Styles */
        .footer {
                background-color: #000000;
                color: #ffffff;
                padding: 10px 0 0px 0;
                
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-section h3 {
            color: #ffffff;
            margin-bottom: 15px;
            font-size: 1.25rem;
            font-weight: 600px;
        }

        .footer-section p,
        .footer-section a {
            color: #cccccc;
            text-decoration: none;
            margin-bottom: 8px;
            display: block;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: #ffffff;
        }

        .contact-info {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .contact-info svg {
            width: 16px;
            height: 16px;
            margin-right: 10px;
            fill: #cccccc;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            background-color: #333333;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }

        .social-links a:hover {
            background-color: #555555;
        }

        .social-links svg {
            width: 20px;
            height: 20px;
            fill: #ffffff;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .footer {
                padding: 30px 0 15px 0;
            }
        }
    </style>
</head>



   <?php
    $footer_page = get_page_by_title('Footer Settings');
    if ($footer_page) :
        $footer_id = $footer_page->ID;
    ?>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><?php echo esc_html(get_field('title', $footer_id)); ?></h3>
                    <div class="contact-info">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        <p><?php echo wp_kses_post(get_field('footer_address', $footer_id)); ?></p>
                    </div>
                    
                    <div class="contact-info">
                            <svg viewBox="0 0 24 24">
                                <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/>
                            </svg>
                        <p><?php echo esc_html(get_field('footer_phone', $footer_id)); ?></p>
                    </div>

                    <div class="contact-info">
                            <svg viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        <p><?php echo esc_html(get_field('footer_email', $footer_id)); ?></p>
                    </div>
                </div>

                
                <div class="footer-section">
                    <h3><?php echo esc_html(get_field('footer_company_name', $footer_id)); ?></h3>
                    <p><?php echo wp_kses_post(get_field('footer_company_desc', $footer_id)); ?></p>
                </div>
            </div>
        </div>
    </footer>
    <?php endif; ?>

</html>
