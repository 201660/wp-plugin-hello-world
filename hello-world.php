<?php
/**
 * Plugin Name: Hello World Shortcode
 * Description: A simple plugin that adds a shortcode to display "Hello world".
 * Version: 1.0
 * Author: bcorlett
 * License: GPLv2 or later
 */

 function hello_world_shortcode() {
    return 'Hello world!';
  }

  add_shortcode('hello_world', 'hello_world_shortcode');


  