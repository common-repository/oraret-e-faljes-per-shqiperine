<?php
/*
Plugin Name: Oraret e faljes per Shqiperine
Plugin URI: https://www.xhamiaime.al/oraret-e-faljes
Description: Ky plugin &#235;sht&#235; widget p&#235;r oraret e faljes n&#235; shqip&#235;ri nga www.xhamiaime.al.
Version: 2.0
Author: Laboratori.al p&#235;r xhamiaime.al
Author URI: https://www.laboratori.al
License: GPL2
*/

// Register the widget
function Oraret_e_faljes_per_Shqiperine_register_iframe_widget() {
    register_widget( 'Oraret_e_faljes_per_Shqiperine_Iframe_Widget' );
}
add_action( 'widgets_init', 'Oraret_e_faljes_per_Shqiperine_register_iframe_widget' );

// Define the widget class
class Oraret_e_faljes_per_Shqiperine_Iframe_Widget extends WP_Widget {

    // Set up the widget
    function __construct() {
        parent::__construct(
            'iframe_widget', // Base ID
            __( 'Oraret e faljes p&#235;r Shqip&#235;rin&#235;', 'text_domain' ), // Name
            array( 'description' => __( 'A widget to display an iframe.', 'text_domain' ), ) // Args
        );
    }

    // Display the widget
    public function widget( $args, $instance ) {
        $iframe_url = 'https://namazi.xhamiaime.al/';
        echo $args['before_widget'];
        echo '<div style="text-align: center;"> <iframe scrolling="no" allowfullscreen="" frameborder="0" height="138" src="' . esc_url( $iframe_url ) . '" width="300"></iframe> <div>';
        echo $args['after_widget'];
    }
}