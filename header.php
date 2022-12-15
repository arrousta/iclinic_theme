<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mobile.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blog.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/contactus.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/footer.css">

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

                <div class="flex-container" id="nav_menu_container">
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

                <div class="flex-container" id="account_link">
                    <div class="flex-item">
                        <a href="#">
                            <svg id="bag_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-handbag" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2zm3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6h4z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="flex-item">
                        <a href="#" id="loginOutLink">حساب کاربری  </a>
                    </div>

                    <div class="flex-item">
                        <svg id="person_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </nav>
    </header>