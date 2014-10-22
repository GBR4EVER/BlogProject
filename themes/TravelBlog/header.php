<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	  <meta name="viewport" content="width=device-width">
	  <title><?php wp_title( '|', true, 'right' ); ?></title>
	  <link rel="profile" href="http://gmpg.org/xfn/11">
	  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>
  
<body>

  <header id="header">
    <div class="row">
      <div class="small-3 medium-2 columns">
        <h3>
            <a href="/">FAR & WIDE TRAVELS</a>
        </h3>
      </div>
      <div class="small-9 medium-10 columns">
        <nav>
          <a href="/journal">Journal</a>
          <a href="/itinerary">Itinerary</a>
          <a href="/photos">Photos</a>
          <a href="/about">About Us</a>
          <a href="/contact">Contact</a>
        </nav>
      </div>
    </div>
  </header>