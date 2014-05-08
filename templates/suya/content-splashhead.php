<?php 

// Splash header

$splash = new WP_Query("pagename=splash-header"); 
while($splash->have_posts()) : $splash->the_post();

?>
	<header class="sy-section text-center">
		<p><?php the_field('above_title'); ?></p>
		<h1 class="sy-jumbo-title">Startup your <br><span class="text-success">Awesome</span></h1>
		<hr>
		<h4><?php the_field('below_title'); ?></h4>
		<hr>
	</header>
	
	<div class="row sy-section">
		<br>
		<div class="col-md-10 col-md-offset-1">
			<p class="lead"><?php the_field('punchy_paragraph'); ?></p>
			<button id="showApplication" class="btn btn-warning btn-block">Apply Now</button>			
			<br>
		</div>
		
		<br>
	</div>
	<br>
	
	

	<div class="application-form sy-section">
		<?php 
		$form = get_field('application_form');
    			gravity_form_enqueue_scripts($form->id, true);
				gravity_form($form->id, true, true, false, '', true, 1);  ?>
	</div>

	<?php edit_post_link(); ?>

<?php endwhile; ?>