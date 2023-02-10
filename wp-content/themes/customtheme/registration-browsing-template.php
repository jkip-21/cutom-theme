<?php
/**
 * Template Name: View Users
 */

 get_header();?>

 <?php 
    global $wpdb;
    $table = $wpdb->prefix.'users';
    $users = $wpdb->get_results("SELECT * FROM $table");
 ?>
<p>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
        </tr>
    </thead>
    <?php
    foreach($users as $user){?>
        <tr>
            <td><?php echo $user->username;?></td>
            <td><?php echo $user->useremail;?></td>
            <td><?php echo $user->userphone;?></td>
            <td><?php echo $user->userpassword;?></td>
        </tr>

   <?php }?>
</table>
</p>

 <?php get_footer(); ?>