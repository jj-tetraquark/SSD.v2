<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- Load the Favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />

    <title>
      <?php 
        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
          echo " | $site_description";
        if ( $paged >= 2 || $page >= 2 )
          echo ' | ' . sprintf( __( 'Page %s', 'Superstar Destroyer' ), max( $paged, $page ) );
      ?>
    </title>


    <!-- Load the standard stylesheet -->
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" rel="stylesheet" />
    
    <!-- Scripts -->
    <?php wp_enqueue_script("jquery"); // Load jQuery ?>
    <?php wp_head(); ?>

    <!-- Hover intent -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/hoverIntent.js" charset="utf-8"></script>

    <!-- Load the scripts for dynamic CSS -->
        <script type="text/javascript" charset="utf-8">    
          // need to specify a var that can be called to get the template dir in adapt_config.js
          var templateDir = "<?php bloginfo('template_directory') ?>";
        </script>

      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/adapt_config.js" charset="utf-8"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/adapt.min.js" charset="utf-8"></script>
 
    <script type="text/javascript" charset="utf-8">
      <!--
      jQuery(document).ready(function ($) { 
           
         var config = {    
           over: function () {$('ul', this).slideDown('fast');},  // function = onMouseOver callback (REQUIRED)    
           timeout: 250, // number = milliseconds delay before onMouseOut    
           out:  function () {$('ul', this).slideUp('fast');}, // function = onMouseOut callback (REQUIRED)   
         interval: 100
              };
              
      $('#nav li').hoverIntent(config); 

        var social_config = {
          over: function() {$('div',this).fadeIn('fast');},
          timeout: 300,
          out: function() {$('div', this).fadeOut('fast');},
          interval: 100
          };

      $('#socialbuttons li').hoverIntent(social_config);
      });
    -->
    </script>

  </head>
  <body>
    <div id="fb-root"></div>
      <script>
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

    <div id="header"><a id="headerlink" href="http://www.superstardestroyer.co.uk">Home</a>
      <div id="mailing">              
      <form name="mailing" action="http://www.fanbridge.com/signup/fansignup_form.php?userid=145307" method="post"> 
        <span class="bebas">List:</span>
        <input type="text" name="email" id="email" class="in_underline shortbar" value="your@email.com" onfocus="if (this.value == 'your@email.com') {this.value = '';}" onblur="if (this.value == '') {this.value = 'your@email.com';}"> 
        <span class="bebas"><a onclick="if(document.mailing.email.value != 'your@email.com') {this.href='javaScript:document.mailing.submit()';}" href="">Submit</a></span>
      </form>
    </div>
</div>
        <div id="navbar">
      <ul id="nav">
        <?php wp_list_pages('sort_column=menu_order&depth=2&title_li=');?>
      </ul>
    </div>
<!--- END OF HEADER -->

