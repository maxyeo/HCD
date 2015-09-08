<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        
        <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
        <meta name="description" content="Hopkins Creative Design employs the best graphic designers on campus to design Hopkins related shirts and merchandise. Additionally, HCD designs seasonal apparel during the holiday season. HCD also serves campus groups and charities designing shirts for fundraising events.">
        <meta name="author" content="Noah Presler and Max Yeo">

        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">
        <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">

        <meta property="og:title" content="Hopkins Creative Design"/>
        <meta property="og:url" content="http://hcd.jhu.edu/"/>
        <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/slide2.jpg"/>
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
        <meta property="og:description" content="Hopkins Creative Design employs the best graphic designers on campus to design Hopkins related shirts and merchandise. Additionally, HCD designs seasonal apparel during the holiday season. HCD also serves campus groups and charities designing shirts for fundraising events."/>
        <?php wp_head(); ?>
    </head>
    
    <body>