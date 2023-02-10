<?php

/**
 * Trigger this file on Plugin uninstallation
 * 
 * @package CustomPlugin
 */

 //security check

 if (! defined('WP_UNINSTALL_PLUGIN')){
    die;
 }

 //delete from DB
global $wpdb;
$wpdb->query("DELETE FROM wp_posts WHERE post_type='info'");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id from wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)");
