<?php
/**
* Template for displaying navigation
*/
?>

<style>
	.nav-upper {
		background-color: #282828;
		padding: 5px 15px;
		display: flex;
		justify-content: space-between;
		color: #8a8a8a;
	}
	.nav-upper-contact {
		font-size: 14px;
	}
	.nav-upper-social {
		display: flex;
	}
</style>

<nav class="">
	<div class="-nav">
		<div class="nav-upper">
			<div class="nav-upper-contact">
				<span>hello@PADLABaz.com</span>
				<span>480-242-3003</span>
			</div>
			<div class="nav-upper-social">
				<div class="nav-upper-social-icons">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</div>
				<div class="nav-upper-social-icons">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</div>
				<div class="nav-upper-social-icons">
				</div>
			</div>
		</div>
		<div class="main-nav-container">
			<div class="main-logo">
				<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
					<img src="https://padlab.comingsoon.zone/wp-content/uploads/2017/08/padlab-logo.png" alt="PADLAB & Realty ONE Group Logo">
				</a>
			</div>
			<div class="nav-sign-in">

				<?php
					$args = array(
					'menu'        => 'header-menu',
					'menu_class'  => 'navbar',
					'container'   => 'false'
					);

					wp_nav_menu( $args );
				?>

				<div class="sign-in-container">
					<button class="sign-in-button">Sign In</button>
				</div>
			</div>
		</div>
	</div>
</nav>