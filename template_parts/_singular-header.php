<?php
/**
*========================================
*	
*	Singular Header Template
*
*   @package DiademNamespace
*
*========================================*/

    $the_post_id = get_the_ID();
    $has_post_thumbnail = get_the_post_thumbnail( $the_post_id );
    $frontpage_class = is_front_page() ? 'diadem-header-frontpage': '';
    $random_value = random_int(1, 4);
    $header_height = get_field('header_height') ? 'diadem-header-' . get_field('header_height') : '';
    $classes = $frontpage_class . ' ' . $header_height;

?>
    <div class="diadem-header sm-row <?php echo $classes ?>">
        <div class="diadem-header__background">
            <?php
            if ($has_post_thumbnail):
                echo get_the_post_thumbnail( $the_post_id, 'full', [] );
            endif; ?>
        </div>
        <div class="diadem-header__content sm-row">
            <div class="diadem-header__content__background diadem-gradient-header-<?php echo $random_value; ?>"></div>
            <div class="diadem-header__content__title sm-block">
                <h1 class="diadem-header-title"><?php esc_html( the_title() ); ?></h1>
                <?php
                if (is_page() && !empty(get_field('header_lead'))):
                    ?>
                    <div class="diadem-header__content__title__lead">
                        <?php echo esc_html( get_field('header_lead') ); ?>
                    </div>
                <?php
                endif;
                ?>

                <?php
                if (is_single()):
                    ?>
                    <div class="diadem-meta sm-block">
                        This is the meta information
                    </div>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>