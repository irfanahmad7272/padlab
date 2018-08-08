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
	</a>
	<div class="tile-info-wrap tile-agent-info">
		<span class="tile-title tile-agent-name">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</span>
		<span class="tile-agent-phone"><?php the_field('person_phone'); ?></span>
	</div>
</div>