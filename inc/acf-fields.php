<?php
/**
 * ACF fields for this theme.
 *
 *
 * @package obreezy
 */

 if( function_exists('acf_add_local_field_group') ):

 acf_add_local_field_group(array (
 	'key' => 'group_56f96ccfa8ca0',
 	'title' => 'Images',
 	'fields' => array (
 		array (
 			'key' => 'field_56f96ce744602',
 			'label' => 'Allow image annotation',
 			'name' => 'allow_image_annotation',
 			'type' => 'true_false',
 			'instructions' => 'If this box is checked: all images added to the content area will be "taken over" by the image annotation plugin (if that plugin is activated).	If you have enabled the [zoom] shortcode for this page, you should not check this box. ',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array (
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'message' => '',
 			'default_value' => 0,
 		),
 	),
 	'location' => array (
 		array (
 			array (
 				'param' => 'post_type',
 				'operator' => '==',
 				'value' => 'post',
 			),
 		),
 	),
 	'menu_order' => 0,
 	'position' => 'normal',
 	'style' => 'default',
 	'label_placement' => 'top',
 	'instruction_placement' => 'label',
 	'hide_on_screen' => '',
 	'active' => 1,
 	'description' => '',
 ));

 acf_add_local_field_group(array (
 	'key' => 'group_56d869d7ce7d7',
 	'title' => 'Related Posts',
 	'fields' => array (
 		array (
 			'key' => 'field_56d869e770181',
 			'label' => 'Related Posts',
 			'name' => 'related_posts',
 			'type' => 'relationship',
 			'instructions' => '',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array (
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'post_type' => array (
 				0 => 'post',
 				1 => 'page',
 			),
 			'taxonomy' => array (
 			),
 			'filters' => array (
 				0 => 'search',
 				1 => 'taxonomy',
 			),
 			'elements' => array (
 				0 => 'featured_image',
 			),
 			'min' => '',
 			'max' => '',
 			'return_format' => 'id',
 		),
 	),
 	'location' => array (
 		array (
 			array (
 				'param' => 'post_type',
 				'operator' => '==',
 				'value' => 'post',
 			),
 		),
 	),
 	'menu_order' => 0,
 	'position' => 'normal',
 	'style' => 'default',
 	'label_placement' => 'top',
 	'instruction_placement' => 'label',
 	'hide_on_screen' => '',
 	'active' => 1,
 	'description' => '',
 ));

 endif;
