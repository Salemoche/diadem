<?php

/**
 * Register Block Classes
 * 
 * @package DIADEM
 */

namespace DiademNamespace\classes;

use DiademNamespace\traits\Singleton;

class Blocks {
    use Singleton;

    function __construct() {

        add_action('block_categories', [$this, 'add_block_categories']);
        add_action('acf/init', [$this, 'register_block']);
    }


    public function add_block_categories ( $categories ) {
        
        $category_slugs = wp_list_pluck( $categories, 'slug' );

        return in_array( 'diadem', $category_slugs, true) ? $categories : 
            array_merge ([
                    [
                        'slug' => 'diadem',
                        'title' => __( 'UZH – UNIGE Blocks', 'diadem' ),
                        'icon' => 'table-row-after'
                    ]
                ], 
                $categories
            );
    }

    public function register_block () {
        if( function_exists('acf_register_block_type') ) {

            acf_register_block_type(array(
                'name'              => 'block',
                'title'             => __('Block'),
                'description'       => __('A custom block for the Block'),
                'render_template'   => DIADEM_BLOCK_TEMPLATE_DIR . '/block.php',
                'category'          => 'diadem',
                'mode'              => 'auto',
                // 'align'             => 'full',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'block'),
                // 'enqueue_assets'    => [ $this, 'enqueue_assets' ],
            ));
        }
    }

    public function enqueue_assets () {
        // wp_enqueue_script( 'block-testimonial', SALEMOCHE_ESSENTIALS_JS_URL . '/main.js', ['jquery'], false, true );
        // wp_enqueue_style( 'block-testimonial', SALEMOCHE_ESSENTIALS_CSS_URL . '/main.css');
    }
}