<?php
/**
* Template for displaying neighborhood custom post type entries
*/
?>
<div class="neighborhood-tile">
	<img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" class="tile-img">
	<h2><?php the_title(); ?></h2>
</div>