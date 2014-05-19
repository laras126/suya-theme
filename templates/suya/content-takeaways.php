
<?php 

// Takeaways

$tk_id = get_ID_by_title('Takeaways');
$tk_page = get_post($tk_id);

?>

<section class="sy--takeaways">
	<h1 class="sy-title"><?php echo $tk_page->post_title; ?></h1>
	<p class="sy-tag text-center">
		<?php echo $tk_page->takeaway_tagline; ?>
	</p>
	<div class="row">
		<div class="col-sm-4 sy-section sy-third">
			<div class="text-center sy-icon">
				<i class="fa <?php echo $tk_page->takeaway_left_icon; ?>"></i>
			</div>
			<h4><?php echo $tk_page->takeaway_left_title; ?></h4>
			<p><?php echo $tk_page->takeaway_left_blurb; ?></p>
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




