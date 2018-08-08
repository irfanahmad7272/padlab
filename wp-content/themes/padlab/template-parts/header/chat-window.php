<?php
/**
* Template for displaying chat window at footer
*/
?>
<section class="contact-popup">
	<div class="contact-popup-header">
		<span>Contact Us</span>
		<div class="contact-popup-close">
			<i class="fa fa-chevron-up" aria-hidden="true"></i>
		</div>
	</div>
	<div class="contact-popup-inner">
		<!-- Form Info here -->
	</div>
</section>

<style>

	.contact-popup {
	    display: flex;
	    background: #ddd;
	    flex-direction: column;
	    position: fixed;
	    right: 20px;
	    bottom: 0;
	    margin-bottom: -268px;
	    z-index: 1000;
	    box-shadow: 0 0 20px #444;
	    border-top-left-radius: 5px;
	    border-top-right-radius: 5px;
	    width: 130px;
	    transition: margin .25s ease-in-out;
	    height: 300px;
	}

	.form-open {
		margin-bottom: 0;
		width: 250px;
	}

	.contact-popup-header {
	    display: flex;
	    align-items: center;
	    justify-content: space-between;
	    padding: 7px 0;
	    margin: 0 10px;
	    border-bottom: 1px solid #282828;
	}

	.contact-popup-header:hover {
		cursor: pointer;
	}

</style>