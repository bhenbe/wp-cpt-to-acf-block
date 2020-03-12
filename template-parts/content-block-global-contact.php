<?php
/*
Template Name: Bloc global address layout
Template Post Type: blockglobal
*/

?>

<article class="gbc-contact" id="post-<?php echo $gcb_id; ?>">
	
    <span class="block-global-contact"><?php the_field('cbg_contact_name', $gcb_id); ?></span>

    <a href="mailto:<?php the_field('cbg_contact_email'); ?>"><?php the_field('cbg_contact_email', $gcb_id); ?></a>

</article><!-- .block-global-contact -->
