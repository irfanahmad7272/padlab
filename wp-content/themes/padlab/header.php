<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico">
        <title>
          <?php wp_title( '|', true, 'right' ); ?>
          <?php bloginfo('name'); ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php include_once("assets/js/analyticstracking.php") ?>
        <?php get_template_part('template-parts/header/chat', 'window'); ?>
        <!-- <?php get_template_part('template-parts/post/under', 'construction'); ?> -->
        <header>
            <?php get_template_part('template-parts/navigation/navigation', 'main'); ?>
        </header>