<?php get_header(); ?>

	<div class="listings-container">
		<!-- HERO SLIDER -->
		<section>
			<div class="listings-hero">
			</div>
		</section>

		<!-- LISTING BODY -->
		<section class="list-add-container">
			<div class="list-add-container-2">
				<div class="listing-address-row">
					<div class="listing-address"><!-- ADDRESS -->
						<h1><?php the_field('address') ?></h1>
					</div>
					<div class="listing-stats">
						<div class="stats-tile">
							<p>Price</p>
							<p class="key-stat"><?php the_field('price'); ?></p>
						</div>
						<div class="stats-tile">
							<p>Bed</p>
							<p class="key-stat"><?php the_field('bed'); ?></p>
						</div>
						<div class="stats-tile">
							<p>Bath</p>
							<p class="key-stat"><?php the_field('bath'); ?></p>
						</div>
						<div class="stats-tile">
							<p>Sq Foot</p>
							<p class="key-stat">

								<?php 
								$output = get_field('sq_ft');
								$price = number_format($output,0,'',',');
								echo $price;
								?>
								
							</p>
						</div>
						<div class="stats-tile">
							<p>Lot Sqft</p>
							<p class="key-stat">10,000</p>
						</div>
					</div>
					<div class="listing-share"><!-- SHARE ICONS -->
						<div class="listing-share-icons">
							<div>
								<a href="">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
								</a>
							</div>
							<div>
								<a href="">
									<i class="fa fa-facebook-official" aria-hidden="true"></i>
								</a>
							</div>
							<div>
								<a href="">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</a>
							</div>
							<div>
								<a href="">
									<i class="fa fa-print" aria-hidden="true"></i>
								</a>
							</div>
							<div>
								<a href="">
									<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div><!-- END SHARE ICONS -->
				</div>
			</div>
		</section>
		<section class="listing-body">

			<!--  AGENT & SCHEDULE CONTAINER -->
			<div class="agent-sched">
				<!-- LISTING AGENT CARD -->
				<div class="listing-agent">
					<h2>Listing Agent</h2>
					<?php

					$post_object = get_field('listing_agent');

					if( $post_object ): 

						// override $post
						$post = $post_object;
						setup_postdata( $post ); 
					?>
						    
					<a href="<?php the_permalink(); ?>"><img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" class="tile-img"></a>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h3><?php the_field('title'); ?></h3>
					<h3><?php the_field('phone'); ?></h3>
					<h3><?php the_field('email'); ?></h3>

			    	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					
					<?php endif; ?>
				</div>

				<!--  SCHEDULE -->
				<div class="schedule-tour">
					<h2>Schedule a Tour</h2>
					<div class="tour-calendar">
					</div>
				</div>
			</div>

			<!--  DESCRIPTION -->
			<div class="descrip-wrap col-9 c9-list">
				<h2>Description</h2>
				<p><?php the_field('description') ?></p>
			</div>

			<!--  DETAILS -->
			<div class="detail-wrap col-9 c9-list">
				<h2>Details</h2>
				<div class="detail-container">
					<ul>
						<li>
							<span class="detail-title">MLS#</span>
							<span class="detail-info">5500383</span>
						</li>
						<li>
							<span class="detail-title">Price</span>
							<span class="detail-info"><?php the_field('price'); ?></span>
						</li>
						<li>
							<span class="detail-title">Bed</span>
							<span class="detail-info"><?php the_field('bed'); ?></span>
						</li>
						<li>
							<span class="detail-title">Bath</span>
							<span class="detail-info"><?php the_field('bath'); ?></span>
						</li>
						<li>
							<span class="detail-title">Sq Ft</span>
							<span class="detail-info"><?php the_field('sq_ft'); ?></span>
						</li>
						<li>
							<span class="detail-title">Year Built</span>
							<span class="detail-info">2001</span>
						</li>
						<li>
							<span class="detail-title">Subdivision</span>
							<span class="detail-info">Scottsdale Shadows</span>
						</li>
					</ul>
					<ul>
						<li>
							<span class="detail-title">HOA Fee</span>
							<span class="detail-info">$467</span>
						</li>
						<li>
							<span class="detail-title">Frequency</span>
							<span class="detail-info">Monthly</span>
						</li>
						<li>
							<span class="detail-title">Taxes</span>
							<span class="detail-info">$1,600</span>
						</li>
						<li>
							<span class="detail-title">Type</span>
							<span class="detail-info">Condominium</span>
						</li>
						<li>
							<span class="detail-title">Lot Sf</span>
							<span class="detail-info">900</span>
						</li>
						<li>
							<span class="detail-title">Status</span>
							<span class="detail-info">Active</span>
						</li>
						<li>
							<span class="detail-title">Price/Sf</span>
							<span class="detail-info">$148/sf</span>
						</li>
					</ul>
				</div>
			</div>

			<!-- MAP -->
			<div class="listing-map c9-list">
				<span><h2>Map</h2></span>
				<div class="map-buttons">
					<a href="">SATELLITE VIEW</a> | <a href="">STREET VIEW</a>
				</div>
				<div class="map-container">
					<!-- AWESEOME MAP CODING GOES HERE -->
				</div>
			</div>

			<!-- NEIGHBORHOOD -->
			<div class="neighborhood-wrap col-9 c9-list">
			
				<?php
					$post_object = get_field('neighborhood');

					if( $post_object ): 

					// override $post
					$post = $post_object;
					setup_postdata( $post ); 
				?>
				
				<div class="neighborhood-container">
					<h2><?php the_title(); ?></h2>
					<div class="neghborhood-image">
						<img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" class="tile-img">
					</div>
					<p><?php the_field('description'); ?></p>
				</div>

		    	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		    	<?php endif; ?>

		    	<div class="neighborhood-stats">
		    		<div class="hood-stat">
		    			<p>Average<br>Sale Price</p>
		    			<span class="">$450k</span>
		    		</div>
		    		<div class="hood-stat">
		    			<p>Average<br>Price pef Sf</p>
		    			<span class="">$250/sf</span>
		    		</div>
		    		<div class="hood-stat">
		    			<p>Average<br>Days on Market</p>
		    			<span class="">63</span>
		    		</div>
		    		<div class="hood-stat">
		    			<p>Homes<br>on Market</p>
		    			<span class="">82</span>
		    		</div>
		    	</div>
	    	</div>

			<!-- SCHOOLS -->
			<div class="listSchools col-9 c9-list">
				<div class="listSchoolCard">
					<h2>Schools</h2>
					<div>
						<div class="schoolRank">
						</div>
						<h3> Navajo Elementary School</h3>
						<p> Public - Preschool to 6 - Serves this home</p>
					</div>
				</div>
			</div>

			<!-- MORTGAGE CALCULATOR -->
			<div class="listMortCalc col-9 c9-list">
				<h2>Mortgage Calculator</h2>
				<div class="listMortPayment">
					<span class="mortPayment">$1,502 per month</span>
					<p>30 Year Fixed, 3.890% Interest "i"</p>
					<div class="mortPaymentBar"></div>
					<div class="mortBreakDown">
						<ul>
							<li>Principal and Interest</li>
							<li>Property Taxes</li>
							<li>Homeowner's Insurance</li>
						</ul>
					</div>
				</div>
				<div class="listMortAdj">
					<h3>Home Price</h3>
					<input type="text">
					<h3>Down Payment</h3>
					<input type="text">
				</div>
			</div>

		</section>
		<!-- END LISTING BODY -->

		<!-- SIMILAR LISTINGS -->
		<section class="sim-list-container clearfix">
			<hr>
			<div class="similar-listings-carosel">
				<h2>Similar Listings</h2>
				<div class="sim-list-carosel"</div>
					<div class="sim-list-card">
						<div class="sim-list-img">
							<img>
						</div>
						<h3>$2,000</h3>
						<p>7930 E Camelback Rd #102, Scottsdale, AZ 85251</p>
						<p>2 Bed | 2 Bath | 1,200 Sf</p>
					</div>
					<div class="sim-list-card">
						<div class="sim-list-img">
							<img>
						</div>
						<h3>$2,000</h3>
						<p>7930 E Camelback Rd #102, Scottsdale, AZ 85251</p>
						<p>2 Bed | 2 Bath | 1,200 Sf</p>
					</div>
					<div class="sim-list-card">
						<div class="sim-list-img">
							<img>
						</div>
						<h3>$2,000</h3>
						<p>7930 E Camelback Rd #102, Scottsdale, AZ 85251</p>
						<p>2 Bed | 2 Bath | 1,200 Sf</p>
					</div>
				</div>
			</div>
		</section>
		<!-- END SIMILAR LISTINGS -->

		<?php get_template_part( 'content', 'subscribe' ); ?>

	</div>

	</div>

<?php get_footer(); ?>