<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- ######### CSS STYLES ######### -->
  
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/reset.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style.css" type="text/css" />
      
    <!-- font awesome icons -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/font-awesome/css/font-awesome.min.css">
    
    <!-- simple line icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/simpleline-icons/simple-line-icons.css" media="screen" />
      
    <!-- et linefont icons -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/et-linefont/etlinefont.css">
      
    <!-- animations -->
    <link href="<?php echo get_template_directory_uri(); ?>/library/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
      
    <!-- responsive devices styles -->
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/library/css/responsive-leyouts.css" type="text/css" />
      
    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/library/css/shortcodes.css" type="text/css" />

    <!-- mega menu -->
    <link href="<?php echo get_template_directory_uri(); ?>/library/js/mainmenu/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/library/js/mainmenu/demo.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/library/js/mainmenu/menu.css" rel="stylesheet">
    
    <!-- MasterSlider -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/js/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/js/masterslider/skins/default/style.css" />
      
    <!-- cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/js/cubeportfolio/cubeportfolio.min.css">
      
    <!-- owl carousel -->
    <link href="<?php echo get_template_directory_uri(); ?>/library/js/carouselowl/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/library/js/carouselowl/owl.carousel.css" rel="stylesheet">
      
    <!-- tabs 2 -->
    <link href="<?php echo get_template_directory_uri(); ?>/library/js/tabs2/tabacc.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/library/js/tabs2/detached.css" rel="stylesheet" />

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">




					<?php //fromBONES to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<!-- <p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p> -->

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<!-- <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement"> -->
						<?php /*wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						));*/ ?>

					<!-- </nav> endFromBONES -->

  <div class="site_wrapper">

    <div class="top_nav">
    <div class="container">
            
        <div class="left">
        
             <a href="#"><i class="fa fa-envelope"></i>&nbsp; hello@toddl.es</a> <i class="fa fa-phone-square"></i>&nbsp; (215) 360-7656
            
        </div><!-- end left -->
        
        <div class="right">
        
            <a href="#" class="tpbut two active"><i class="fa fa-pencil-square-o"></i>&nbsp; Register</a>
            <a href="#" class="tpbut"><i class="fa fa-lock"></i>&nbsp; Login</a>
            
            <ul class="topsocial">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
                 
        </div><!-- end right -->
            
    </div>
    </div><!-- end top navigation links -->


    <div class="clearfix"></div>


    <header class="header">
     
      <div class="container">
        
        <!-- Logo -->
        <div class="logo"><a href="index.html" id="logo"></a></div>
        
      <!-- Navigation Menu -->
        <div class="menu_main">
        
          <div class="navbar yamm navbar-default">
            
              <div class="navbar-header">
                <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
                  <button type="button" > <i class="fa fa-bars"></i></button>
                </div>
              </div>
              
              <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
              
                <nav>
                
                  <ul class="nav navbar-nav">
                  
                    <li class="dropdown yamm-fw"> <a href="index.html" class="dropdown-toggle active">Home</a>
                    
                        <ul class="dropdown-menu">
                            <li> 
                            <!-- Content container to add padding -->
                                <div class="yamm-content">
                                    <div class="row">
                                    
                                    <ul class="col-sm-6 col-md-3 list-unstyled">
                                    <li>
                                        <p>Home Styles 1</p>
                                    </li>
                                    <li><a href="index1.html"><i class="fa fa-caret-right"></i> Demo Version 1</a></li>
                                    <li><a href="index2.html"><i class="fa fa-caret-right"></i> Demo Version 2</a></li>
                                    <li><a href="index3.html"><i class="fa fa-caret-right"></i> Demo Version 3</a></li>
                                    <li><a href="index4.html"><i class="fa fa-caret-right"></i> Demo Version 4</a></li>
                                    <li><a href="index5.html"><i class="fa fa-caret-right"></i> Demo Version 5</a></li>
                                    <li><a href="index6.html"><i class="fa fa-caret-right"></i> Demo Version 6</a></li>
                                    <li><a href="index7.html"><i class="fa fa-caret-right"></i> Demo Version 7</a></li>
                                    <li><a href="index8.html"><i class="fa fa-caret-right"></i> Demo Version 8</a></li>
                                    <li><a href="index9.html"><i class="fa fa-caret-right"></i> Demo Version 9</a></li>
                                    <li><a href="index10.html"><i class="fa fa-caret-right"></i> Demo Version 10</a></li>
                                    </ul>
                                    
                                    <ul class="col-sm-6 col-md-3 list-unstyled">
                                    <li>
                                        <p>Home Styles 2</p>
                                    </li>
                                    <li><a href="index11.html"><i class="fa fa-caret-right"></i> Demo Version 11</a></li>
                                    <li><a href="index12.html"><i class="fa fa-caret-right"></i> Demo Version 12</a></li>
                                    <li><a href="index13.html"><i class="fa fa-caret-right"></i> Demo Version 13</a></li>
                                    <li><a href="index14.html"><i class="fa fa-caret-right"></i> Demo Version 14</a></li>
                                    <li><a href="index15.html"><i class="fa fa-caret-right"></i> Demo Version 15</a></li>
                                    <li><a href="index16.html"><i class="fa fa-caret-right"></i> Demo Version 16</a></li>
                                    <li><a href="index17.html"><i class="fa fa-caret-right"></i> Demo Version 17</a></li>
                                    <li><a href="index18.html"><i class="fa fa-caret-right"></i> Demo Version 18</a></li>
                                    <li><a href="index19.html"><i class="fa fa-caret-right"></i> Demo Version 19</a></li>
                                    <li><a href="index.html"><i class="fa fa-caret-right"></i> Demo Version 20</a></li>
                                    </ul>
                                    
                                    <ul class="col-sm-6 col-md-3 last list-unstyled">
                                    <li>
                                        <p>Demos (coming soon)</p>
                                    </li> 
                                    <li><a href="#"><i class="fa fa-caret-right"></i> One Page Version 1</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i> One Page Version 2</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> One Page Version 3</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> One Page Version 4</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Left Menu Version 1</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Left Menu Version 2</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Left Menu Version 3</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Right Menu Version 1</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Right Menu Version 2</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Right Menu Version 3</a></li>
                                    
                                    
                                    </ul>
                                    
                                    </div>
                                </div>
                            </li>
                        </ul>
                        
                    </li>
                    
                    <li class="dropdown"><a href="about.html" class="dropdown-toggle">Pages</a>
                        <ul class="dropdown-menu" role="menu">
                        <li><a href="about.html">About Style 1</a></li>
                        <li><a href="about2.html">About Style 2</a></li>
                        <li><a href="about3.html">About Style 3</a></li>
                        
                        <li><a href="services.html">Services Style 1</a></li>
                        <li><a href="services2.html">Services Style 2</a></li>
                        <li><a href="services3.html">Services Style 3</a></li>
                        
                        <li><a href="team.html">Our Team Style 1</a></li>
                        <li><a href="team2.html">Our Team Style 2</a></li>
                        
                        <li class="dropdown-submenu mul"> <a tabindex="-1" href="#">Multi Level Submenu +</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Menu Item 1</a></li>
                                <li><a href="#">Menu Item 2</a></li>
                                <li><a href="#">Menu Item 3</a></li>
                            </ul>
                        </li>
                        </ul>
                    </li>
            
                    <li class="dropdown yamm-fw"> <a href="left-sidebar.html" class="dropdown-toggle">Features</a>
                        <ul class="dropdown-menu">
                        <li> 
                        <div class="yamm-content">
                          <div class="row">
                                              
                            <ul class="col-sm-6 col-md-3 list-unstyled">
                                <li>
                                    <p>Useful Pages 1</p>
                                </li>
                                <li><a href="left-sidebar.html"><i class="fa fa-angle-right"></i>Left Sidebar</a></li>
                                <li><a href="right-sidebar.html"><i class="fa fa-angle-right"></i>Right Sidebar</a></li>
                                <li><a href="left-nav.html"><i class="fa fa-angle-right"></i>Left Navigation</a></li>
                                <li><a href="right-nav.html"><i class="fa fa-angle-right"></i>Right Navigation</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Login Form</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Registration Form</a></li>
                                <li><a href="404.html"><i class="fa fa-angle-right"></i>404 Error Page</a></li>
                                <li><a href="faq.html"><i class="fa fa-angle-right"></i>FAQs Page</a></li>
                                <li><a href="video-bg.html"><i class="fa fa-angle-right"></i>Video Backgrounds</a></li>
                            </ul>
                            
                            <ul class="col-sm-6 col-md-3 list-unstyled">
                                <li>
                                   <p>Useful Pages 2</p>
                                </li>
                                <li><a href="coming-soon.html" target="_blank"><i class="fa fa-angle-right"></i>Coming Soon</a></li>
                                <li><a href="history.html"><i class="fa fa-angle-right"></i>History Timeline</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Video BG Slider</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Header Styles</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Footer Styles</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Masonry Gallerys</a> </li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Parallax Backgrounds</a> </li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Background Videos</a> </li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Create your Own</a> </li>
                            </ul>
                        
                            <ul class="col-sm-6 col-md-3 last list-unstyled">
                            <li>
                               <p>More Features</p>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Mega Menu</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Diffrent Websites</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Cross Browser Check</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Premium Sliders</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Diffrent Slide Shows</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Video BG Effects</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>100+ Feature Sections</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Use for any Website</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Free Updates</a></li>
                            </ul>
                            
                          </div>
                        </div>
                        </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown"><a href="portfolio-5.html" class="dropdown-toggle">Portfolio</a>
                        <ul class="dropdown-menu" role="menu">
                        <li> <a href="portfolio-1.html">Single Item</a> </li>
                        <li> <a href="portfolio-5.html">Portfolio Masonry</a> </li>
                        <li> <a href="portfolio-4.html">Portfolio Columns 4</a> </li>
                        <li> <a href="portfolio-3.html">Portfolio Columns 3</a> </li>
                        <li> <a href="portfolio-2.html">Portfolio Columns 2</a> </li>
                        <li> <a href="portfolio-6.html">Portfolio + Sidebar</a> </li>
                        <li> <a href="portfolio-7.html">Portfolio Full Width</a> </li>
                        <li> <a href="portfolio-8.html">Image Gallery</a> </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown yamm-fw"> <a href="template1.html" class="dropdown-toggle">Shortcodes</a>
                        <ul class="dropdown-menu">
                        <li> 
                        <div class="yamm-content">
                          <div class="row">
                          
                            <ul class="col-sm-6 col-md-3 list-unstyled two">
                                <li><a href="template1.html"><i class="fa fa-plus-square"></i> Accordion &amp; Toggle</a></li>
                                <li><a href="template2.html"><i class="fa fa-leaf"></i> Title Styles</a></li>
                                <li><a href="template3.html"><i class="fa fa-bars"></i> List of Dividers</a></li>
                                <li><a href="template4.html"><i class="fa fa-exclamation-triangle"></i> Boxes Alert</a></li>
                                <li><a href="template5.html"><i class="fa fa-hand-o-up"></i> List of Buttons</a></li>
                                <li><a href="template6.html"><i class="fa fa-cog"></i> Carousel Sliders</a></li>
                                <li><a href="template7.html"><i class="fa fa-file-text"></i> Page Columns</a></li>
                                <li><a href="template8.html"><i class="fa fa-rocket"></i> Animated Counters</a></li>
                            </ul>
                            
                            <ul class="col-sm-6 col-md-3 list-unstyled two">
                                <li><a href="template9.html"><i class="fa fa-pie-chart"></i> Pie Charts</a></li>
                                <li><a href="template10.html"><i class="fa fa-flag"></i> Font Icons</a></li>
                                <li><a href="template11.html"><i class="fa fa-umbrella"></i> Flip Boxes</a></li>
                                <li><a href="template12.html"><i class="fa fa-picture-o"></i> Image Frames</a></li>
                                <li><a href="template13.html"><i class="fa fa-table"></i> Pricing Tables</a></li>
                                <li><a href="template14.html"><i class="fa fa-line-chart"></i> Progress Bars</a></li>
                                <li><a href="template15.html"><i class="fa fa-toggle-on"></i> List of Tabs</a></li>
                                <li><a href="template16.html"><i class="fa fa-paper-plane"></i> Popover &amp; Tooltip</a></li>
                            </ul>
                            
                            <ul class="col-sm-6 col-md-3 last list-unstyled">
                                <li>
                                    <p>About Website</p>
                                </li>
                                <li class="dart">
                                    <img src="http://placehold.it/230x135" alt="" class="rimg" />
                                    There many variations passages available majority have alteration in some form by injected humoue on randomised words. 
                                </li>
                            </ul>
                             
                          </div>
                        </div>
                        </li>
                        </ul>
                    </li>

                    <li class="dropdown"> <a href="blog-3.html" class="dropdown-toggle">Blog </a>
                        <ul class="dropdown-menu multilevel" role="menu">
                        <li> <a href="blog-4.html">With Masonry</a> </li>
                        <li> <a href="blog.html">With Large Image</a> </li>
                        <li> <a href="blog-2.html">With Medium Image</a> </li>
                        <li> <a href="blog-3.html">With Small Image</a> </li>
                        <li> <a href="blog-post.html">Single Post</a> </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown"><a href="contact.html" class="dropdown-toggle">Contact</a>
                        <ul class="dropdown-menu two" role="menu">
                        <li> <a href="contact.html">Contact Style 1</a> </li>
                        <li> <a href="contact2.html">Contact Style 2</a> </li>
                        <li> <a href="contact3.html">Contact Style 3</a> </li>
                        </ul>
                    </li>
                    
                  </ul>
                  
                </nav>
                
              </div>
            
          </div>
        </div>
      <!-- end Navigation Menu -->
        
        
      </div>
        
    </header>


    <div class="clearfix"></div>

