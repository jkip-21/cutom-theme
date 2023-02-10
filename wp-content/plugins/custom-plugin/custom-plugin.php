<?php
/**
 *  @package Custom-User-Registration
 */

/*
    Plugin Name: User Registration
    Plugin URI: http://.............
    Description: This is my user registration plugin
    Version: 1.0.0
    Author: Jonah
    Author URI: http://.........
    Licence: GPLv2 or later
    Text Domain: user-registration
*/

/**
 * Securing A plugin
 */

defined('ABSPATH') or die('Hey you hacker, got you!');



class UserReg{
    function __construct(){
        $this->pass_data_to_db();   
    }

    function activate(){
        $this->create_table_to_db();
        flush_rewrite_rules();
    }

    function deactivate(){
        // flush rewrite rules
        flush_rewrite_rules();
    }

    function create_table_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'users';
        // $charset = $wpdb->get_charset_collate();

        $user_details = "CREATE TABLE ".$table_name."(
            username text NOT NULL,
            useremail text NOT NULL,
            userphone text NOT NULL,
            userpassword text NOT NULL
        );";

        // $user_details = "CREATE TABLE `wp_users` (name text NOT NULL, email text NOT NULL, phone text NOT NULL, password text NOT NULL)";

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($user_details);
    }

    function pass_data_to_db(){
        if (isset($_POST['submitbtn'])){
            $data = array(
                'username'=>$_POST['username'],
                'useremail'=>$_POST['useremail'],
                'userphone'=>$_POST['userphone'],
                'userpassword'=>$_POST['userpassword']
            );
            global $wpdb;
            $tableName= 'wp_users';
            $result = $wpdb->insert($tableName, $data, $format=NULL);
        
            if($result == true){
                echo "<script>alert('User Registered Successfully');</script>";
            }else{
                echo "<script>alert('Unable to Register');</script>";
            }
        }
    }
}

if (class_exists('UserReg')){
    $userRegInstance = new UserReg();
}

//activation
register_activation_hook(__FILE__, array($userRegInstance, 'activate'));

//deactivate
register_deactivation_hook(__FILE__, array($userRegInstance, 'deactivate'));

//
// register_uninstall_hook(__FILE__, array($userRegInstance, 'uninstall'));