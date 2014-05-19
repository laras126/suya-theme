<?php
/**
 * Custom functions
 */


add_action('wp_enqueue_scripts', 'suya_scripts', 100);

function suya_scripts() { 
  	
  	wp_register_script('typekit', '//use.typekit.net/sye5dbw.js', array(), null, false);
	wp_enqueue_script('typekit');

	wp_register_style('fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
	wp_enqueue_style('fontawesome');

	?>

<?php } 


add_action('wp_footer', 'suya_typekit', 100);

function suya_typekit() { ?>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }


// Get page IDs from title
function get_ID_by_title($page_title) {
    $page = get_page_by_title($page_title);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}


// Include ACF plugin and hide interface elements
// include_once('advanced-custom-fields/acf.php');
// define( 'ACF_LITE', true );

// if(function_exists("register_field_group"))
// {
// 	register_field_group(array (
// 		'id' => 'acf_home',
// 		'title' => 'Home',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_5363e31b50ade',
// 				'label' => 'Important!',
// 				'name' => '',
// 				'type' => 'message',
// 				'message' => 'Create new pages with the following names:
		
// 		1. Splash header
// 		2. Takeaways
// 		3. What You\'ll Learn
// 		4. Instructors
// 		5. Testimonials',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'page',
// 					'operator' => '==',
// 					'value' => '2',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'default',
// 			'hide_on_screen' => array (
// 				0 => 'permalink',
// 				1 => 'the_content',
// 				2 => 'excerpt',
// 				3 => 'custom_fields',
// 				4 => 'discussion',
// 				5 => 'comments',
// 				6 => 'revisions',
// 				7 => 'slug',
// 				8 => 'author',
// 				9 => 'format',
// 				10 => 'featured_image',
// 				11 => 'categories',
// 				12 => 'tags',
// 				13 => 'send-trackbacks',
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// 	register_field_group(array (
// 		'id' => 'acf_instructors',
// 		'title' => 'Instructors',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_53603eaddd3a4',
// 				'label' => 'Instructor left',
// 				'name' => '',
// 				'type' => 'message',
// 				'message' => '<h3>Instructor Left</h3>',
// 			),
// 			array (
// 				'key' => 'field_53603d1a3402f',
// 				'label' => 'Instructor Left name',
// 				'name' => 'instructor_left_name',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_53603d2b34030',
// 				'label' => 'Instructor Left Blurb',
// 				'name' => 'instructor_left_blurb',
// 				'type' => 'textarea',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'maxlength' => '',
// 				'rows' => '',
// 				'formatting' => 'br',
// 			),
// 			array (
// 				'key' => 'field_53603d4a34031',
// 				'label' => 'Instructor Left Image',
// 				'name' => 'instructor_left_image',
// 				'type' => 'image',
// 				'save_format' => 'url',
// 				'preview_size' => 'thumbnail',
// 				'library' => 'all',
// 			),
// 			array (
// 				'key' => 'field_53603e3d7e1f7',
// 				'label' => 'Instructor Right',
// 				'name' => '',
// 				'type' => 'message',
// 				'message' => '<hr>
// 	<h3>Instructor Right</h3>',
// 			),
// 			array (
// 				'key' => 'field_53603d5934032',
// 				'label' => 'Instructor Right Name',
// 				'name' => 'instructor_right_name',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_53603d6e34033',
// 				'label' => 'Instructor Right blurb',
// 				'name' => 'instructor_right_blurb',
// 				'type' => 'textarea',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'maxlength' => '',
// 				'rows' => '',
// 				'formatting' => 'br',
// 			),
// 			array (
// 				'key' => 'field_53603d8134034',
// 				'label' => 'Instructor Right Image',
// 				'name' => 'instructor_right_image',
// 				'type' => 'image',
// 				'save_format' => 'url',
// 				'preview_size' => 'thumbnail',
// 				'library' => 'all',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'page',
// 					'operator' => '==',
// 					'value' => '36',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 				0 => 'permalink',
// 				1 => 'the_content',
// 				2 => 'excerpt',
// 				3 => 'custom_fields',
// 				4 => 'discussion',
// 				5 => 'comments',
// 				6 => 'revisions',
// 				7 => 'slug',
// 				8 => 'author',
// 				9 => 'format',
// 				10 => 'categories',
// 				11 => 'tags',
// 				12 => 'send-trackbacks',
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// 	register_field_group(array (
// 		'id' => 'acf_splash-intro',
// 		'title' => 'Splash Intro',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_5357d7e68b446',
// 				'label' => 'Above title',
// 				'name' => 'above_title',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5357ca627b857',
// 				'label' => 'Below title',
// 				'name' => 'below_title',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5357c58e9b727',
// 				'label' => 'Punchy paragraph',
// 				'name' => 'punchy_paragraph',
// 				'type' => 'textarea',
// 				'required' => 1,
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'maxlength' => '',
// 				'rows' => '',
// 				'formatting' => 'br',
// 			),
// 			array (
// 				'key' => 'field_5357c5399b726',
// 				'label' => 'Application form',
// 				'name' => 'application_form',
// 				'type' => 'gravity_forms_field',
// 				'required' => 1,
// 				'allow_null' => 0,
// 				'multiple' => 0,
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'page',
// 					'operator' => '==',
// 					'value' => '28',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 				0 => 'permalink',
// 				1 => 'the_content',
// 				2 => 'excerpt',
// 				3 => 'custom_fields',
// 				4 => 'discussion',
// 				5 => 'comments',
// 				6 => 'revisions',
// 				7 => 'author',
// 				8 => 'format',
// 				9 => 'categories',
// 				10 => 'tags',
// 				11 => 'send-trackbacks',
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// 	register_field_group(array (
// 		'id' => 'acf_takeaways',
// 		'title' => 'Takeaways',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_5357c68acfa11',
// 				'label' => 'Takeaway tagline',
// 				'name' => 'takeaway_tagline',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5357cc00f6341',
// 				'label' => 'divider',
// 				'name' => '',
// 				'type' => 'message',
// 				'message' => '<hr />',
// 			),
// 			array (
// 				'key' => 'field_5357c6c7cfa13',
// 				'label' => 'Takeaway left icon',
// 				'name' => 'takeaway_left_icon',
// 				'type' => 'text',
// 				'instructions' => 'Type in the icon font class name, like "fa-github" or something. http://fontawesome.com',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5357c69acfa12',
// 				'label' => 'Takeaway left title',
// 				'name' => 'takeaway_left_title',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5357c703cfa14',
// 				'label' => 'Takeaway left blurb',
// 				'name' => 'takeaway_left_blurb',
// 				'type' => 'textarea',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'maxlength' => '',
// 				'rows' => '',
// 				'formatting' => 'br',
// 			),
// 			array (
// 				'key' => 'field_5357cba6f5172',
// 				'label' => 'divider2',
// 				'name' => '',
// 				'type' => 'message',
// 				'message' => '<hr />',
// 			),
// 			array (
// 				'key' => 'field_5363c49592414',
// 				'label' => 'Takeaway center icon',
// 				'name' => 'takeaway_center_icon',
// 				'type' => 'text',
// 				'instructions' => 'Type in the icon font class name, like "fa-github" or something. http://fontawesome.com',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5363c4a992415',
// 				'label' => 'Takeaway center title',
// 				'name' => 'takeaway_center_title',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5363c4b692416',
// 				'label' => 'Takeaway center blurb',
// 				'name' => 'takeaway_center_blurb',
// 				'type' => 'textarea',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'maxlength' => '',
// 				'rows' => '',
// 				'formatting' => 'br',
// 			),
// 			array (
// 				'key' => 'field_5363c4df92417',
// 				'label' => 'divider3',
// 				'name' => '',
// 				'type' => 'message',
// 				'message' => '<hr />',
// 			),
// 			array (
// 				'key' => 'field_5357cc6efd623',
// 				'label' => 'Takeaway right icon',
// 				'name' => 'takeaway_right_icon',
// 				'type' => 'text',
// 				'instructions' => 'Type in the icon font class name, like "fa-github" or something. http://fontawesome.com',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5357c72dcfa15',
// 				'label' => 'Takeaway right title',
// 				'name' => 'takeaway_right_title',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5357cbe2fba94',
// 				'label' => 'Takeaway right blurb',
// 				'name' => 'takeaway_right_blurb',
// 				'type' => 'textarea',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'maxlength' => '',
// 				'rows' => '',
// 				'formatting' => 'br',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'page',
// 					'operator' => '==',
// 					'value' => '14',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 				0 => 'permalink',
// 				1 => 'the_content',
// 				2 => 'excerpt',
// 				3 => 'custom_fields',
// 				4 => 'discussion',
// 				5 => 'comments',
// 				6 => 'revisions',
// 				7 => 'slug',
// 				8 => 'author',
// 				9 => 'format',
// 				10 => 'categories',
// 				11 => 'tags',
// 				12 => 'send-trackbacks',
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// 	register_field_group(array (
// 		'id' => 'acf_testimonials',
// 		'title' => 'Testimonials',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_5363e42753961',
// 				'label' => 'Testimonial Tagline',
// 				'name' => 'testimonial_tagline',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'page',
// 					'operator' => '==',
// 					'value' => '20',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 				0 => 'permalink',
// 				1 => 'excerpt',
// 				2 => 'custom_fields',
// 				3 => 'discussion',
// 				4 => 'comments',
// 				5 => 'revisions',
// 				6 => 'slug',
// 				7 => 'author',
// 				8 => 'format',
// 				9 => 'categories',
// 				10 => 'tags',
// 				11 => 'send-trackbacks',
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// 	register_field_group(array (
// 		'id' => 'acf_what-youll-learn',
// 		'title' => 'What You\'ll Learn',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_5357d66e1666b',
// 				'label' => 'Days Tagline',
// 				'name' => 'days_tagline',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5357d53ec9b8b',
// 				'label' => 'break',
// 				'name' => '',
// 				'type' => 'message',
// 				'message' => '<hr />',
// 			),
// 			array (
// 				'key' => 'field_5357c62e07655',
// 				'label' => 'Day 1 Title',
// 				'name' => 'day_1_title',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5357c63e07656',
// 				'label' => 'Day 1 Description',
// 				'name' => 'day_1_description',
// 				'type' => 'textarea',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'maxlength' => '',
// 				'rows' => '',
// 				'formatting' => 'br',
// 			),
// 			array (
// 				'key' => 'field_5357d6b3e7c2f',
// 				'label' => 'break1',
// 				'name' => '',
// 				'type' => 'message',
// 				'message' => '<hr />',
// 			),
// 			array (
// 				'key' => 'field_5357d52a9f30f',
// 				'label' => 'Day 2 Title',
// 				'name' => 'day_2_title',
// 				'type' => 'text',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_5357d5029f30e',
// 				'label' => 'Day 2 Description',
// 				'name' => 'day_2_description',
// 				'type' => 'textarea',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'maxlength' => '',
// 				'rows' => '',
// 				'formatting' => 'br',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'page',
// 					'operator' => '==',
// 					'value' => '16',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 				0 => 'permalink',
// 				1 => 'the_content',
// 				2 => 'excerpt',
// 				3 => 'custom_fields',
// 				4 => 'discussion',
// 				5 => 'comments',
// 				6 => 'revisions',
// 				7 => 'slug',
// 				8 => 'author',
// 				9 => 'format',
// 				10 => 'categories',
// 				11 => 'tags',
// 				12 => 'send-trackbacks',
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// }
