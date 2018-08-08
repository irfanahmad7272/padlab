<?php
/*
  Template Name: Our People
 */

get_header();
?>

<!-- HERO IMAGE -->

<section>
    <div class="hero" style="background-image: url(<?php the_field('page_hero'); ?>)">
        <div class="hero-text-box">
            <h1>

                <?php
                if (get_field('page_title')) {
                    echo the_field('page_title');
                } else
                    the_title();
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

<section class="row mw-1040 our-agents">
    <div class="agents-search">
        <input type="text" placeholder="Search Agents" class="search-input">
        <button id="" type="submit" value="search">Search</button>
    </div>
    <div>
        <div class="our-agents-nav">
            <span>Sort Alphabetically</span>
        </div>
        <div class="our-agents-wrap">

            <?php
            $args = array(
                'post_type' => 'people',
                'orderby' => 'rand',
                'posts_per_page' => -1
            );
            $the_query = new WP_Query($args);

            if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                    get_template_part('template-parts/post/content', 'agents');
                endwhile;
            endif;
            ?>

        </div>
    </div>
</section>
<section class="subscribe-wrap work-with-us-section" style="background-image: url('https://padlab.comingsoon.zone/wp-content/uploads/2017/08/desert-mountain.jpg')">
    <div class="subscribe mw-900">
        <h1>WEʼRE FOR HIRE</h1>
        <p>Trust between a client and an agent is a very powerful thing. That is why<br>
        we place is before anything else. We strive to earn your trust.
        </p>
        <button class="work-with-us-button">Work With Us</button>
    </div>
</section>

<?php get_footer(); ?>