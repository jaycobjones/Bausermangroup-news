<?php
/*
Plugin Name: Bauserman Group News
Description: This plugin was created to stay up to date with the bausermangroup.
Author: Jaycob Jones
Version: 1.1
*/

/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function example_add_dashboard_widgets() {

    wp_add_dashboard_widget(
        'example_dashboard_widget',         // Widget slug.
        'Bauserman Group News',         // Title.
        'example_dashboard_widget_function' // Display function.
    );
}
add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function example_dashboard_widget_function() {

    // Display whatever it is you want to show.
    echo test();
}

function test(){

    ob_start();
    include("includes/rss.php"); //would normally get printed to the screen/output to browser
    $output = ob_get_contents();
    ob_end_clean();

    return $output;

}