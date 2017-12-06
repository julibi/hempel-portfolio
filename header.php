<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title>
    <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description'): wp_title(); ?>
  </title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body>

<div class="opening-wrapper">
  <!-- Pressestimmen unter Metrofolklore ist eine eigenen Seite -->

  <div class="bio">Patricia Hempel</div>
  <div class="fb">Facebook</div>
  <!-- Blog ist eine eigene Seite -->
  <div class="blog"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'blog' ) ) );?>">Blog</a></div>
  <div class="portrait-foto">Porträtfoto</div>
  <div class="random-foto">Foto</div>
  <div class="rezensionen"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'rezensionen' ) ) );?>">Rezensionen</a></div>
  <div class="lesungen">Lesungen</div>
  <div class="metrofolklore">Metrofolklore</div>
  <div class="lektorate">Privatlektorate</div>
  <div class="stoebern">Stöbern</div>
  <!-- Zitategenerator sollte  -->
</div>