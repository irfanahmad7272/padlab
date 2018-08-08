<?php get_header(); ?>

<!-- HERO SLIDER -->

<section>
    <div class="hero" style="background-image: url(<?php the_field('person_hero'); ?>)">
        <div class="hero-text-box">
            <h1><?php the_title(); ?></h1>
            <p><?php the_field(''); ?></p>
        </div>
    </div>
</section>

<!-- AGENT CONTACT SECTION -->

<section class="agent-contact">
    <div class="agent-contact-btn agent-phone serif-2"><a href="tel:<?php the_field('person_phone'); ?>"><?php the_field('person_phone'); ?></a></div>
    <div class="agent-contact-btn agent-email serif"><?php the_field('person_email'); ?></div>
</section>

<!-- AGENT BODY -->

<section class="agent-info-wrap">
    <div class="agent-images">
        <div class="agent-main-image">

            <!-- FLEX SLIDER -->

            <div class="flexslider">
                <ul class="slides">
                    <li data-thumb="<?php the_field('person_image'); ?>">
                        <div class="ratio-1-1">
                            <div class="ratio-sub-wrap">
                                <img src="<?php the_field('person_image'); ?>" class="flexslider-img">
                            </div>
                        </div>
                    </li>
                    <li data-thumb="http://localhost:8888/villagroupre.com/wp-content/uploads/2017/06/svillabona-headshot-v.jpg">
                        <div class="ratio-1-1">
                            <div class="ratio-sub-wrap">
                                <img src="http://localhost:8888/villagroupre.com/wp-content/uploads/2017/06/svillabona-headshot-v.jpg" class="flexslider-img">
                            </div>
                        </div>
                    </li>
                    <li data-thumb="<?php the_field('person_image'); ?>">
                        <div class="ratio-1-1">
                            <div class="ratio-sub-wrap">
                                <img src="<?php the_field('person_image'); ?>" class="flexslider-img">
                            </div>
                        </div>
                    </li>
                    <li data-thumb="<?php the_field('person_image'); ?>">
                        <div class="ratio-1-1">
                            <div class="ratio-sub-wrap">
                                <img src="<?php the_field('person_image'); ?>" class="flexslider-img">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>		

            <!-- END FLEX SLIDER -->

        </div>
    </div>
    <div class="agent-bio">
        <div class="agent-bio-wrap">
            <h2><?php the_title(); ?></h2>
            <h3><?php the_field('person_title'); ?></h3>
            <p><?php the_field('person_bio'); ?></p>
            <span></span>
        </div>
        <!-- agent social media links-->
        <div class="agent-social-links">
            
            <ul class="single-social-links">
                <li class="single-social-link social-link-right-border"><a href="<?php the_field('person_facebook'); ?>"><i class="fa fa-facebook-square"></i></a></li>
                <li class="single-social-link social-link-right-border"><i class="fa fa-instagram"></i></li>
                <li class="single-social-link social-link-right-border"><i class="fa fa-linkedin-square"></i></li>
                <li class="single-social-link social-link-right-border"><i class="fa fa-twitter-square"></i></li>
                <li class="single-social-link "><i class="fa fa-google-plus-square"></i></li>
            </ul>
            
        </div>
    </div>
</section>

<section class="row mw-1040 agent-listings">
    <div class="section-heading">
        <span><h3>Current Listings</h3></span>
        <hr>
    </div>
    <div class="agent-current">
        <?php
        if (get_field('person_listings')) {
            echo the_field('person_listings');
        } else
            echo "We've sold all our listings!";
        ?>
    </div>
</section>

<section class="row mw-1040 agent-listings">
    <div class="section-heading">
        <span><h3>Sold Listings</h3></span>
        <hr>
    </div>
    <div class="agent-sold">
        <?php
        if (get_field('person_listings')) {
            echo the_field('person_listings');
        } else
            echo "We've sold all our listings!";
        ?>
    </div>
</section>

<section class="work-with-me-btn">
    <div class="serif work-with-me-text">Work with me</div>
</section>

<?php get_footer(); ?>

<style>

    .read-more {
        height: 230px;
    }

    .read-more:after {
        content: 'Read More';
        color: #b59d68;
        font-weight: 400;
        font-size: 18px;
    }

</style>






