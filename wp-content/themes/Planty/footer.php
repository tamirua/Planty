<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>

	</main><!-- #main -->

	<?php do_action( 'ocean_after_main' ); ?>

	<?php do_action( 'ocean_before_footer' ); ?>

	<?php
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
    do_action( 'ocean_footer' );
    ?>
    <div id="footer-bottom" class="clr">
        <div id="footer-bottom-inner" class="container clr">
            <div id="footer-bottom-menu" class="navigation clr">
                <?php
                if ( has_nav_menu( 'footer_menu' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'footer_menu',
                        'container'      => 'div',
                        'container_id'   => 'menu-footer-menu-container',
                        'menu_class'     => 'menu',
                    ) );
                }
                ?>
            </div><!-- #footer-bottom-menu -->
        </div><!-- #footer-bottom-inner -->
    </div><!-- #footer-bottom -->
    <?php
}
?>


	<?php do_action( 'ocean_after_footer' ); ?>

</div><!-- #wrap -->

<?php do_action( 'ocean_after_wrap' ); ?>

</div><!-- #outer-wrap -->

<?php do_action( 'ocean_after_outer_wrap' ); ?>

<?php
// If is not sticky footer.
if ( ! class_exists( 'Ocean_Sticky_Footer' ) ) {
	get_template_part( 'partials/scroll-top' );
}
?>

<?php
// Search overlay style.
if ( 'overlay' === oceanwp_menu_search_style() ) {
	get_template_part( 'partials/header/search-overlay' );
}
?>

<?php
// If sidebar mobile menu style.
if ( 'sidebar' === oceanwp_mobile_menu_style() ) {

	// Mobile panel close button.
	if ( get_theme_mod( 'ocean_mobile_menu_close_btn', true ) ) {
		get_template_part( 'partials/mobile/mobile-sidr-close' );
	}
	?>

	<?php
	// Mobile Menu (if defined).
	/*get_template_part( 'partials/mobile/mobile-nav' );*/
	?>

	<?php
	// Mobile search form.
	if ( get_theme_mod( 'ocean_mobile_menu_search', true ) ) {
		ob_start();
		get_template_part( 'partials/mobile/mobile-search' );
		echo ob_get_clean();
	}
}
?>

<?php
// If full screen mobile menu style.
/*if ( 'fullscreen' === oceanwp_mobile_menu_style() ) {
	get_template_part( 'partials/mobile/mobile-fullscreen' );
}*/
?>

<?php wp_footer(); ?>
</body>
</html>
