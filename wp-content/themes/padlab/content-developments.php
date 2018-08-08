<?php
/**
* Template for displaying neighborhood custom post type entries
*/
?>

<a href="<?php the_permalink(); ?>" class="hoods-tile">
	<img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" class="tile-img">
	<h2 class="tile-title"><?php the_title(); ?></h2>
</a>