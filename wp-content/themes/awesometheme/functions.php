<?php
function awesome_script_enqueue(){

    /*
        Registers the style to the header
        PARAMETERS:
        1. A unique name for the stylesheet
        2. URL of the stylesheet (full URL)
        3. An array of dependencies
        4. Version of the stylesheet (string | false, if equal to installed WP version | null, if no version is added)
        5. Media queries. Could be 'all', 'screen', 'print', '(orientation: portrait)', '(max-width: 640px)', etc.
    */
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');

    //LAST PARAMETER: [bool] whether to enqueue the script before the `</body>` insted of in the `<head>`
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
}

function awesome_theme_setup(){
    /**
     * Registers support for Menus
     */
    add_theme_support('menus');    

    /**
     * Registers a navigation menu location for a theme.
     */
    register_nav_menu('primary', 'Primary Header Navigation');
}

//tells WP to execute a function
/**
 * PARAMETERS:
 * 1. The name of the action
 * 2. Function to be added (WP will call this function)
 * 3. (optional) Priority, order in which functions are called. The lower the number, the earlier it will be called.
 * 4. The number of arguments the funcion will accept.
 */
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');
add_action('init', 'awesome_theme_setup');

?>