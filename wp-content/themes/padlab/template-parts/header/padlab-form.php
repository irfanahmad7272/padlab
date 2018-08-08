<?php
/**
* Template for displaying chat window at footer
*/
?>
<div class="contact-popup-button">
</div>
<section class="contact-popup">
	<div class="contact-popup-inner">
		<div class="contact-popup-close">X</div>
	</div>
</section>

<style>

	.contact-popup-button {
		border-radius: 50%;
		width: 20px;
		height: 20px;
		background: pink;
		position: fixed;
		bottom: 30px;
		right: 30px;
		box-shadow: 0 0 20px #000;
		z-index: 999;
	}

	.contact-popup {
		display: flex;
		opacity: 0;
		align-content: center;
		justify-content: center;
		transition: margin .4s ease-in-out;
		z-index: 1000;
	}

	.contact-popup::before {
		content: '';
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		position: fixed;
		background: rgba(0,0,0,.75);
		z-index: 1000;
	}

	.contact-popup-inner {
		width: 300px;
		height: 300px;
		background: #ddd;
		z-index: 1000;
		box-shadow: 0 0 20px #000;
		padding: 10px;
		position: relative;
	}

	.form-open {
		opacity: 1;
	}

	.contact-popup-close {
		position: absolute;
		top: 0;
		right: 0;
		color: #282828;
	}
</style>