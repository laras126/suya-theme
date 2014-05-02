<?php
/*
Template Name: Splash Page
*/
?>

<div class="container">
	
	<?php include( 'templates/suya/splash-head.php'); ?>
	
	<?php 
	// get_template_part not working here for some reason
		include( 'templates/suya/takeaways.php'); ?>
	<?php include( 'templates/suya/what-you-learn.php'); ?>
	<?php include( 'templates/suya/instructors.php'); ?>
	<?php include( 'templates/suya/testimonials.php'); ?>

</div>