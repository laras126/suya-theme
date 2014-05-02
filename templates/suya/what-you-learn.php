<?php 

// What you'll learn
	
$recent = new WP_Query("pagename=what-youll-learn"); 
while($recent->have_posts()) : $recent->the_post();?>

<section class="text-center sy--learn">
	<h1 class="sy-title"><?php the_title(); ?></h1>
	<div class="row">
		<p class="sy-tag"><?php the_field('days_tagline'); ?></p>
		<div class="col-sm-6 sy-half sy-section">
			<h3>Day 1: <span class="text-success"><?php the_field('day_1_title'); ?></span></h3>	
			<p><?php the_field('day_1_description'); ?></p>
		</div>
		
		<div class="col-sm-6 sy-half sy-section">
			<h3>Day 2: <span class="text-success"><?php the_field('day_2_title'); ?></span></h3>
			<p><?php the_field('day_2_description'); ?></p>
		</div>
	</div>
</section>

<?php edit_post_link(); ?>
	
<?php endwhile; ?>
	
