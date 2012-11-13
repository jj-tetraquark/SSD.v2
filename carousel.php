<?php
/*
 * Template Name: Carousel
 */

<?php get_header(); ?>
    <script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/contentflow.js"></script> <script tyle="text/javascript">
        var cf = new ContentFlow('contentFlow', {reflectionColor: "#000000"});
    </script>


 <div class="ContentFlow">
            <div class="loadIndicator"><div class="indicator"></div></div>
            <div class="flow">
                <img class="item" src="someImageFile.jpg" title="Your_Image_Title"/>
                <!-- Add as many items as you like. -->
            </div>
            <div class="globalCaption"></div>
            <div class="scrollbar"><div class="slider"><div class="position"></div></div></div>
        </div>

    <div id="wrapper">
      <div id="posts ContentFlow">
        <div class="loadIndicator"><div class="indicator"></div></div>
        <div class="flow">
      <?php 
        // start the loop
        if (have_posts()) : 
          while (have_posts()) : the_post(); 
      ?>
        <div class="entry item" id="post-<?php the_ID(); ?>"> 
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
    </div>
  </div>
      <?php get_sidebar(); ?>
    <div class="push"></div>
  </div>
      <?php get_footer(); ?> 
