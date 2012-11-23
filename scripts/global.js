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
