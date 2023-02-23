<?php

/**
 * @package ContactUs
 */
/**
 * Plugin Name: Contact Us Plugin
 * Plugin URI: http://jonah.....
 * Description: This is my contact plugin
 * version: 1.0.0
 * Author: Jonah
 * Author URI: http://jonah.....
 * 
 */

//  security check
if(!defined('ABSPATH')){
    die;
}
if (!class_exists('ContactUs')) {
    class ContactUs
    {
        public function __construct()
        {
            $this->pass_to_db();
        }

        public function activate()
        {
            $this->create_table_to_db();
            flush_rewrite_rules();
        }

        public function deactivate()
        {
            flush_rewrite_rules();
        }

        public function create_table_to_db()
        {
            global $wpdb;

            $table_name= $wpdb->prefix.'contact';
             $charset= $wpdb->get_charset_collate();

            $contactus="CREATE TABLE ".$table_name."(
                username text NOT NULL,
                email text NOT NULL,
                phone text NOT NULL,
                password text NOT NULL
            )$charset;";
            require_once(ABSPATH.'wp-admin/includes/upgrade.php');
            dbDelta($contactus);
        }

        public function pass_to_db()
        {
    if (isset($_POST['submitmsg'])) {
        $data = array(
            'username'=>$_POST['username'],
            'email'=>$_POST['email'],
            'phone'=>$_POST['phone'],
            'password'=>md5($_POST['password']),
        );
        global $wpdb;
        $table_name=$wpdb->prefix.'contact';
        $result=$wpdb->insert($table_name, $data, $format=null);

        if ($result == true) {
            echo "<script>alert('Message sent successfully')</script>";
        } else {
            echo "<script>alert('Message not sent')</script>";
        }
    }
}
    }
    $contactUsInstance = new ContactUs();

    // activate
    register_activation_hook(__FILE__, array($contactUsInstance ,'activate'));

    //deactivate
    register_deactivation_hook(__FILE__, array($contactUsInstance ,'deactivate'));
}