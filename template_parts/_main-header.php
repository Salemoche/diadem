<?php
/**
 * Creates the Navigation Menu
 * 
 * @package DiademNamespace
 */

$menu_class = DiademNamespace\classes\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('diadem-header-menu');
$header_menu = wp_get_nav_menu_items( $header_menu_id );
$the_post_id = $post ? $post->ID : 0;
?>

<nav class="navbar diadem-navigation sm-row">
    <!-- < ?php if (function_exists( 'the_custom_logo')) {
        the_custom_logo();
    } ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> -->

    <div class="diadem-navigation-container">
        <div class="diadem-navigation__info sm-block">
            <a class="diadem-navigation__info__link diadem-navigation__info__link-uzh"
                href="<?php echo esc_url( get_field( 'link_uzh', 'option' ) ); ?>"
                target="_blank"
            >
                <div class="diadem-navigation__info__link__logo">
                    <?php echo wp_get_attachment_image( get_field('logo_uzh', 'option')); ?>
                </div>
            </a>
            <div class="diadem-navigation__info__title">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <h2><?php echo esc_html( get_field( 'menu_heading', 'option' ) ); ?></h2>
                </a>
            </div>
            <a class="diadem-navigation__info__link diadem-navigation__info__link-unige"
                href="<?php echo esc_url( get_field( 'link_unige', 'option' ) ); ?>"
                target="_blank"
            >
                <div class="diadem-navigation__info__link__logo">
                    <?php echo wp_get_attachment_image( get_field('logo_unige', 'option')); ?>
                </div>
            </a>
        </div>

        <div class="diadem-navigation__menu diadem-header-menu" id="header-menu">
            <?php
            if ( !empty( $header_menu ) && is_array( $header_menu) ) :
                ?>
                <ul class="header-menu__list">

                    <?php 
                    foreach ( $header_menu as $menu_item ) :
                        if( !$menu_item->menu_item_parent ) :

                            $child_menu_items = $menu_class->get_child_menu_items($header_menu, $menu_item->ID);
                            $has_children = is_array($child_menu_items) && !empty( $child_menu_items );
                            $related_post_id = $menu_item->object_id;
                            $is_current_class = $related_post_id == $the_post_id ? "menu-item--current" : "";

                            
                            if ( !$has_children) : 
                                ?>
                                <li class="header-menu__list__item menu-item header-menu-item <?php echo $is_current_class; ?>">
                                    <a class="header-menu-item__link menu-item__link" href="<?php echo esc_url( $menu_item->url ) ?> "><?php echo esc_html( $menu_item->title )?></span></a>
                                </li>
                                <?php 
                            else : 
                                ?>
                                <li class="header-menu__list__item menu-item header-menu-item header-menu-item-dropdown <?php echo $is_current_class; ?>">
                                    <a class="header-menu-item__link menu-item__link" href="<?php echo esc_url( $menu_item->url ) ?> ">
                                        <?php echo esc_html( $menu_item->title ) ?> 
                                    </a>
                                    <?php
                                    foreach ( $child_menu_items as $child_menu_item ) :
                                        ?>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="<?php echo esc_url( $child_menu_item->url ) ?>"><?php echo esc_html( $child_menu_item->title ) ?></a>
                                        </div>
                                        <?php
                                    endforeach;
                                    ?>
                                </li>
                                <?php 
                            endif;
                            ?>

                            <?php
                        endif;
                    endforeach;
                    ?>
                </ul>
                <?php
            endif;
            ?>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>