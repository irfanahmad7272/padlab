<?php
/**
* Template for displaying agent custom post type entries
*/
?>

<div class="tile agent-tile">
	<a href="<?php the_permalink(); ?>">
		<div class="ratio-1-1">
			<div class="ratio-sub-wrap">
				<div class="tile-img-wrap">
					<img src="<?php the_field('person_image'); ?>" alt="<?php the_title(); ?>" class="tile-img tile-agents-img">
				</div>
			</div>
		</div>
		<div class="tile-info-wrap">
			<h2 class="tile-title agent-title"><?php the_title(); ?></h2>
			<p><?php the_field('person_phone'); ?></p>
		</div>
	</a>
</div>