<?php
/*
Plugin Name: WordPress Unit Test Demo
Description: Demonstrates how to build unit tests with WordPress
Author: Carl Alexander
Author URI: https://carlalexander.ca
*/

# unit-tested-plugin.php

namespace UnitTestDemo;

function demo_get_option($name, $default = null)
{
    $option = get_option('demo_' . $name, $default);

    if (is_array($default) && !is_array($option)) {
        $option = (array) $option;
    }

    return $option;
}
