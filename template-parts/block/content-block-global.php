<?php
/**
 * Block Name: Block global contact
 *
 * This is the template that displays the testimonial block.
 */
$id = 'content-block-global-' . $block['id'];

$content_block = get_field('content_global_block');

$tpl_slug = get_page_template_slug($content_block->ID);
$tpl_slug = str_replace('.php', '', $tpl_slug);

set_query_var( 'gcb_id', absint( $content_block->ID ) );
get_template_part($tpl_slug);

?>