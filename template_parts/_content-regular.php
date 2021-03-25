<?php
$has_header = get_field('has_header');
$classes = !$has_header ? 'diadem-content--no-header' : '';

if ( isset($has_header) && $has_header == 1 ):
    get_template_part('template_parts/singular', 'header');
endif;

?>

<div class="diadem-content <?php echo $classes; ?>">
    <?php get_template_part('template_parts/singular', 'content');?>
</div>