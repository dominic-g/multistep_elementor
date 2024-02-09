<?php
/**
 * Plugin Name: Elementor Mutlistep Addon
 * Description: Seamlessly integrated with Elementor,
 *             this addon empowers you to create multi-step forms, multi-step popups.
 * Version: 1.0.0
 * Author: Dominic Gitau
 * Text Domain: elementor-multistep-addon
 * 
 * @category Elementor,_Addon,_Form
 * @package  ElementorMultistepAddon
 * @author   Dominic Gitau <dominicnjoroge2@gmail.com>
 * @license  <GPL2 class="0"></GPL2>
 * @link     https://github.com/dominic-g/multistep_elementor
 */

if (!defined('ABSPATH') ) {
    exit;
}

/**
 * Main Elementor Mutlistep Addon Class
 *  
 * @category Elementor,_Addon,_Form
 * @package  ElementorMultistepAddon
 * @author   Dominic Gitau <dominicnjoroge2@gmail.com>
 * @license  <GPL2 class="0"></GPL2>
 * @link     https://github.com/dominic-g/multistep_elementor
 */
class Elementor_Mutlistep_Addon
{

    /**
     * Constructor
     */
    public function __construct() 
    {
        $callback = array($this, 'registerWidgets');
        add_action('elementor/widgets/widgets_registered', $callback);
    }

    /**
     * Register Widgets
     * 
     * @return null
     */
    public function registerWidgets() 
    {
        // Include widget file
        $pluginDir = plugin_dir_path(__FILE__);
        include_once $pluginDir . 'widgets/multistep-widget.php';

        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Elementor_Multistep_Widget());
    }
}
