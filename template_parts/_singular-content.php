<?php
/**
*========================================
*	
*	Singular Content Template
*
*   @package DiademNamespace
*
*========================================*/

?>
<div class="wp-the-content sm-row">
    <?php get_template_part('template_parts/elements', 'filter-container'); ?>
    <?php the_content(); ?>
</div>