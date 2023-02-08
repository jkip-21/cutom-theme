
<!-- add the header -->
<?php
/*
Template Name: Page No Date
*/
get_header();?>
<?php
// condition to display and check if there is a post
// $arg = array(
    // 'cat'=> 2
// );
// $fiction = new WP_Query($arg);
// if ($fiction->have_posts()):
//     while ($fiction->have_posts()):
//         $fiction->the_post();
//         echo the_title();
//         echo the_content();
    ?>
    <?php
    // the_post();?>
    <!-- fetching content from content.php -->
   <?php 
//    get_template_part(
    // 'content',
    // allowing users to use all the post formats
    // get_post_format()
    // ); 
    ?>
   <hr> 
   <?php
    // endwhile;
// else:
    // echo "<p>No posts found.</p>";
// endif;
// wp_reset_postdata();
?>
<div class="col-1"><?php
if(have_posts()):
    while(have_posts()): the_post();
?>
<?php get_template_part('content', get_post_format()); ?>
<?php 
endwhile;
else:
    echo '<p>No posts found.</p>';
endif;
?>
</div>

<!-- get sidebar -->
<?php get_sidebar();?>
<!-- add the footer -->
<?php get_footer();?>