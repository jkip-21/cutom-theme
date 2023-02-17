<?php
/**
 * Template Name: Contact Us Input Form
 */

 get_header();?>
<div class="row justify-content-center">
<form action="" method="post" style="width=50px">
<div class="form-group">
    <input type="text" name="name" id="name" placeholder="Full Name" class="form-control input-sm">
</div>
<div class="form-group">
    <input type="email" name="email" id="email" placeholder="Email Address" class="form-control input-sm">
</div>
<div class="form-group">
    <input type="text" name="message" id="message" placeholder="Message...." class="form-control input-sm">
</div>
<div class="row justify-content-center">
    <div class="
    col-xs-4 col-sm-4 col-md-4">
<input type="submit" value="Send" name="submitmsg" class="btn btn-success btnblock">
</div>
</div>
</form>
</div>






 <?php get_footer();?>