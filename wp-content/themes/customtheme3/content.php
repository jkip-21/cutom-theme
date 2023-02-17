<br>
   <?php the_title();?><br>
   <small><?php the_time();?></small>
   <div class="thumnail-img">
    <?php the_post_thumbnail('medium') ?>
   </div>
   <?php the_content();?>
   <?php the_category();?>