<?php
/*
 * @Author:Khalil khassep
 *
 */


// get custom scripts

function kh_add_scripts() {
  wp_enqueue_script('kh_scripts', get_template_directory_uri().'/src/scripts.min.js',[],false,true);

}
add_action('wp_enqueue_scripts','kh_add_scripts');

?>