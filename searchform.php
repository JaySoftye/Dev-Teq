
<form role="search" method="get" class="search-form search-form" action="<?php echo home_url( '/' ); ?>">
	<button type="button" class="search-open"></button>
	<div class="input-group">
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Search …" value="" name="s">
		<input type="hidden" class="search-submit" value="search">
	</div>
</form>

<script type="text/javascript">
	$(document).ready(function(){
  	$("button.search-open").click(function(){
    	$(".search-form div.input-group").toggleClass("active", 300);
    });
	});
</script>
