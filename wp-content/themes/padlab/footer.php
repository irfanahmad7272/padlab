<footer>
    <section class="footer-upper">
        <div class="footer-wrap">

            <div class="footer-columns">

                <p class="footer-column-title">Search</p>
                <ul class="footer-links">
                    <li class="footer-column-single-link"><a href="">Map Search</a></li>
                    <li class="footer-column-single-link"><a href="">Neighborhoods</a></li>
                    <li class="footer-column-single-link"><a href="">Urban Living</a></li>
                    <li class="footer-column-single-link"><a href="">Luxury Living</a></li>
                    <li class="footer-column-single-link"><a href="">Historic Living</a></li>
                </ul>

            </div>
            <div class="footer-columns">

                <p class="footer-column-title">Services</p>
                <ul class="footer-links">
                    <li class="footer-column-single-link"><a href="">For Buyers</a></li>
                    <li class="footer-column-single-link"><a href="">For Sellers</a></li>
                    <li class="footer-column-single-link"><a href="">For Renters</a></li>
                    <li class="footer-column-single-link"><a href="">For Developers</a></li>
                </ul>

            </div>
            <div class="footer-columns">

                <p class="footer-column-title">Resources</p>
                <ul class="footer-links">
                    <li class="footer-column-single-link"><a href="">Buyer</a></li>
                </ul>

            </div>
            <div class="footer-columns">

                <p class="footer-column-title">Company</p>
                <ul class="footer-links">
                    <li class="footer-column-single-link"><a href="">About Us</a></li>
                    <li class="footer-column-single-link"><a href="">Our Agents</a></li>
                    <li class="footer-column-single-link"><a href="">Careers</a></li>
                    <li class="footer-column-single-link"><a href="">Privacy Policy</a></li>
                    <li class="footer-column-single-link"><a href="">Terms of Use</a></li>
                </ul>

            </div>
            <div class="footer-columns">

                <p class="footer-column-title">PadLab</p>
                <p class="footer-padlab-address">2141 E Broadway Rd<br>
                    Ste 101 <br>
                    Tempe, AZ 85282 <br>
                    480.725.6003<br>
                    <a href="mailto:hello@padlabaz.com">hello@padlabaz.com</a></p><br>
                
                <form class="footer-subscribe-form" method="post" action="">
                    
                    <input type="text" placeholder="Subscribe" name="subscribe" />
                    <button class="footer-subscribe-btn" type="submit"></button>
                    
                </form>

            </div>
        </div>
    </section>
    <section class="footer-lower">
        <div class="footer-lower-inner">
            <div class="footer-lower-col">
                <span>PADLAB © <?php the_date('Y'); ?></span>
            </div>
            <div class="footer-lower-col">
                <span class="footer-brands-label">Our Brands: </span><span><a href="/">PADLAB</a> | <a href="//eastvalleyurban.com">EastValleyUrban.com</a></span>
            </div>
            <div class="footer-lower-col footer-social">
                <div class="footer-social-icons">
                    <a href="//facebook.com/PADLABaz/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </div>
                <div class="footer-social-icons">
                    <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
                <div class="footer-social-icons">
                    <a href="//instagram.com/padlabaz/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>

</body>
</html>

<style>

    .footer-lower {
        width: 100%;
        color: #898989;
        font-weight: 300;
    }

    .footer-lower-inner {
        border-top: 1px solid #4e4e4e;
        padding-top: 15px;
        padding-bottom: 15px;
        display: flex;
        justify-content: space-between;
    }

    .footer-brands-label {
        font-weight: 400;
        color: #a2a2a2;
    }

    .footer-social {
        display: flex;
        font-size: 19px;
    }

    .footer-lower-col a:hover,
    .footer-social-icons:hover {
        color: #fff;
    }

</style>