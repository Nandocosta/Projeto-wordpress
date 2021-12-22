<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!---- Scripts------>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <?php wp_head();?>
</head>
<body>
    <header>
        <div class="navbar navbar-expand-lg" >
            <nav >
                <div class="logo d-inline-flex" >
                    <a class="navbar-brand" href="index.php" haref="<?php echo site_url();?>" title="<?php bloginfo('name');?>">BeautySalon</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                <div>
                <div id="menu-principal" class="collapse navbar-collapse" class="">
                    <?php
                        require_once ('assets/includes/class-wp-bootstrap-navwalker.php');
                    ?>

                    <?php 
                        wp_nav_menu( array(
                            'menu'            => 'Menu',
                            'theme_location'  => 'menu-header',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse navbar-collapse',
                            'container_id'    => 'navbarNav',
                            'menu_class'      => 'navbar-nav navbar-rigth',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_bootstrap_Navwalker(),
                        ));
                    ?>
                </div>
            </nav>
        </div>
    </header>
    
    
