<?php
/**
*========================================
*	
*	Tag Cloud Template
*
*   @package DiademNamespace
*
*========================================*/

$args = wp_parse_args(
    $args,
    array(
        'query_arguments'   => []
    )
);

$tags = get_tags();

// $tags = wp_generate_tag_cloud( $tags:array, $args:string|array )
// term_id
?>

<div class="diadem-tag-cloud">
    <?php foreach ( $tags as $tag ) : if ( $tag->count >= 2 ) :?>
        <input 
            type="button" title="<?php echo $tag->slug; ?>" 
            name="<?php echo $tag->slug; ?>"  
            value="<?php echo $tag->name; ?>" 
            class="diadem-tag negative sm-filter-input"
        >
    <?php endif; endforeach;?>
    <!-- < ?php wp_generate_tag_cloud($tags) ?> -->
</div>
