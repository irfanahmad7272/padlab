<?php
/*
  Template Name: Developments Page
 */
get_header('search');
?>

<?php get_template_part('template-parts/post/search', 'bar'); ?>

<!-- TILES & MAP CONTAINER -->

<section class="search-tile-map developments-tile-wrap">

    <!-- Neighborhoods Tiles Wrap -->

    <div class="search-tile-map-inner developments-wrap-inner ">
        <div class="search-tiles-column developments-tiles-column">
            <?php
            $args = array(
                'post_type' => 'developments',
                'orderby' => 'title',
                'order' => 'ASC',
                'posts_per_page' => -1
            );
            $the_query = new WP_Query($args);
            ?>

            <div class="search-listing-grid-view search-listing-items active-listing">


                <?php
                if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

                        get_template_part('template-parts/post/content', 'hoods');

                    endwhile;
                endif;
                ?>
            </div>
            <div class="search-listing-list-view search-listing-items">
                <div class="currently-viewing-listing-item">

                    <div class="viewing-item-left">
                        <img src="<?php the_field('featured_image'); ?>" alt="<?php the_title(); ?>" />
                    </div>
                    <div class="viewing-item-right">
                        <span class="listing-item-price">$50000</span>
                        <span class="listing-mls-code">MLS# 5464832</span>
                        <p class="listing-item-address">4020 N Scottsdale Rd #306, Scottsdale, AZ 85251</p>
                        <p class="listing-item-extra-detail">
                            <span>3 Bed</span> |
                            <span>1.75 Bath</span> |
                            <span>1,534 Sf </span>
                        </p>
                        <p class="listing-item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat…</p>
                        <a href="" class="listing-item-read-more-btn">View Property</a>
                    </div>

                </div>
                <div class="all-searched-listing-items">
                    
                    <table class="all-search-listing-table">
                        <tr>
                            <th></th>
                            <th>Price</th>
                            <th>Bed</th>
                            <th>Bath</th>
                            <th>Sq.Ft</th>
                            <th>Address</th>
                            <th>City</th>
                        </tr>
                        <tr>
                            <td><i class="fa fa-heart-o"></i></td>
                            <td>$500,000</td>
                            <td>3</td>
                            <td>1.75</td>
                            <td>1534</td>
                            <td>4020 N Scottsdale Rd #306</td>
                            <td>Scottsdale</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-heart-o"></i></td>
                            <td>$500,000</td>
                            <td>3</td>
                            <td>1.75</td>
                            <td>1534</td>
                            <td>4020 N Scottsdale Rd #306</td>
                            <td>Scottsdale</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-heart-o"></i></td>
                            <td>$500,000</td>
                            <td>3</td>
                            <td>1.75</td>
                            <td>1534</td>
                            <td>4020 N Scottsdale Rd #306</td>
                            <td>Scottsdale</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-heart-o"></i></td>
                            <td>$500,000</td>
                            <td>3</td>
                            <td>1.75</td>
                            <td>1534</td>
                            <td>4020 N Scottsdale Rd #306</td>
                            <td>Scottsdale</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-heart-o"></i></td>
                            <td>$500,000</td>
                            <td>3</td>
                            <td>1.75</td>
                            <td>1534</td>
                            <td>4020 N Scottsdale Rd #306</td>
                            <td>Scottsdale</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-heart-o"></i></td>
                            <td>$500,000</td>
                            <td>3</td>
                            <td>1.75</td>
                            <td>1534</td>
                            <td>4020 N Scottsdale Rd #306</td>
                            <td>Scottsdale</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-heart-o"></i></td>
                            <td>$500,000</td>
                            <td>3</td>
                            <td>1.75</td>
                            <td>1534</td>
                            <td>4020 N Scottsdale Rd #306</td>
                            <td>Scottsdale</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-heart-o"></i></td>
                            <td>$500,000</td>
                            <td>3</td>
                            <td>1.75</td>
                            <td>1534</td>
                            <td>4020 N Scottsdale Rd #306</td>
                            <td>Scottsdale</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-heart-o"></i></td>
                            <td>$500,000</td>
                            <td>3</td>
                            <td>1.75</td>
                            <td>1534</td>
                            <td>4020 N Scottsdale Rd #306</td>
                            <td>Scottsdale</td>
                        </tr>
                        
                    </table>

                </div>
            </div>
        </div>

        <!-- Map -->

        <div class="search-map-column developments-map-column">
            <div class="search-map-inner developments-map-inner">
                <div id="map"></div>
                <script>
                    var map;

                    // Create a new blank array for all the listing markers.
                    var markers = [];

                    function initMap() {
                        // Constructor creates a new map - only center and zoom are required.
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {lat: 33.575490, lng: -111.949916},
                            zoom: 11
                        });

                        // (SV) trying to resize and realign map when view is toggled full or half width
                        // $(window).resize(function() {
                        //     // (the 'map' here is the result of the created 'var map = ...' above)
                        //     google.maps.event.trigger(map, "resize");
                        // });

                        // These are the real estate listings that will be shown to the user.
                        // Normally we'd have these in a database instead.
                        var locations = [
                            {title: 'Arcadia', location: {lat: 33.497672, lng: -111.961818}},
                            {title: 'Biltmore', location: {lat: 33.509409, lng: -112.030225}},
                            {title: 'Carefree', location: {lat: 33.822300, lng: -111.918187}},
                            {title: 'Cave Creek', location: {lat: 33.833362, lng: -111.950812}},
                            {title: 'DC Ranch', location: {lat: 33.666775, lng: -111.850850}},
                            {title: 'Desert Ridge', location: {lat: 33.681515, lng: -111.970119}},
                            {title: 'Dobson Ranch', location: {lat: 33.378484, lng: -111.877925}},
                            {title: 'Fountain Hills', location: {lat: 33.604252, lng: -111.725756}},
                            {title: 'Gainey Ranch', location: {lat: 33.566874, lng: -111.913523}},
                            {title: 'Grayhawk', location: {lat: 33.674473, lng: -111.907554}},
                            {title: 'McCormick Ranch', location: {lat: 33.556367, lng: -111.898573}},
                            {title: 'North Scottsdale', location: {lat: 33.671693, lng: -111.880679}},
                            {title: 'Paradise Valley', location: {lat: 33.531114, lng: -111.943117}},
                            {title: 'Silverleaf', location: {lat: 33.662206, lng: -111.857906}},
                            {title: 'Tempe', location: {lat: 33.425504, lng: -111.939992}},
                            {title: 'Troon Village', location: {lat: 33.714361, lng: -111.841277}},
                        ];

                        var largeInfowindow = new google.maps.InfoWindow();
                        var bounds = new google.maps.LatLngBounds();
                        // The following group uses the location array to create an array of markers on initialize.
                        for (var i = 0; i < locations.length; i++) {
                            // Get the position from the locadtion array.
                            var position = locations[i].location;
                            var title = locations[i].title;
                            // Create a marker per location, and put into markers array.
                            var marker = new google.maps.Marker({
                                map: map,
                                position: position,
                                title: title,
                                animation: google.maps.Animation.DROP,
                                id: i
                            });
                            // Push the marker to our array of makers.
                            markers.push(marker);
                            // Extend the boundaries of the map for each marker
                            bounds.extend(marker.position);
                            // Create an onclick event to open an infowindow at each marker.
                            marker.addListener('click', function () {
                                populateInfoWindow(this, largeInfowindow);
                            });
                        }
                        map.fitBounds(bounds);
                    }
                    // This function populates the infowindow when the marker is clicked. We'll only allow
                    // one infowindow which will open at the marker that is clicked, and populate based
                    // on that markers position.
                    function populateInfoWindow(marker, infowindow) {
                        // Check to make sure the infowindow is not already opened on this marker.
                        if (infowindow.marker != marker) {
                            infowindow.marker = marker;
                            infowindow.setContent('<div>' + marker.title + '</div>');
                            infowindow.open(map, marker);
                            // Make sure the marker property is cleared if the infowindow is closed.
                            infowindow.addListener('closeclick', function () {
                                infowindow.setMarker(null);
                            });
                        }
                    }
                </script>

                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJzWnH0BqxGwrwufVDVbPuwzRkOTKNtLs&v=3&callback=initMap">
                </script>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d212669.36557990054!2d-111.95651128133944!3d33.60637248020017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1490657004945" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe> -->
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>