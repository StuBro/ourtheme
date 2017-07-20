<?php
/*
 * @Author:Khalil khassep
 *
 */


// get custom scripts

function kh_add_scripts()
{
    wp_enqueue_script('kh_scripts', get_template_directory_uri() . '/src/scripts.min.js', [], false, true);

}

add_action('wp_enqueue_scripts', 'kh_add_scripts');


// function affter theme setup lunch these functions

function kh_theme_setup()
{

    function get_dir_of_site()
    {
        $dir = '';
        if (!is_rtl()):
            $dir = 'ltr';
            echo $dir;

        else:
            $dir = 'rtl';
            echo $dir;

        endif;

    }


}


add_action('after_setup_theme', 'kh_theme_setup');

?>