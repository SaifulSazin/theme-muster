<?php

/*--------------------------------------------------
================ Mainmenu shorcode  ================ 
---------------------------------------------------*/

  function progress_mainmu_shortcode(){
  ob_start(); ?>

  <div class="mainimenu clearfix">
       <?php
            wp_nav_menu(
                array(
                    'theme_location'=> 'main-menu',
                    'menu_id'=> 'manin_menu',
                    'container'=> '',

            ));
            ?>
  </div>


  <?php $mainmenu = ob_get_clean();

  return $mainmenu;


  }

  add_shortcode('mainmenu','progress_mainmu_shortcode');




/*--------------------------------------------------
================ Mainmenu shorcode  ================ 
---------------------------------------------------*/

  function progress_footer_mainmu_shortcode(){
  ob_start(); ?>

  <div class="footer-area clearfix">
       <?php
            wp_nav_menu(
                array(
                    'theme_location'=> 'footer-menu',
                    'menu_id'=> 'manin_menu',
                    'container'=> '',

            ));
            ?>
  </div>


  <?php $footermainmenu = ob_get_clean();

  return $footermainmenu;


  }

  add_shortcode('footermainmenu','progress_footer_mainmu_shortcode');


  ?>