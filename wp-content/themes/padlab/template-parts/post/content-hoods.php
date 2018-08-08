<?php
/**
* Template for displaying Neighborhoods and Developments on Front Page
*/
?>

<div class="tile neighborhood-tile">
	<a href="<?php the_permalink(); ?>">
		<div class="ratio-1-1">
			<div class="ratio-sub-wrap">
				<div class="tile-img-wrap text-overlay">
					<img src="<?php the_field('featured_image'); ?>" alt="<?php the_title(); ?>" class="tile-img">
					<h3 class="tile-title hood-title"><?php the_title(); ?></h3>	
				</div>
			</div>
		</div>
	</a>
</div>