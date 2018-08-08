<?php
/**
* Template for displaying agent info on neighborhood page
*/
?>

<div class="neighborhood-agent-wrap">
	<div class="neighborhood-agent-img">
		<a href="<?php the_permalink(); ?>">
			<div class="ratio-1-1">
				<div class="ratio-sub-wrap">
					<div class="tile-img-wrap">
						<img src="<?php the_field('person_image'); ?>" alt="<?php the_title(); ?>" class="tile-img tile-agents-img">
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="neighborhood-agent-info">
		<span class="neighborhood-agent-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
		<span><?php the_field('person_title') ?></span>
		<span><?php the_field('person_phone'); ?></span>
		<span><?php the_field('person_email'); ?></span>
	</div>
</div>