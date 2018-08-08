<?php
/**
* Template for displaying under construction page
*/
?>

<section class="uc-outer">
	<div class="uc-close"></div>
	<div class="uc-inner">
		<div class="uc-body">
			<div class="uc-col col-6 uc-col-lt">
				<div class="uc-logo">
					<img src="http://localhost:8888/villagroupre.com/wp-content/uploads/2017/08/padlab-logo.png" alt="PADLAB & Realty ONE Group Logo">
				</div>
				<h1>Website Under<br>Construction</h1>
				<p>Sorry for the inconvenience, but we assure you it’s going to be the talk of the town. We’re anticipating it’s going to
				be finished around the holidays, if sooner, we’ll let you know. Just leave us your contact info below.<br>
				<br>
				The good news is that you don’t have to wait for the website to be finished to work with one our seasoned professionals. Give us a call and let us know how we can take care of your real estate needs, or fill out the contact form below and we will get back to you faster than you can say Otorhinolaryngologist.</p>
			</div>
			<div class="uc-col col-6 uc-col-rt">
				<div class="uc-contact-form">
				</div>
				<div class="uc-contact-info">
					<div class="uc-contact-group-1">
						<span class="uc-brand-name">PADLAB Real Estate Group</span>
						<span class="uc-address">2141 E Broadway Rd #101</span>
						<span class="uc-address">Tempe, AZ 85282</span>
					</div>
					<div class="uc-contact-group-2">
						<span class="uc-phone">480-242-3003</span>
						<span class="uc-email">steve@PADLABaz.com</span>
					</div>
				</div>
			</div>
		</div>
		<div class="uc-footer">
			<button>Call</button>
			<button>Email</button>
			<button>EVU</button>
		</div>
	</div>
</section>



<style>
.no-scroll {
	overflow: hidden !important;
}

.uc-outer{
	content: '';
	position: relative;
	width: 100%;
	height: 100vh;
	background: #282828;
	display: flex;
	justify-content: center;
	align-items: center;
	z-index: 10000;
}
.uc-close {
	position: absolute;
	top: 0;
	right: 0;
	width: 10px;
	height: 10px;
}

.uc-close:hover {
	cursor: pointer;
}

.uc-inner {
	width: 900px;
	height: 600px;
	background: #000;
	box-shadow: 0 0 25px #000;
	color: #fff;
	padding: 30px 50px;
	display: flex;
	flex-direction: column;
}

.uc-body {
	width: 100%;
	height: 85%;
}

.uc-logo {
	margin-bottom: 30px;
}

.uc-col h1 {
	font-size: 40px;
	font-weight: 300;
}

.uc-col p {
	color: #fff;
}

/* Right Column */
.uc-col-rt,
.uc-contact-info,
.uc-contact-group-1,
.uc-contact-group-2 {
	display: flex;
	flex-direction: column;
	font-weight: 300;
}

.uc-col-rt {
	padding-left: 20px;
	justify-content: space-between;
}

.uc-contact-group-1 {
	margin-bottom: 15px;
}

.uc-contact-info span {
	margin-bottom: 5px;
}

.uc-brand-name {
	font-weight: 400;
}



.uc-footer {
	display: flex;
	justify-content: space-around;
}

.uc-footer button {
	border: 1px solid #fff;
	color: #fff;
	height: 35px;
	width: 115px;
}

</style>

<script>
	jQuery(document).ready(function($) {
		$('body').addClass('no-scroll');

		$('.uc-close').on('click', function() {
			$('.uc-outer').toggle();
			$('body').removeClass('no-scroll');
		});
	});
</script>