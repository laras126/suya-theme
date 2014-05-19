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

// // Uncomment all of this on remote site
// // Advanced Custom Fields export
// include_once('acf.php');
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
// 				'key' => 'field_5363c4df92417',
// 				'label' => 'divider3',
// 				'name' => '',
// 				'type' => 'message',
// 				'message' => '<hr />',
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
// 				'key' => 'field_5357d6b3e7c2f',
// 				'label' => 'break1',
// 				'name' => '',
// 				'type' => 'message',
// 				'message' => '<hr />',
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
