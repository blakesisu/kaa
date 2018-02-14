<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <meta name="robots" content="index, follow">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta http-equiv="content-language" content="en">

  <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/styles.css?v=1.0.6'; ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.0-beta1/picturefill.min.js"></script>

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-107069118-1', 'auto');
    ga('send', 'pageview');
  </script>
  <!-- End Google Analytics -->

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php include("template-parts/common/site-header.php"); ?>
