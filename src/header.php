<?php
/**
 * Documentation & Quick Start Guide
 * @link http://bigemployee.com/projects/big-blank-responsive-wordpress-theme/
 *
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
        <!--[if lte IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/grid-inner.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/component.css" />

        
        <!-- build:css block1.css -->
        <link rel="stylesheet" type="text/css" href="css/nav.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <!-- endbuild -->


        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/nav.css" />
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.dlmenu.js"></script>

        <script type="text/javascript">
            jQuery( document ).ready(function() {

                jQuery( "#overlays" ).hide();

                // clients menu
                jQuery( "#clientsbtn" ).click(function() {
                    jQuery( "#overlays" ).toggle();
                  jQuery( "#clientsmenu" ).toggle();
                });
                jQuery( "#clientsmenu" ).hide();

                // search menu
                jQuery( "#searchbtn" ).click(function() {
                    jQuery( "#overlays" ).toggle();
                  jQuery( "#morphsearch" ).toggle();
                  jQuery( ".morphsearch-input").focus();
                });
                jQuery( "#morphsearch" ).hide();

                // close search
                jQuery( ".morphsearch-close" ).click(function() {
                    jQuery( "#overlays" ).hide();
                  jQuery( "#morphsearch" ).hide();
                });

                // esc key closes search overlay
                jQuery(document).keyup(function(e) {
                  if (e.keyCode == 27) {
                    jQuery( "#overlays" ).hide();
                    jQuery( "#morphsearch" ).hide();
                    }
                });

                // nav menu
                /*
                jQuery('#dl-menu .sub-menu').addClass('dl-submenu').removeClass('sub-menu');
                jQuery('#dl-menu .dl-submenu').prev().attr('href', '#');
                jQuery('#dl-menu .dl-submenu').prepend('<li class="dl-back"><a href="#">Back</a></li>');
                jQuery('#dl-menu > .dl-menu').prepend('<li class="header"> Navigation </li>');
                */

                jQuery('#dl-menu .sub-menu').addClass('dl-submenu').removeClass('sub-menu');
                jQuery('#dl-menu .dl-submenu').prev().attr('href', '#');
                //jQuery('#dl-menu').prepend('Open Menu');

                jQuery( '#dl-menu' ).dlmenu({
                    animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
                });
                jQuery( ".dl-menuwrapper" ).hide();


                /* events search geo */

                /* get lat lng with geolocation */
                function getPosition() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(showPosition);
                        jQuery("#geobtn").html('<i class="fa fa-circle-o-notch fa-spin"></i> Getting Location…');
                    } else {
                        jQuery("#geobtn").html('<i class="fa fa-exclamation"></i> Location not found');
                    }
                }

                /* use lat lng to do a reverse geocode and show nearby town */
                function showPosition(position) {
                    var lat = position.coords.latitude;
                    var lng = position.coords.longitude;
                    jQuery.get( "http://api.geonames.org/findNearbyPlaceName?lat="+lat+"&lng="+lng+"&username=blindfoundation", function( data ) {
                          var town = jQuery(data).find('toponymName').text();
                          jQuery('input.em-search-geo[type="text"]').val(town);
                          jQuery("#geobtn").html('<i class="fa fa-map-marker"></i> Location found');
                    });
                }

                /* if geo search exists on page, setup click event */
                if (jQuery("#geobtn_wrapper")[0]){
                    jQuery( "#geobtn" ).click(function(event) {
                        event.preventDefault();
                      getPosition();
                    });
                }

                /* if single event, style date and time */
                if (jQuery(".event-single-time")[0]){
                    var timestr = jQuery(".event-single-time").text();
                    var timearr = timestr.split("-");
                    var start = "<div class='start-time'>"+timearr[0]+"</div>";
                    var stop = "<div class='stop-time'> - "+timearr[1]+"</div>";
                    jQuery(".event-single-time").html(start+stop);

                    var datestr = jQuery(".event-single-date").text();
                    var datearr = datestr.split(" ");
                    var day = "<div class='day'>"+datearr[0]+"</div>";
                    var date = "<div class='date'>"+datearr[1]+"</div>";
                    var mth = "<div class='mth'>"+datearr[2]+"</div>";

                    jQuery(".event-single-date").html(day+date+mth);


                }







            });
        </script>


    </head>
    <body <?php body_class(); ?>>
        <header id="header" class="site-header" role="banner">
            <ul id="toolbar">

            <li class="toolbar-btn" id="clientsbtn">
            <a >
                <i class="fa fa-user fa-2x fa-fw" alt="Clients"></i>
            </a>
            </li>

            <li class="toolbar-btn" id="backbtn">
            <a >
                <i class="fa fa-chevron-left fa-2x fa-fw" alt="Back"></i>
            </a>
            </li>
            <li class="toolbar-btn" id="homebtn">
            <a  href="<?php echo home_url(); ?>" title="<?php _e('Home', 'bigblank'); ?>" rel="home">
                <i class="fa fa-home fa-2x fa-fw" alt="Home"></i>
            </a>
            </li>
            <li class="toolbar-btn" id="toolbar_title"><?php the_title(); ?>
            </li>

            <li class="toolbar-btn" id="searchbtn">
            <a href="#">
                <i class="fa fa-search fa-2x fa-fw" alt="Search"></i>
            </a>
            </li>

            <li class="toolbar-btn" id="menubtn">
            <a href="#">
                <i class="fa fa-bars fa-2x fa-fw dl-trigger"></i>
            </a>
            </li>



            </ul>
        </header><!-- #header -->

        <div id="overlays">

            <!-- clients menu -->
            <div id="clientsmenu">
                <div class="flex-grid">
                    <!--
                    <div class="grid-item"><div class="grid-inner"><i class="fa fa-newspaper-o fa-3x fa-fw"></i>News</div></div>
                    <div class="grid-item"><div class="grid-inner"><i class="fa fa-calendar fa-3x fa-fw"></i>Events</div></div>
                    <div class="grid-item"><div class="grid-inner"><i class="fa fa-bookmark fa-3x fa-fw"></i>Library</div></div>
                    <div class="grid-item"><div class="grid-inner"><i class="fa fa-shopping-cart fa-3x fa-fw"></i>Shop</div></div>
                    <div class="grid-item"><div class="grid-inner"><i class="fa fa-star fa-3x fa-fw"></i>Services</div></div>
                    <div class="grid-item"><div class="grid-inner"><i class="fa fa-phone fa-3x fa-fw"></i>Contact</div></div>
                    -->
                    <div class="grid-item"><div class="grid-inner">News</div></div>
                    <div class="grid-item"><div class="grid-inner">Events</div></div>
                    <div class="grid-item"><div class="grid-inner">Library</div></div>
                    <div class="grid-item"><div class="grid-inner">Shop</div></div>
                    <div class="grid-item"><div class="grid-inner">Services</div></div>
                    <div class="grid-item"><div class="grid-inner">Contact</div></div>

                </div>
            </div>


            <!-- search -->
            <div id="morphsearch" class="morphsearch open">



                <form class="morphsearch-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                <div><label class="screen-reader-text" for="s">Search:</label>
                <input class="morphsearch-input"  type="search" placeholder="Search" name="s" id="s" />
                <input class="morphsearch-submit" type="submit" id="searchsubmit" value="Search" />
                </div>
                </form>

            </div><!-- /morphsearch -->


            <!-- nav menu -->
            <div id="dl-menu" class="dl-menuwrapper">
                <!-- nav menu -->
                <ul class="dl-menu">
                <?php
                    if ( has_nav_menu( 'main_menu' ) ) {
                        wp_nav_menu(
                            array(
                                'menu' => 'main_menu',
                                'container' => '',
                                'echo' => true,
                                'fallback_cb' => 'wp_page_menu',
                                'items_wrap' => '%3$s',
                                'depth' => 3
                            )
                        );
                    } else {
                        wp_list_pages(
                            array(
                                'title_li' => '',
                                'sort_column' => 'menu_order',
                                'items_wrap' => '%3$s'
                            )
                        );
                    }
                ?>
                </ul>

        </div>

        </div><!-- #overlays -->

