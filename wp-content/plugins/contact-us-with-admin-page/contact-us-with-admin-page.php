<?php

/**
 * @package ContactUsWithAdminPage
 */
/**
 * Plugin Name: Contact Us With Admin page
 * Plugin URI: http://kejje.....
 * Description: This is my contact plugin
 * versio: 1.0.0
 * Author: Jonah
 * Author URI: http://jonah.....
 * Licence: GPLv2 or Later
 * Text Domain: contact plugin
 */

//  security check
if(!defined('ABSPATH')){
    die;
}
if (!class_exists('ContactUsWithAdminPage')) {
class ContactUsWithAdminPage
{
    public function __construct()
    {
        $this->plugin == plugin_basename(__FILE__);
    }

    public function activate()
    {
        flush_rewrite_rules();
    }

    public function deactivate()
    {
        flush_rewrite_rules();
    }
    public$plugin;
    //register settings link in admin page
     function register(){
        add_action('admin_menu', array($this, 'add_admin_page'));

        add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
     }
     function settings_link($links){

        $settings_link = '<a href="admin.php?page=contact_plugn">Settings</a>';

        array_push($links, $settings_link);
        return $links;
     }
     //creating admin dashboard
     function  add_admin_page(){
        add_menu_page(
            'Contact us admin', 'Contact US', 'manage-options', 'contact_plugn',array($this, 'admin_index'), 'dashicons-image-filter', 110
        );
     }

     

     //callback
     function admin_index(){
        require_once(plugin_dir_path(__FILE__).'template/main.php');
     }

}
    $contactUsInstance = new ContactUsWithAdminPage();
    $contactUsInstance->register();
    // activate
    register_activation_hook(__FILE__, array($contactUsInstance ,'activate'));

    //deactivate
    register_deactivation_hook(__FILE__, array($contactUsInstance ,'deactivate'));
}