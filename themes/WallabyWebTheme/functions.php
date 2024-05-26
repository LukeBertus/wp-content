<?php

function theme_files() {
    /* wp_deregister_script('jquery'); */
    // jQuery
    /* wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, true);
    wp_script_add_data('jquery', 'integrity', 'sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=');
    wp_script_add_data('jquery', 'crossorigin', 'anonymous'); */

    // Popper.js
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), null, true);
    wp_script_add_data('popper', 'integrity', 'sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo');
    wp_script_add_data('popper', 'crossorigin', 'anonymous');

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js', array('jquery', 'popper'), null, true);
    wp_script_add_data('bootstrap-js', 'integrity', 'sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6');
    wp_script_add_data('bootstrap-js', 'crossorigin', 'anonymous');

    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css');
    wp_style_add_data('bootstrap', 'integrity', 'sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh');
    wp_style_add_data('bootstrap', 'crossorigin', 'anonymous');

    // Register AOS styles
    wp_register_style('aos-style', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), '2.3.1');
    // Register AOS script
    wp_register_script('aos-script', "https://unpkg.com/aos@2.3.1/dist/aos.js", array(), '2.3.1', true);
    // Enqueue AOS styles and script
    wp_enqueue_style('aos-style');
    wp_enqueue_script('aos-script');
    // Initialize AOS
    wp_add_inline_script('aos-script', 'AOS.init();');
    
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', array(), null);
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_script('main-wallaby-js', get_theme_file_uri('/bundle.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('wallaby_main_styles', get_theme_file_uri('/styles.css'));

}
add_action('wp_enqueue_scripts', 'theme_files');

function register_ajax() {
        // Register AJAX the script
        wp_register_script('ajax', get_template_directory_uri() . '/src/ajax.js', array('jquery'), '1.0', true);

        // Localize the script with new data
        $script_data_array = array(
            'ajax_url' => admin_url('admin-ajax.php')
        );
        wp_localize_script('ajax', 'my_script_data', $script_data_array);
    
        // Enqueued script with localized data
        wp_enqueue_script('ajax');
    }
add_action('wp_enqueue_scripts', 'register_ajax');

// Allow HTML in Emails
function set_html_mail_content_type() {
    return 'text/html';
}
add_filter( 'wp_mail_content_type', 'set_html_mail_content_type' );

function handle_my_form_action() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the message from the form
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = nl2br('<br>' . sanitize_textarea_field($_POST['message']));
        $businessName = sanitize_textarea_field($_POST['businessName']);
        $businessUrl = sanitize_textarea_field($_POST['businessUrl']);

        $to = 'services@wallabyweb.com.au';
        $subject = 'New message from ' . $name;

        $body = "<p style='color: black'><strong>Name:</strong> $name<br> <strong>Email:</strong> $email<br> <strong>Business Name:</strong> $businessName<br> <strong>Business URL:</strong> $businessUrl<br> <strong>Message:</strong> $message<br></p>";

        // Send the email
        if (wp_mail($to, $subject, $body)) {
            echo "Message sent successfully, we will get back to you soon.";
        } else {
            echo "Email sending failed, Please try again later.";
        }
    }

    // Don't forget to stop execution afterward
    wp_die();
}
add_action('wp_ajax_my_form_action', 'handle_my_form_action'); // For logged in users
add_action('wp_ajax_nopriv_my_form_action', 'handle_my_form_action'); // For non-logged in users

// Disable Elementor Smooth Scrolling
add_action( 'wp_enqueue_scripts', function() {
    wp_add_inline_script( 'elementor-frontend', "jQuery(window).on('elementor/frontend/init',function(){if(typeof elementorFrontend==='undefined'){return}elementorFrontend.on('components:init',function(){elementorFrontend.utils.anchors.setSettings('selectors.targets','.dummy-selector')})});" );
 } );