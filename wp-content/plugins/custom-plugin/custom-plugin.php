<?php 
/**
 * @package CustomPlugin
 */
/*
 plugin Name: Custom Plugin
 plugin URI: http://.......
 Description: First plugin
 Version: 1.0
 Author: Kiptoo
 Author URI: http://jonah
 License: GPLv2 or Later
 Text Domain: custom-plugin
 */

 /*
 Securing a plugin
 method 1
 */
if(!defined('ABSPATH')){
    die;
}
 /*
 Securing a plugin
 method 2
 */
defined('ABSPATH') or die('Got you!');
 /*
 Securing a plugin
 method 3
 */
if(!function_exists('add_action')){
    echo 'Got you!';
    exit;
}
class CustomPlugin{
    function __construct(){
        add_action('init', array($this, 'custom_post_type'));
    }
    function activate(){
        //rewrites the flush rules
        // echo 'The plugin was activated';
        $this->custom_post_type();
        flush_rewrite_rules();
    }
    function deactivate(){
        //flush rewrite rules
        // echo 'The Plugin is deactivated';
        flush_rewrite_rules();
}
//unistalling plugin
    function uninstall_plugin()
    {
        
    }
//creating custom post type
    function custom_post_type(){
        register_post_type(
            'book',
            ['public' => true, 'label'=>'Books']
        );
    }
}
if (class_exists('CustomPlugin')) {
    $custoPluginInstance = new CustomPlugin();
}//activation
register_activation_hook(__FILE__,array($custoPluginInstance, 'activate'));
//deactivate function
register_deactivation_hook(__FILE__, array($custoPluginInstance, 'deactivate'));
// register_uninstall_hook(__FILE__,array($custoPluginInstance),'uninstall_plugin');
?>