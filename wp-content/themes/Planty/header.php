<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP Child Theme
 */
?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

    <?php wp_body_open(); ?>

    <?php do_action( 'ocean_before_outer_wrap' ); ?>

    <div id="outer-wrap" class="site clr">

        <a class="skip-link screen-reader-text" href="#main"><?php echo esc_html( oceanwp_theme_strings( 'owp-string-header-skip-link', false ) ); ?></a>

        <?php do_action( 'ocean_before_wrap' ); ?>

        <div id="wrap" class="clr">

            <?php do_action( 'ocean_top_bar' ); ?>

            <header id="site-header" class="minimal-header clr" data-height="74" itemscope="itemscope" itemtype="https://schema.org/WPHeader" role="banner">

                <div id="site-header-inner" class="clr container">

                    <div id="site-logo" class="clr" itemscope="" itemtype="https://schema.org/Brand">
                        <div id="site-logo-inner" class="clr">
                            <?php if ( has_custom_logo() ) : ?>
                                <?php the_custom_logo(); ?>
                            <?php else : ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link" rel="home" aria-current="page">
                                    <img fetchpriority="high" width="3592" height="330" src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.png' ); ?>" class="custom-logo" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" decoding="async">
                                </a>
                            <?php endif; ?>
                        </div><!-- #site-logo-inner -->
                    </div><!-- #site-logo -->

                    <div id="site-navigation-wrap" class="clr">
                        <nav id="site-navigation" class="navigation main-navigation clr" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" role="navigation">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'main_menu',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'main-menu dropdown-menu sf-menu',
                            ) );
                            ?>
                        </nav><!-- #site-navigation -->
                    </div><!-- #site-navigation-wrap -->

                    <div class="oceanwp-mobile-menu-icon clr mobile-right">
                        <a href="#mobile-menu-toggle" class="mobile-menu" aria-label="Mobile Menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            <span class="oceanwp-text">Menu</span>
                            <span class="oceanwp-close-text">Close</span>
                        </a>
                    </div><!-- .oceanwp-mobile-menu-icon -->

                </div><!-- #site-header-inner -->

                <div id="mobile-dropdown" class="clr" style="box-sizing: border-box; display: none;">
                    <nav class="clr" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                        <div id="mobile-nav" class="navigation clr">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'mobile_menu',
                                'menu_id'        => 'mobile-menu',
                                'menu_class'     => 'menu',
                            ) );
                            ?>
                        </div>
                    </nav>
                </div>

            </header><!-- #site-header -->

            <?php do_action( 'ocean_before_main' ); ?>

            <main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

                <?php do_action( 'ocean_page_header' ); ?>

                <div id="content" class="site-content">
                    <!-- Your content here -->
                </div><!-- #content -->

            </main><!-- #main -->

        </div><!-- #wrap -->

    </div><!-- #outer-wrap -->

    <?php wp_footer(); ?>

</body>
</html>
