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
	  <link href='http://fonts.googleapis.com/css?family=Economica:700,400|Architects+Daughter|Cuprum:400,700|Permanent+Marker|Handlee' rel='stylesheet' type='text/css'>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	  <meta name="viewport" content="width=device-width">
	  <title><?php wp_title( '|', true, 'right' ); ?></title>
	  <link rel="profile" href="http://gmpg.org/xfn/11">
	  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" id="TravelBlog-style-css" href="http://localhost:8888/BlogProject/wp-content/themes/TravelBlog/style.css" type="text/css" media="all">
	<?php wp_head(); ?>
</head>

<body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title area">
        <li class="name"><h1><a href="index.html">Far & Wide</a></h1></li>
      </ul>
      
      <section class="top-bar-section">
        <ul class="right">
          <li><a href="#">About</a></li>
          <li><a href="#">Posts</a></li>
          <li><a href="#">Pictures</a></li>
        </ul>
    
      </section>
    
    </nav>
