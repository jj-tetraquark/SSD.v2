<?php get_header(); ?>

    <div id="wrapper">
      <div id="posts">
      <?php 
        // start the loop
        if (have_posts()) : 
          while (have_posts()) : the_post(); 
      ?>
        <div class="entry" id="post-<?php the_ID(); ?>"> 
        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permenant link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <span class="smallgrey">Posted by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a> <?php the_time('F jS, Y'); ?></span>
          <div class="entry_text">
            <?php the_content(); ?>
          </div>
        <p><a href="<?php comments_link(); ?>" title="read or leave comments" >Comments for this post</a></p>
        <p>Tags:<span class="smallgrey"><?php the_tags('',',','<br />'); ?></span></p>
      </div>
      <?php
        endwhile;
        endif;
      ?>
        <div style="text-align:center;">
          <h5><?php next_posts_link('Older Posts'); ?></h5>
          <h5><?php previous_posts_link('Newer Posts'); ?></h5>
        </div>
    </div>
      <?php get_sidebar(); ?>
    <div class="push"></div>
  </div>
      <?php get_footer(); ?> 
