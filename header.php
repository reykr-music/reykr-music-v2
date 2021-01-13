<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Reykr is an electronic music producer and DJ from British Columbia, Canada. His songs combine influences from electronic, hip-hop, and psychedelic music into introspective pieces with shimmering melodies, punchy drums, and deep-driving bass."/>
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Import Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <!-- Import styles for Animate On Scroll -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Import stylesheet -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header id="header">
  <div class="wrapper">
    <div class="topBar">

      <!-- Logos -->
        <div class="logoContainer">
          <div class="triadContainer">
            <?php
              $logo_1 = get_field('logo_1');
              if( $logo_1 ) { ?>
                <img tabindex="0" src="<?php echo $logo_1['url']; ?>" alt="<?php echo $logo_1['alt']; ?>" />
            <?php } ?>
          </div>
          <div class="reykrContainer">
            <?php
              $logo_2 = get_field('logo_2');
              if( $logo_2 ) { ?>
                <img tabindex="0" src="<?php echo $logo_2['url']; ?>" alt="<?php echo $logo_2['alt']; ?>" />
            <?php } ?>
          </div>
        </div>

        <!-- Social media links -->
        <div class="social">
          <?php wp_nav_menu( array(
          'theme_location' => 'social',
          'container_class' => 'menu'
          )); ?>
        </div>

      </div>
    </div>

    <!-- Desktop Navigation -->
      <nav class="mainNav">
        <?php wp_nav_menu( array(
          'theme_location' => 'primary',
          'container_class' => 'menu'
        )); ?>
      </nav>

    <!-- Mobile navigation -->
    <div class="mobile-nav">
      <!-- Mobile menu -->
      <div class="hamburger" id="hamburger">
        <button id="navIcon">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="mobileNav" id="mobileNav">
          <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'container_class' => 'headerMenu'
          )); ?>
        </div>
    </div>

      <div class="instagramFeed">
        <?php the_content(); ?>
      </div>
      
  </div>
</header>

<main id="maincontent">
