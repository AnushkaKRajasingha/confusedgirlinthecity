<div id="sidebar" class="span4 sidebar">
	<?php 
	if(get_the_ID() != 1191){ 
		
	if ( is_paged() ) {
		
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-sidebar') ) :
		endif;
	} else
	if (  is_front_page() ) {
		
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-sidebar') ) :
		endif;
	}

	elseif ( is_archive() ) {
		
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-sidebar') ) :
		endif;
	} else {
		
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('single-sidebar') ) :
		endif;
	}
	}
	?>
</div><!--/.sidebar-->