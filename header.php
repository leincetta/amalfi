<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="google-site-verification" content="fdR0a1FtG3g3A3uSX03Hhg19XtCpMHLdpGqqu7OXYW4" />
        <title><?php wp_title(''); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/images/favicons/manifest.json">
        <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon.ico">
        <meta name="apple-mobile-web-app-title" content="Leandro Incetta">
        <meta name="application-name" content="Leandro Incetta">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/images/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="<?php bloginfo('template_directory'); ?>/images/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <!-- Output any code that need to come before closing the head tag -->
        <?php wp_head(); ?>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header id="header">

            <div class="header-container">
                <a class="logo" href="<?php bloginfo('url'); ?>">
                    <img alt="<?php bloginfo('name'); ?>" src="<?php bloginfo('template_directory'); ?>/images/leandro-incetta-logo.svg" />
                </a>

                <!-- Display Menu -->
                <?php wp_nav_menu(); ?>
            </div>

        </header>

        <div class="container">
