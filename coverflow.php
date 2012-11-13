<?php 
/*
 * Template Name: CoverFlow
 */

get_header(); ?>
<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/contentflow.js"></script>
    <script tyle="text/javascript">
        var cf = new ContentFlow('contentFlow', {reflectionColor: "#000000"});
    </script>

    <div id="wrapper">
      <?php 
        // start the loop
        if (have_posts()) : 
          while (have_posts()) : the_post(); 
      ?>
        <div id="pagetext"> 
        <h1><?php the_title(); ?></h1>
          <div id="contentFlow" class="ContentFlow">
              <!-- should be place before flow so that contained images will be loaded first -->
              <div class="loadIndicator"><div class="indicator"></div></div>

              <div class="flow">

                  <div class="item">
                      <div class=content">THIS IS SOME SMASHING CONTENT DAWG!</div>
                      <div class="caption">pic0: some stripes</div>
                  </div>
                  <div class="item">
                  <img class="content" src="<?php bloginfo('template_directory'); ?>/coverflow_temp/1.jpg" />
                  <div class="caption"><h4>Nowhere Again - Now I Am Twenty</h4>Debut E.P from our favourite shoegaze/prog/grunge band</div>
                  </div>
                  <div class="item">
                      <img class="content" src="pics/pic2.png"/>
                      <div class="caption">pic2: some stripes</div>
                  </div>
                  <div class="item">
                      <img class="content" src="pics/pic1.png"/>
                      <div class="caption">pic1: some stripes</div>
                  </div>

                  <div class="item">
                      <img class="content" src="pics/pic0.png"/>
                      <div class="caption">pic0: some stripes</div>
                  </div>
                  <div class="item">
                      <img class="content" src="pics/pic1.png"/>
                      <div class="caption">pic1: some stripes</div>
                  </div>
                  <div class="item">
                      <img class="content" src="pics/pic2.png"/>
                      <div class="caption">pic2: some stripes</div>
                  </div>
                  <div class="item">
                      <img class="content" src="pics/pic1.png"/>
                      <div class="caption">pic1: some stripes</div>
                  </div>

                  <div class="item">
                      <img class="content" src="pics/pic0.png"/>
                      <div class="caption">pic0: some stripes</div>
                  </div>
                  <div class="item">
                      <img class="content" src="pics/pic1.png"/>
                      <div class="caption">pic1: some stripes</div>
                  </div>
                  <div class="item">
                      <img class="content" src="pics/pic2.png"/>
                      <div class="caption">pic2: some stripes</div>
                  </div>
                  <div class="item">
                      <img class="content" src="pics/pic1.png"/>
                      <div class="caption">pic1: some stripes</div>
                  </div>

              </div>
              <div class="globalCaption"></div>
              <div class="scrollbar">
                  <div class="slider"><div class="position"></div></div>
              </div>

            </div>


            <?php the_content(); ?>
        </div>
      <?php
        endwhile;
        endif;
      ?>
      <div class="push"></div>
    </div>
      <?php get_footer(); ?> 
