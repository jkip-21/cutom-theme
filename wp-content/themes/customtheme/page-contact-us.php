<!-- add the header -->
<?php get_header();?>
<?php
// condition to display and check if there is a post
if(have_posts()):
    while(have_posts()):?>
    <?php
    the_post();?>
   <h1><?php the_title();?></h1>
   <?php the_time()?>
   <p><b><i><?php the_content();?></i></b></p>
    
   <?php
    endwhile;
endif;
?>
<!-- add the footer -->
<?php get_footer();?>
 