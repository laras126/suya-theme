
<?php 

// Takeaways

$recent = new WP_Query("pagename=takeaways"); 
while($recent->have_posts()) : $recent->the_post();

?>
	<section class="sy--takeaways">
		<h1 class="sy-title"><?php the_title(); ?></h1>
		<p class="sy-tag text-center">
			<?php the_field('takeaway_tagline'); ?>
		</p>
		<div class="row">
			<div class="col-sm-4 sy-section sy-third">
				<div class="text-center sy-icon">
					<i class="fa <?php the_field('takeaway_left_icon'); ?>"></i>
				</div>
				<h4><?php the_field('takeaway_left_title'); ?></h4>
				<p><?php the_field('takeaway_left_blurb'); ?></p>
			</div>
			<div class="col-sm-4 sy-section sy-third">
				<div class="text-center sy-icon">
					<i class="fa <?php the_field('takeaway_center_icon'); ?>"></i>
				</div>
				<h4><?php the_field('takeaway_center_title'); ?></h4>
				<p><?php the_field('takeaway_center_blurb'); ?></p>
			</div>
			<div class="col-sm-4 sy-section sy-third">
				<div class="text-center sy-icon">
					<div class="fa <?php the_field('takeaway_right_icon'); ?>"></div>
				</div>
				<h4><?php the_field('takeaway_right_title'); ?></h4>
				<p><?php the_field('takeaway_right_blurb'); ?></p>
			</div>
		</div>
	</section>
	<?php edit_post_link(); ?>
<?php endwhile; ?>


