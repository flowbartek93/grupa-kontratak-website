<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupa Kontratak - Szkoła Ruchu i Walki Wręcz</title>
    <?php wp_head(); ?>


</head>

<body <?php body_class();?>>


    <header class="header">


        <div class="header__center">

            <div class="header__mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
            <img class="header__image header--small" src="<?php  echo get_theme_file_uri('./images/headermain.jpg');?>"
                alt="header">
            <div class="header__logo">
                <img class="header__logo-img" src="<?php echo get_theme_file_uri('./images/logonapis5.png');?>"
                    alt="logo">
            </div>


        </div>

    </header>

    <nav class="nav">

        <!-- Napisz nowe style dla menu -->
        <ul class="list__item">
            <li class="list__item-single <?php if (is_page('home')) echo 'active'?> "><a class="link"
                    href="<?php echo site_url('home') ?>">Home</a></li>
            <li class="list__item-single <?php if (is_page('aktualnosci')) echo 'active'?>"><a class="link"
                    href="<?php echo site_url('aktualnosci') ?>">Aktualności</a>
            </li>
            <li class="list__item-single <?php if (is_page('galeria')) echo 'active'?>">
                <a class="link" href=<?php echo site_url('galeria') ?>>Galeria</a>
            </li>
            <li class="list__item-single collapse-menu">
                <a class="link">Treningi</a>

            </li>
            <ul class="list__collapse">

                <li class="list__collapse-item"><a class="link"
                        href="<?php echo site_url('treningi/metodyka'); ?>">Nasza
                        metodyka</a></li>
                <li class="list__collapse-item"><a class="link"
                        href="<?php echo site_url('treningi/trenerzy'); ?>">Skład
                        trenerski</a></li>
                <li class="list__collapse-item"><a class="link"
                        href="<?php echo site_url('treningi/lokalizacja'); ?>">Lokalizacja</a>
                </li>



            </ul>
            <li class="list__item-single <?php if (is_page('blog')) echo 'active'?>"><a class="link"
                    href="<?php echo get_post_type_archive_link('blog') ?>">Blog</a></li>






        </ul>




    </nav>

    <div class="slider">

    </div>