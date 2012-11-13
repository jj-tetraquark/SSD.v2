<?php get_header(); ?>

    <div id="wrapper">
      <?php 
        // start the loop
        if (have_posts()) : 
          while (have_posts()) : the_post(); 
      ?>
        <div id="pagetext"> 
        <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
      <?php
        endwhile;
        endif;
      ?>
      <div class="push"></div>
    </div>
      <?php get_footer(); ?> 
