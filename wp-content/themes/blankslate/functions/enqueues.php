<?php

function portfolio_enqueues() {
    
        //Custom theme CSS
    wp_register_style('portfolio-css', get_template_directory_uri() . '/css/main.css', false, null);
    wp_enqueue_style('portfolio-css');

    //GSAP TweenMax
    wp_register_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js', false, '1.20.3', true);
    wp_enqueue_script('gsap-js');
    
}


add_action('wp_enqueue_scripts', 'portfolio_enqueues', 100);
?>