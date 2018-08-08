<? get_header(); ?>

    <?php get_template_part( 'content', 'start' ); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <section class="hero-img">
        <!-- <video class="hero-vid" autoplay loop>
            <source src="http://res.cloudinary.com/svillabona-sites/video/upload/v1495087251/tempe_town_lake_02_kdbadb.mp4" type="video/mp4">
        </video> -->
        <div class="search-bar mw-700">
            <div class="search-wrapper">
                <div class="search-caption">
                    
                    <?php
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                        endwhile; endif;
                    ?>

                </div>
                <input type="text" placeholder="City, Neighborhood, Address, Zip or MLS#" class="search-input">
                <div class="search-buttons">
                    <button id="home-search" type="submit" value="Search">Search</button>
                </div>
            </div>
        </div>
    </section>

    <section class="motto-row">
        <div class="motto-container mw-700">
            <h2 class="serif">Real Estate, Tailor Fit</h2>
            <p>We work hard at our job to make your home search that much easier. Finding your next home should be fun and exciting. Let us show you how we've changed the game. Your real estate search starts and ends here.</p>
            <button id="get-started" type="button" value="Get Started">Get Started</button>
        </div>
    </section>

    <section class="row neighborhoods-row mw-1040">
        <div class="row-header">
            <div class="row-title">
                <h2 class="section-title">
                    <span class="break-text">Neighborhoods</span>
                </h2>
            </div>
            <!-- <div class="btn view-more">
                <a href="" class="btn-link">
                    <span class="btn-text">View More</span>
                </a>
            </div> -->
            <div class="neighborhood-listings-more">
                <a href="/villagroupre.com/neighborhoods/">See all<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="row-tiles">
            <div class="row-scrollable"> 

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
        </div>
    </section>

    <hr class="mw-1040">

    <section class="row featured-listings mw-1040">
        <div class="row-header">
            <div class="row-title">
                <h2 class="section-title">
                    <span class="break-text">Featured Listings</span>
                </h2>
            </div>
            <!-- <div class="btn view-more">
                <a href="" class="btn-link">
                    <span class="btn-text">View More</span>
                </a>
            </div> -->
            <div class="neighborhood-listings-more">
                <a href="#">See all<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="row-tiles">
            <div class="row-scrollable"> 

                <?php
                    $args = array(
                        'post_type' => 'listings',
                        'orderby' => 'rand',
                        'posts_per_page' => 3
                    );
                    $the_query = new WP_Query( $args );
                    
                    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    get_template_part( 'template-parts/post/listing', 'overlayed' );
                    endwhile; endif;
                ?>

            </div>
        </div>
    </section>

    <hr class="mw-1040">

    <section class="row developments-row mw-1040">
        <div class="row-header">
            <div class="row-title">
                <h2 class="section-title">
                    <span class="break-text">Developments</span>
                </h2>
            </div>
            <!-- <div class="btn view-more">
                <a href="" class="btn-link">
                    <span class="btn-text">View More</span>
                </a>
            </div> -->
            <div class="neighborhood-listings-more">
                <a href="/villagroupre.com/developments/">See all<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="row-tiles">
            <div class="row-scrollable"> 

                <?php
                    $args = array(
                        'post_type' => 'developments',
                        'orderby' => 'rand',
                        'posts_per_page' => 8
                    );
                    $the_query = new WP_Query( $args );
                
                    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    get_template_part( 'template-parts/post/content', 'hoods' );
                    endwhile; endif;
                ?>

            </div>
        </div>
    </section>

    <hr class="mw-1040">

    <section class="row featured-agents mw-1040">
        <div class="row-header">
            <div class="row-title">
                <h2 class="section-title">
                    <span class="break-text">Our People</span>
                </h2>
            </div>
            <!-- <div class="btn view-more">
                <a href="/villagroupre.com/agents" class="btn-link">
                    <span class="btn-text">View More</span>
                </a>
            </div> -->
            <div class="neighborhood-listings-more">
                <a href="/villagroupre.com/people/">See all<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="row-tiles">
            <div class="row-scrollable"> 

                <?php
                    $args = array(
                        'post_type' => 'people',
                        'orderby' => 'rand',
                        'posts_per_page' => 4
                    );
                    $the_query = new WP_Query( $args );
                
                    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    get_template_part( 'template-parts/post/content', 'agents' );
                    endwhile; endif; 
                ?>

            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/post/content', 'subscribe' ); ?>

<?php get_footer(); ?>
