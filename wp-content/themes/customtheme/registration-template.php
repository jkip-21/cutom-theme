<?php 
/**
 * Template Name: User Registration
 */

get_header();
?>

<div class="row justify-content-center">
    <form action="" method="post" style="width:40vw; box-shadow:3px 3px 3px 3px 3px grey; padding:30px;">
        <div class="form-group">
            <input type="text" class="form-control input-sm mb-4" name="username", id="name" placeholder="Input Username">
        </div>
        <div class="form-group">
            <input type="email" class="form-control input-sm mb-4" name="useremail" id="email", placeholder="janedoe@example.com">
        </div>
        <div class="form-group">
            <input type="tel" name="userphone" class="form-control input-sm mb-4" id="phone" placeholder="Input phone number">
        </div>
        <div class="form-group">
            <input type="password" name="userpassword" class="form-control input-sm mb-4" id="password" placeholder="Input password">
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <input type="submit" value="Register" name="submitbtn" class="btn btn-primary">
            </div>
        </div>
        </div>
       
    </form>
</div>
<?php get_footer();?>