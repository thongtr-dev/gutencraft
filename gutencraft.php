<?php

/**
 * Plugin Name:       Gutencraft
 * Description:       Gutenberg blocks for online stores that sell.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            thongtruong
 * Author URI:        https://thongtruong.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutencraft
 *
 * @package           gutencraft
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function gutencraft_blocks_init()
{
	register_block_type(__DIR__ . '/build/product-comparison-block');
	register_block_type(__DIR__ . '/build/related-products-slider-block');
}
add_action('init', 'gutencraft_blocks_init');
