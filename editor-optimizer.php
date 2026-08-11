<?php
/**
 * Plugin Name: Editor Optimizer
 * Plugin URI:  https://wpstack.online/wpstack-plugin/miracuves-editor-optimizer/
 * Description: Accelerate Elementor editor loading times by optimizing memory allocation, widget assets, and Heartbeat requests.
 * Version:     1.0.0
 * Author:      WPStack Studio
 * Author URI:  https://wpstack.online/
 * License:     GPLv3 or later
 * Text Domain: editor-optimizer
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_init', function() {
    if (isset($_GET['action']) && $_GET['action'] === 'elementor') {
        @ini_set('memory_limit', '512M');
    }
});
