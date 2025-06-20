<?php

/**
 * lumivox: Block Patterns
 *
 * @since lumivox 1.0.0
 */

/**
 * Registers pattern categories for lumivox
 *
 * @since lumivox 1.0.0
 *
 * @return void
 */
function lumivox_register_pattern_category()
{
	$block_pattern_categories = array(
		'lumivox' => array('label' => __('Lumivox', 'lumivox')),
	);

	$block_pattern_categories = apply_filters('lumivox_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'lumivox_register_pattern_category', 9);
