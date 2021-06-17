
<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-wrapper">
      <div class="input-holder">
	  <input type="hidden" name="post_type" value="post" />
          <input type="text" class="search-input" placeholder="Type to search" value="" name="s"/>
          <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
      </div>
      <span class="close" onclick="searchToggle(this, event);"></span>
</form>