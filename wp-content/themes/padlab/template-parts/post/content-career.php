<?php
/**
* Template for displaying Career Positions on Careers Page
*/
?>

<div class="career-position-item">
	<div class="career-position-title">
		<i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
		<h3 class="serif"><?php the_title(); ?></h3>
	</div>
	<div class="career-position-description">
		<p><?php the_field('position_description'); ?></p>
		<div class="btn career-apply-btn">
			<span>Apply</span>
		</div>
	</div>
</div>