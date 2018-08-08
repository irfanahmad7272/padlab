<?php
/**
* Template for displaying listing custom post type entries
*/
?>

<div class="tile listing-tile">
	<div class="ratio-3-2">
		<div class="ratio-sub-wrap">
			<i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>
			<a href="<?php the_permalink(); ?>" target="_blank" class="listing-overlayed-link">
				<div class="listing-overlayed-tags">
					<span class="listing-overlayed-tag-item">Reduced Price</span>
				</div>
				<div class="listing-overlayed-info">
					<div class="listing-overlayed-details">
						<span class="listing-overlayed-price">
							<?php the_field('price');?>
						</span>
						<span class="listing-overlayed-bed"><?php the_field('bed'); echo ' Bd' ?></span>
						<span class="listing-overlayed-bath"><?php the_field('bath'); echo ' Ba' ?></span>
						<span class="listing-overlayed-sqft">
							<?php
								$output = get_field('sq_ft');
								$sq_ft = number_format($output,0,'',',');
								echo $sq_ft." Sf";
							?>
						</span>
					</div>
					<div class="listing-overlayed-details">
						<span class="listing-overlayed-address"><?php the_field('address'); echo "&nbsp".the_field('unit'); echo ", "; the_field('city'); ?></span>
						<!-- <span class="listing-overlayed-mls">
							MLS# 5463535<?php the_field('mls'); ?>
						</span> -->
					</div>
				</div>
				<img src="<?php the_field('images'); ?>" alt="<?php the_title(); ?>">
			</a>
		</div>
	</div>
</div>