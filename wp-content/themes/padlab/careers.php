<?php
/*
  Template Name: Careers Page
*/

get_header(); ?>

<!-- HERO IMAGE -->

<section>
    <div class="hero" style="background-image: url(<?php the_field('page_hero'); ?>)">
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

<!-- BANNER SECTION -->

<section class="banner">
    <div class="banner-inner mw-700">
        <h2 class="serif"><?php the_field('page_banner_h2'); ?></h2>
        <p><?php the_field('page_banner_content'); ?></p>
    </div>
</section>

<!-- PAGE CONTENT -->
<section class="row mw-1040 career-positions-wrap">
    <div class="career-section-header">
        <h2 class="serif">Positions</h2>
    </div>
    <div>
        <?php
            $args = array(
                'post_type' => 'positions',
                'orderby' => 'asc',
                'posts_per_page' => -1
            );
            $the_query = new WP_Query( $args );

            if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
            get_template_part( 'template-parts/post/content', 'career' );
            endwhile; endif;
        ?>

        <?php wp_reset_postdata(); ?>
    </div>
</section>
    <div class="career-section-header mw-1040">
        <h2 class="serif">Our Values</h2>
    </div>
<section class="row mw-1040 career-tiles-wrap">
    <div class="career-tiles">
        <div class="ratio-1-1">
            <div class="ratio-sub-wrap">
                <div class="career-overlay">
                    <h2>
                        <span class="career-tile-number">01</span>
                        <span class="career-tile-name">
                            
                            <?php

                                if ( get_field('career_item_01') ) {
                                    echo the_field('career_item_01');
                                } else {
                                    echo 'Something';
                                }
                            ?>

                        </span>
                    </h2>
                    <p><?php the_field('career_item_01_description'); ?></p>
                </div>
                <div class="career-pic">
                    <img src="<?php the_field('item_01_pic'); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="career-tiles">
        <div class="ratio-1-1">
            <div class="ratio-sub-wrap">
                <div class="career-overlay">
                    <h2>
                        <span class="career-tile-number">02</span>
                        <span class="career-tile-name">
                            
                            <?php 
                                if ( get_field('career_item_02') ) {
                                    echo the_field('career_item_02');
                                } else {
                                    echo 'Something';
                                }
                            ?>

                        </span>
                    </h2>
                    <p><?php the_field('career_item_02_description'); ?></p>
                </div>
                <div class="career-pic">
                    <img src="<?php the_field('item_02_pic'); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="career-tiles">
        <div class="ratio-1-1">
            <div class="ratio-sub-wrap">
                <div class="career-overlay">
                    <h2>
                        <span class="career-tile-number">03</span>
                        <span class="career-tile-name">
                            
                            <?php 
                                if ( get_field('career_item_03') ) {
                                    echo the_field('career_item_03');
                                } else {
                                    echo 'Something';
                                }
                            ?>

                        </span>
                    </h2>
                    <p><?php the_field('career_item_03_description'); ?></p>
                </div>
                <div class="career-pic">
                    <img src="<?php the_field('item_03_pic'); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="career-tiles">
        <div class="ratio-1-1">
            <div class="ratio-sub-wrap">
                <div class="career-overlay">
                    <h2>
                        <span class="career-tile-number">04</span>
                        <span class="career-tile-name">
                            
                            <?php 
                                if ( get_field('career_item_04') ) {
                                    echo the_field('career_item_04');
                                } else {
                                    echo 'Something';
                                }
                            ?>

                        </span>
                    </h2>
                    <p><?php the_field('career_item_04_description'); ?></p>
                </div>
                <div class="career-pic">
                    <img src="<?php the_field('item_04_pic'); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="career-tiles">
        <div class="ratio-1-1">
            <div class="ratio-sub-wrap">
                <div class="career-overlay">
                    <h2>
                        <span class="career-tile-number">05</span>
                        <span class="career-tile-name">
                            
                            <?php 
                                if ( get_field('career_item_05') ) {
                                    echo the_field('career_item_05');
                                } else {
                                    echo 'Something';
                                }
                            ?>

                        </span>
                    </h2>
                    <p><?php the_field('career_item_05_description'); ?></p>
                </div>
                <div class="career-pic">
                    <img src="<?php the_field('item_05_pic'); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="career-tiles">
        <div class="ratio-1-1">
            <div class="ratio-sub-wrap">
                <div class="career-overlay">
                    <h2>
                        <span class="career-tile-number">06</span>
                        <span class="career-tile-name">
                            
                            <?php 
                                if ( get_field('career_item_06') ) {
                                    echo the_field('career_item_06');
                                } else {
                                    echo 'Something';
                                }
                            ?>

                        </span>
                    </h2>
                    <p><?php the_field('career_item_06_description'); ?></p>
                </div>
                <div class="career-pic">
                    <img src="<?php the_field('item_06_pic'); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="career-tiles">
        <div class="ratio-1-1">
            <div class="ratio-sub-wrap">
                <div class="career-overlay">
                    <h2>
                        <span class="career-tile-number">07</span>
                        <span class="career-tile-name">
                            
                            <?php 
                                if ( get_field('career_item_07') ) {
                                    echo the_field('career_item_07');
                                } else {
                                    echo 'Something';
                                }
                            ?>

                        </span>
                    </h2>
                    <p><?php the_field('career_item_07_description'); ?></p>
                </div>
                <div class="career-pic">
                    <img src="<?php the_field('item_07_pic'); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="career-tiles">
        <div class="ratio-1-1">
            <div class="ratio-sub-wrap">
                <div class="career-overlay">
                    <h2>
                        <span class="career-tile-number">08</span>
                        <span class="career-tile-name">
                            
                            <?php 
                                if ( get_field('career_item_08') ) {
                                    echo the_field('career_item_08');
                                } else {
                                    echo 'Something';
                                }
                            ?>

                        </span>
                    </h2>
                    <p><?php the_field('career_item_08_description'); ?></p>
                </div>
                <div class="career-pic">
                    <img src="<?php the_field('item_08_pic'); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="career-tiles">
        <div class="ratio-1-1">
            <div class="ratio-sub-wrap">
                <div class="career-overlay">
                    <h2>
                        <span class="career-tile-number">09</span>
                        <span class="career-tile-name">
                            
                            <?php 
                                if ( get_field('career_item_09') ) {
                                    echo the_field('career_item_09');
                                } else {
                                    echo 'Something';
                                }
                            ?>

                        </span>
                    </h2>
                    <p><?php the_field('career_item_09_description'); ?></p>
                </div>
                <div class="career-pic">
                    <img src="<?php the_field('item_09_pic'); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="career-form">
        <div class="career-form-pic">
            <img src="<?php the_field('career_form_pic'); ?>">
        </div>
        <div class="career-form-wrap">
            <div class="career-form-header">
                <h3><?php the_field('career_form_header'); ?></h3>
                <p><?php the_field('career_form_content'); ?></p>
            </div>
            <div class="career-form-actual">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="text" placeholder="Phone">
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Years in Real Estate">
                <button id="career-form-submit" value="submit">Do it.</button>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>