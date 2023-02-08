<h1>This is an aside post</h1>
<br>
   <?php the_title();?><br>
   <small><?php the_time();?></small>
   <div class="thumnail-img">
    <?php the_post_thumbnail('medium') ?>
   </div>
   <?php the_content();?>
   <?php the_category();?>