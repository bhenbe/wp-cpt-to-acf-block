<?php
/*
Template Name: Bloc global testimonial layout
Template Post Type: blockglobal
*/

?>

<article class="gbc-testimonial" id="post-<?php echo $gcb_id; ?>">
	
    <p class="block-global-contact"><?php the_field('cbg_testimonial_quote', $gcb_id); ?></p>

    <span><?php the_field('cbg_testimonial_name', $gcb_id); ?></span>

</article><!-- .block-global-contact -->
