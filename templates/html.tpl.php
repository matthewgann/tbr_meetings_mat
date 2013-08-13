<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta http-equiv="CACHE-CONTROL" CONTENT="NO-CACHE">
  <title><?php print $head_title; ?></title>
  <link rel="apple-touch-icon-precomposed" href="<?php print base_path( )?><?php print path_to_theme() ?>/images/icons/apple-touch-icon-144x144-precomposed.png" sizes="144x144" ><!-- iPad with Retina display -->
  <link rel="apple-touch-icon-precomposed" href="<?php print base_path( )?><?php print path_to_theme() ?>/images/icons/apple-touch-icon-114x114-precomposed.png" sizes="114x114"><!-- iPhone with Retina display -->
  <link rel="apple-touch-icon-precomposed" href="<?php print base_path( )?><?php print path_to_theme() ?>/images/icons/apple-touch-icon-72x72-precomposed.png" sizes="72x72"><!-- Non-Retina iPad -->
  <link rel="apple-touch-icon-precomposed" href="<?php print base_path( )?><?php print path_to_theme() ?>/images/icons/apple-touch-icon-precomposed.png"><!-- Non-Retina iPhone, iPod Touch, and Android 2.1+ devices -->
  <link rel="apple-touch-startup-image" href="<?php print base_path( )?><?php print path_to_theme() ?>/images/icons/Default-Landscape~ipad.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio: 1)" />
  <link rel="apple-touch-startup-image" href="<?php print base_path( )?><?php print path_to_theme() ?>/images/icons/Default-Landscape@2x~ipad.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio: 2)" />		
  <link rel="apple-touch-startup-image" href="<?php print base_path( )?><?php print path_to_theme() ?>/images/icons/Default-Portrait~ipad.png" media="(min-device-width: 768px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1)"  />
  <link rel="apple-touch-startup-image" href="<?php print base_path( )?><?php print path_to_theme() ?>/images/icons/Default-Portrait@2x~ipad.png" media="(min-device-width: 768px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 2)"  />
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body class="<?php print $classes; ?> <?php print $body_bg_type; ?> <?php print $body_bg_classes; ?> <?php print $front_heading_classes; ?> <?php print $breadcrumb_classes; ?> <?php print $border_classes; ?> <?php print $corner_classes; ?>" <?php print $attributes;?> <?php if ($body_bg_classes): ?>style="background: url('<?php print file_create_url(theme_get_setting('body_bg_path')); ?>') repeat top left;" <?php endif; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>

</html>