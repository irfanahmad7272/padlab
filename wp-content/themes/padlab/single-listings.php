<?php
get_header();
get_template_part('template-parts/post/share', 'modal');
?>
<!-- HERO IMAGE -->
<section>
    <div class="hero" style="background-image: url(<?php the_field('images'); ?>)">
        <div class="hero-text-box">
            <h1>

            <?php
                if( get_field('page_title') ) {
                    echo the_field('page_title'); 
                }
                else the_title();
            ?>          

            </h1>
            <p><?php the_field(''); ?></p>
        </div>
    </div>
</section>

<!-- Banner Section -->

<section class="sub-nav">
    <div class="sub-nav-inner mw-1040">
    	<ul>
    		<li class="sub-nav-items">About</li>
    		<li class="sub-nav-items">Statistics</li>
    		<li class="sub-nav-items">Location</li>
    		<li class="sub-nav-items">Real Estate</li>
    		<li class="sub-nav-items open-share">Share</li>
    	</ul>
    </div>
</section>

    <!-- Main Content 2/3 Column -->
<div class="page-wrap mw-1040">

    <section class="neighborhood-wrap">
        <div class="neighborhood-inner">
            <div class="neighborhood-main-column">
                <h2 class="neighborhood-heading">The Neighborhood</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                <!-- Neighborhood Pics -->

                <div class="neighborhood-pics">
                    <div class="neighborhood-pic-1">
                    </div>
                    <div class="neighborhood-pic-2">
                    </div>
                    <div class="neighborhood-pic-3">
                    </div>
                </div>

                <!-- Neighborhood Stats -->

                <div class="neighborhood-stats">
                    <div class="neighborhood-stats-row">
                        <div class="stat-item-box">
                            <span class="stat-figure">54</span>
                            <span class="stat-title">Median<br>Age</span>
                        </div>
                        <div class="stat-item-box">
                            <span class="stat-figure">3</span>
                            <span class="stat-title">Household<br>Size</span>
                        </div>
                        <div class="stat-item-box">
                            <span class="stat-figure">$80k</span>
                            <span class="stat-title">Household<br>Income</span>
                        </div>
                        <div class="stat-item-box">
                            <span class="stat-figure">73%</span>
                            <span class="stat-title">Owner<br>Occupant</span>
                        </div>
                    </div>
                    <div class="neighborhood-stats-row">
                        <div class="stat-item-box">
                            <span class="stat-figure">120</span>
                            <span class="stat-title">Active Homes<br>on Market</span>
                        </div>
                        <div class="stat-item-box">
                            <span class="stat-figure">$80k</span>
                            <span class="stat-title">Household<br>Income</span>
                        </div>
                        <div class="stat-item-box">
                            <span class="stat-figure">$80k</span>
                            <span class="stat-title">Household<br>Income</span>
                        </div>
                        <div class="stat-item-box">
                            <span class="stat-figure">$80k</span>
                            <span class="stat-title">Household<br>Income</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <hr class="hr-inner"> -->
            <!-- Map Container -->

            <div class="neighborhood-map-outer">
                <h2 class="neighborhood-heading trail-line">Location</h2>
                <div class="neighborhood-map-wrap">
                    <div class="neighborhood-map-buttons">
                        <button>Satellite View</button>
                        <button>Street View</button>
                        <button>Schools</button>
                        <button>Crime</button>
                    </div>
                    <div class="neighborhood-map">

                        <!-- Insert Google Map Code Here -->

                    </div>
                </div>
            </div>
        </div>

        <!-- Neighboorhood Sidebar -->

        <div class="neighborhood-sidebar">
            <div>
                <h2 class="neighborhood-heading">Our Agent</h2>
                <?php
                    $args = array(
                        'post_type' => 'people',
                        'orderby' => 'rand',
                        'posts_per_page' => 1
                    );
                    $the_query = new WP_Query( $args );
                
                    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    get_template_part( 'template-parts/post/neighborhood', 'agent' );
                    endwhile; endif;
                ?>
                <button class="contact-agent">Contact Me</button>
            </div>

            <!-- CTA Sidebar -->

            <div class="neighborhood-newsletter-cta">
                <h2 class="neighborhood-heading">Newsletter</h2>
                <input type="text" placeholder="Email">
                <input type="submit">
            </div>
        </div>
    </section>
    <!-- <hr> -->

    <!-- Real Estate Listings -->

    <section class="neighborhood-listings">

        <h2 class="neighborhood-heading trail-line">Real Estate</h2>
        <div class="neighborhood-listings-controls">
            <div class="neighborhood-listings-counter">
                <!-- Code here that will display actual number of listings from MLS -->
                <span>120 Available Listings - Here are just a few</span>
            </div>
            <div class="neighborhood-listings-more">
                <a href="">See all<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="neighborhood-listings-wrap">
            <?php
                $args = array(
                    'post_type' => 'listings',
                    'orderby' => 'rand',
                    'posts_per_page' => -1
                );
                $the_query = new WP_Query( $args );
            
                if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                get_template_part( 'template-parts/post/listing', 'overlayed' );
                endwhile; endif;
            ?>
        </div>
    </section>
    <!-- <hr> -->

    <!-- Similar Neighborhoods -->

    <section class="neighborhood-similars">
        <h2 class="neighborhood-heading trail-line">Simliar Neighborhoods</h2>
        <div class="neighborhood-listings-controls">
            <div class="neighborhood-listings-counter">
                <span>8 Nearby Neighborhoods</span>
            </div>
            <div class="neighborhood-listings-more">
                <a href="">See all<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="neighborhood-similars-wrap">
            <?php
                $args = array(
                    'post_type' => 'neighborhoods',
                    'orderby' => 'rand',
                    'posts_per_page' => 8
                );
                $the_query = new WP_Query( $args );
            
                if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                get_template_part( 'template-parts/post/content', 'hoods' );
                endwhile; endif;
            ?>
        </div>
    </section>

</div>

<?php

get_template_part('template-parts/post/content','subscribe');

get_footer();

?>

























