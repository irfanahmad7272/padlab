<?php
/**
* Template for displaying listing custom post type entries
*/
?>

<div class="tile listing-tile">
	<div class="ratio-3-2">
		<div class="ratio-sub-wrap">
			<i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>
			<a href="<?php the_permalink(); ?>">
				<img src="<?php the_field('images'); ?>" alt="<?php the_title(); ?>" class="tile-listing-img">
				<span class="listing-price">
					<?php the_field('price');?>
				</span>
			</a>
		</div>
	</div>
	<div class="tile-info-wrap">
		<span class="tile-title listing-title">
			<a href="<?php the_permalink(); ?>"><?php the_field('address'); echo "&nbsp".the_field('unit'); echo ", "; the_field('city'); ?></a>
		</span>
		<span class="listing-info">
			
			<?php 

				$output = get_field('sq_ft');
				$sq_ft = number_format($output,0,'',',');
				echo "House | ";the_field(''); 
				the_field('bed');echo ' Bd | ';
				the_field('bath'); echo ' Ba | ';
				echo $sq_ft." Sf";

			?>
					
		</span>
		<span class="listing-mls">
			MLS# 5463535<?php the_field('mls'); ?>
		</span>
	</div>
</div>