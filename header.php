<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package coulrophobia
 */

if ($_COOKIE['iwashere'] != "yes") {
    setcookie("iwashere", "yes", time()+315360000);
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" style="position:relative;" class="hfeed site">
<div id="trans-bg" style="background-color: #<?php background_color(); ?>;"></div>

<?php if (is_front_page()): ?>
        <div id="bg-fade-in" style="background-color: #<?php background_color(); ?>"></div>
<?php endif ?>

    <header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div id="logo">
                <h1 class="hidden"><?php bloginfo('name'); ?></h1>
                    <a href="<?php echo site_url(); ?>">
                        <img class="img-responsive"
                        width="420"
                        src="<?php echo( get_header_image() ); ?>"
                        alt="<?php bloginfo('name'); ?> - Logo" />
                    </a>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                        <?php



                        ?>
                    <?php /* Primary navigation */
                    wp_nav_menu( array(
                        'menu'            => '',
                        'container'       => 'div',
                        'container_id'    => 'bs-example-navbar-collapse-2',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_class'      => 'menu',
                        'theme_location'  => 'primary-menu',
                        'menu_class'      => 'nav navbar-nav',
                        'menu_id'         => '',
                        'depth'           => '3',
                      //Process nav menu using our custom nav walker
                      'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>
                    </nav>
                </div>
            </div>

        </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content container <?php if (is_front_page()) {echo 'content-fade-in';} ?>">
    <div class="row">