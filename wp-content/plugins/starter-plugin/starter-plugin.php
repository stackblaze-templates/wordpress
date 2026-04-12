<?php
/**
 * Plugin Name: Starter Plugin
 * Description: A starter plugin scaffold for custom WordPress development.
 * Version: 1.0.0
 * Author: StackBlaze
 */

if (!defined('ABSPATH')) {
    exit;
}

// Add a custom REST API endpoint
add_action('rest_api_init', function () {
    register_rest_route('starter/v1', '/hello', [
        'methods'  => 'GET',
        'callback' => function () {
            return ['message' => 'Hello from Starter Plugin!'];
        },
        'permission_callback' => '__return_true',
    ]);
});
