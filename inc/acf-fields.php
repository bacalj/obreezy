<?php
/**
 * ACF fields for this theme.
 *
 *
 * @package obreezy
 */

 if( function_exists('acf_add_local_field_group') ):

 acf_add_local_field_group(array (
 	'key' => 'group_56d869d7ce7d7',
 	'title' => 'Related Posts',
 	'fields' => array (
 		array (
 			'key' => 'field_56d869e770181',
 			'label' => 'Relationship Field',
 			'name' => 'relationship_field',
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
