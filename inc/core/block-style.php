<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package lumivox
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function lumivox_register_block_styles() {
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-outline-hover',
                'label' => __('Hover: Outline', 'lumivox')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-opacity',
                'label' => __('Hover: Opacity', 'lumivox')
            )
        );
    }
    add_action('init', 'lumivox_register_block_styles');
}
