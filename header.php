<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>@font-face {
        font-family: "Yekan Bakh";
        src: url("<?php bloginfo('template_url')?>/assets/fonts/Yekan-Bakh-Regular.ttf");
        }
    </style>
</head>

<body <?php body_class(); ?> >

    <header id="mainheader" class="site-header" role="banner">
        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
            <div class="container" id="navMenu">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="#">

                    <?php if(get_theme_mod('iclinic-logo-callout-image')) : { ?>
                        <img src="<?php echo (get_theme_mod('iclinic-logo-callout-image')); ?>" alt="iclinic-logo" height=20>
                    <?php } else : { ?>
                        <img src="<?php bloginfo('template_url')?>/assets/images/logo.png" alt="iclinic-logo" height=20>
                    <?php } endif ?>
                </a>

                <div class="flex-container" syle="justify-content: center;display: flex;">
                    <div class=flex-items>
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>
                    </div>
                </div>
                <div class="flex-container" syle="justify-content: start;display: flex;flex-direction: row;">
                    <div class="flex-item">
                        <a href="#" id="loginOutLink">حساب کاربری </a>
                        <span id="personIcon" class="material-symbols-outlined">person</span>
                    </div>

                </div>
            
            </div>
        </nav>
    </header>