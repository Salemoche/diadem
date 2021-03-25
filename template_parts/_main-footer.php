<?php
/**
 * Creates the Footer
 * 
 * @package DiademNamespace
 */

$menu_class = DiademNamespace\classes\Menus::get_instance();
?>

<div class="diadem-footer sm-row" id="diadem-footer">
    <div class="diadem-footer__content sm-block">
        <div class="diadem-footer__content__uni diadem-footer__content__uni-uzh sm-col sm-large-3 sm-small-6">
            <a class="diadem-footer__content__uni__link"
                href="<?php echo esc_url( get_field( 'link_uzh', 'option' ) ); ?>"
                target="_blank"
            >
                <div class="diadem-footer__content__uni__link__logo">
                    <?php echo wp_get_attachment_image( get_field('logo_uzh_footer', 'option')); ?>
                </div>
            </a>
            <div class="diadem-footer__content__uni__contact">
                <?php
                print(
                    wp_kses(
                        get_field('address_uzh', 'option'),
                        [
                            'a' => [
                                'href' => [],
                                'target' => []
                            ],
                            'p' => []
                        ]
                    )
                );
                ?>
            </div>
        </div>
        <div class="diadem-footer__content__main sm-col sm-large-3 sm-small-6">
            <?php get_template_part( 'template_parts/elements', 'social-media' ) ?>
            <?php get_template_part( 'template_parts/main', 'footer-nav' ) ?>
        </div>
        <div class="diadem-footer__content__uni diadem-footer__content__uni-unige sm-col sm-large-3 sm-small-6">
            <a class="diadem-footer__content__uni__link"
                href="<?php echo esc_url( get_field( 'link_unige', 'option' ) ); ?>"
                target="_blank"
            >
                <div class="diadem-footer__content__uni__link__logo">
                    <?php echo wp_get_attachment_image( get_field('logo_unige_footer', 'option')); ?>
                </div>
            </a>
            <div class="diadem-footer__content__uni__contact">
                <?php
                print(
                    wp_kses(
                        get_field('address_unige', 'option'),
                        [
                            'a' => [
                                'href' => [],
                                'target' => []
                            ],
                            'p' => []
                        ]
                    )
                );
                ?>
            </div>
        </div>
    </div>
    <div class="diadem-footer__copyright sm-block">
        <?php
        printf(
            '©%1$s University of Zurich & University of Geneva | Website by <a href="%2$s"> Salemoche</a>',
            date("Y"),
            DEVELOPER_URL
        );
        ?>
    </div>
</div>