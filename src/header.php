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
				jQuery( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
				});
				jQuery( ".dl-menuwrapper" ).hide();

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
			<ul class="dl-menu">
        
        
        
        
        <li><a href="#">Members</a>
        	<ul class="dl-submenu">
        	<li><a href="#">Become a Member</a></li>
        	<li><a href="#">News</a></li>
        	<li><a href="#">Events</a></li>
        	<li><a href="#">Library</a></li>
        	<li><a href="#">Resources</a></li>
        	<li><a href="#">Services</a>
        		<ul class="dl-submenu">
        		<li><a href="#">Counselling</a></li>
				<li><a href="#">Employment</a></li>
				<li><a href="#">Financial assistance</a></li>
				<li><a href="#">Recreation and support</a></li>
				<li><a href="#">Accessible format production</a></li>
				<li class="label">Specialist Services</a></li>
					<li><a href="#">Children and youth</a></li>
					<li><a href="#">Deafblind services</a></li>
					<li><a href="#">Māori services</a></li>
					<li><a href="#">Pacific services</a></li>

				
				</ul>
			</a></li>
        	</ul>
       </li>
        
        
        <li><a href="#">Support Us</a>
        	<ul class="dl-submenu">
        	<li><a href="#">Donate</a>
        		<ul class="dl-submenu">
        		<li><a href="#">Donate to Blind Week</a></li>
        		<li><a href="#">Donate your Tax Refund</a></li>
        		<li><a href="#">Leave a gift in your Will</a></li>
        		<li><a href="#">Give a major gift</a></li>
        		<li><a href="#">Corporate partnerships</a></li>
        		<li><a href="#">Stories & Heroes</a></li>
        		</ul>
        	</a></li>	
        	<li><a href="#">Fundraise</a></li>
        	<li><a href="#">Volunteer</a></li>
        	</ul>	
       </li>
        
        <li><a href="#">Learn</a>
        	<ul class="dl-submenu">
        	<li><a href="#">Learn about accesssibility</a></li>
        	<li><a href="#">Learn about blindness</a>
        		<ul class="dl-submenu">
        		<li><a href="#">Eye conditions</a></li></a></li>
				<li><a href="#">Deafblindness
				<li><a href="#">Meeting blind people</a></li>
				<li><a href="#">Guiding a blind person</a></li>
				<li><a href="#">Canes or guide dogs?</a></li>
				<li><a href="#">Sharing the road</a></li>
				<li><a href="#">Eye care tips</a></li>
				</ul>
			</a></li>
			<li><a href="#">Blindness & your Business</a></li>
			</ul>

        	
        </li>
        
        
        <li><a href="#">Shop</a></li>
        
        <li><a href="#">About</a></li>
        
          
          
        </ul>
		</div>
            
            
        </div><!-- #overlays -->
        
        
		
