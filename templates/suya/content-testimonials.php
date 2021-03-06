
<?php

// Testimonials

$recent = new WP_Query("pagename=testimonials"); 
while($recent->have_posts()) : $recent->the_post();?>

<footer>
	<h1 class="sy-title">Sounds good, right?</h1>
	<p class="sy-tag text-center">
		<?php the_field('testimonial_tagline'); ?>
	</p>
	
	<div class="sy-section">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<?php the_content(); ?>	
			</div>
		</div>
	</div>

	<?php edit_post_link(); ?>
</footer>

<?php endwhile; ?>