<div id="sidebar">
      <form id="searchform" method="get" action="/index.php"> 
         <input type="text" name="s" id="s" class="in_underline"/>
         <span class="blacklink" style="font-size:18px; font-weight:bold;"><a href='javaScript:document.searchform.submit()'>Submit</a></span>
      </form>
      <h5 style="margin-top:18px">Recent Posts</h5>
      <ul class="blacklink">
        <?php wp_get_archives('type=postbypost&limit=4&format=html'); ?>
      </ul>
      <h5 style="margin-top:18px;">Archives</h5>
      <ul class="blacklink">
        <?php wp_get_archives('type=monthly&limit=9'); ?>
      </div>



