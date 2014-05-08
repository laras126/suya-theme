
<?php 

$recent = new WP_Query("pagename=instructors"); 
while($recent->have_posts()) : $recent->the_post();?>
	<section class="sy--instructors">
		<h1 class="sy-title"><?php the_title(); ?></h1>
		<p class="sy-tag text-center">
			<?php the_field('instructor_tagline'); ?>
		</p>
		<div class="row">
			<div class="col-sm-6 sy-half sy-section">
				<img class="img-responsive center-block" src="<?php the_field('instructor_left_image'); ?>" alt="<?php the_field('instructor_left_name'); ?>">
				<h2><?php the_field('instructor_left_name'); ?></h2>
				<p><?php the_field('instructor_left_blurb'); ?></p>
			</div>
			<div class="col-sm-6 sy-half sy-section">
				<img class="img-responsive center-block" src="<?php the_field('instructor_right_image'); ?>" alt="<?php the_field('instructor_right_name'); ?>">
				<h2><?php the_field('instructor_right_name'); ?></h2>
				<p><?php the_field('instructor_right_blurb'); ?></p>
			</div>
		</div>
	</section>

	<?php edit_post_link(); ?>

<?php endwhile; ?>	


