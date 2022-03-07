<?php
/**
 * Functions which enhance the theme by utilizing Woo Commerce 
 *
 * @package NextTheme
 */

function next_use_block_editor_for_post_type($use_block_editor, $post_type){
  if('product'=== $post_type){
    $use_block_editor = true; 
  }
  return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'next_use_block_editor_for_post_type', 10, 2 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 4 );