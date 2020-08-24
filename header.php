<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
		<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
        <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

 <!-- =================================================
    ================= Header   =============
=========================================================-->   
<header id="masthead-area" class="clearfix">
    <div class="containertwo">
        <!-- logo  -->
		<div class="site-branding clearfix">
            <a href="<?php bloginfo('home') ?>">
            <?php 
                 $thmelogo = esc_html(cs_get_option('logo_img'));

                $logo_img = wp_get_attachment_image($thmelogo, mediam);
            ?>
                <?php if($logo_img): ?>
                <?php echo $logo_img; ?>
               <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
               <?php endif; ?>
            </a>
        </div>
        
        <!-- Mian menu  -->
        <div class="mainmenu clearfix fordesktop clearfix">
            <nav id="site-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </div>


    <!-- Mbile Menu  -->
    <div class="btn_area formobile">
         <h5 class="slide_top">Menu <i class="fas fa-bars"></i></h5>
    </div>

    <!-- Toggle division content -->
    <div id="matelpopup" class="formobile clearfix">
        <div id="matelpupclose" class="btn_area">
            <h4 class="slide_top"><i class="fas fa-times"></i> </h5>
        </div>
        <div class="toggle-mobilemenu-area clearfix">
          
        <!-- mobile menu  -->
        <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>     

        </div>
    </div>

</div>
</header><!-- #masthead -->
