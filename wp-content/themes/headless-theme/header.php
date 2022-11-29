
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Theme Template</title>
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_theme_file_uri('/assets/images/icons/isobar-favicon.ico')?>">
       
    <?php wp_head(); ?> 
  </head>

  <body <?php body_class(); ?>> <!-- show different classes dependent on witch page I am -->

  <main class="container-fluid">    
  
  <div id="toggle" class="button_container">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
  </div>

  <div id="overlay" class="overlay">
    <nav class="overlay-menu">
      <div class="overlay-menu_logo">
        <img src="<?php echo get_theme_file_uri('/assets/images/isobar-logo.png')?>" alt="isobar logo">
      </div>
      <?php 
        wp_nav_menu( array(
          'primary' => 'Huvudmeny' 
        ));      
      ?>
    </nav>
  </div>

  <!-- Desktop Navigation-->

  <nav class="desktop-nav">
      <div class="desktop-nav_logo">
        <img src="<?php echo get_theme_file_uri('/assets/images/isobar-logo.png')?>" alt="isobar logo">
      </div>
      <div class="desktop-nav_headmenu">
        <?php 
          wp_nav_menu( array(
            'primary' => 'Huvudmeny' 
          ));      
        ?>
      </div>

      <div class="site-header__util">
              <?php if(is_user_logged_in()):?>
                <a href="<?php echo wp_logout_url();?>" class="btn btn--small float-left btn--with-photo">
                <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60)?></span>
                <span class="btn btn--small  btn--orange btn__text">Log Out</span>
                </a>
              <?php else:?>
                <a href="<?php echo wp_login_url();?>" class="btn btn--small btn--orange float-left push-right">Login</a>
                <a href="<?php echo wp_registration_url();?>" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
              <?php endif;?>            
            <a href="<?php echo esc_url(site_url('/search'));?>" class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
          </div>
      
    </nav>


  <div class="header-content" >
    <div class="header-text-container">
      <h1> Välkommen till Isobar Theme Template.</h1>
      <p class="fontawesome-link"> Läs mer på GitLab README file 
        <a href=""><i class="fab fa-gitlab"></i></a>
      </p>
      <p> Den site stöds Bootstrap</p>
    </div>
   
  </div>
    
  
  
  