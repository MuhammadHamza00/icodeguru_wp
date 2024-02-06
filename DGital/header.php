<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <title><?php wp_title('DGital', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        // Get the menu item by its ID
        var menuItem = document.getElementById('menu-item-37');

        // Get the corresponding dropdown ul
        var dropdown = menuItem.querySelector('ul');

        // Add event listeners for hover
        menuItem.addEventListener('mouseenter', function() {
            // Show the dropdown when hovering in
            dropdown.style.display = 'block';
        });

        menuItem.addEventListener('mouseleave', function() {
            // Hide the dropdown when hovering out
            dropdown.style.display = 'none';
        });

        // Get the first element with the class 'navbar-toggler'
        var navbarTogglerBtn = document.querySelector('.navbar-toggler');
        var navbarCollapse = document.getElementById('navbarTogglerDemo02');

        // Add event listener for click
        navbarTogglerBtn.addEventListener('click', function() {
            navbarCollapse.classList.toggle('show');
        });



    });
</script>

<body <?php body_class(); ?>>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <div class="container-fluid">

                    <a href="" class="navbar-brand p-0">
                        <h1 class="m-0"><?php bloginfo('name');?></h1>
                        <!-- <p class="m-0"style="color:white;font-size:12px;"><i><b><?php bloginfo('description') ?></b></i></p> -->
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                        <div class="navbar-nav mx-auto py-0">

                            <?php
                            $args = array(
                                'theme_location' => 'primary',
                                'menu_class'     => 'nav-item nav-link navbar-light navbar-nav py-0',
                                'container'      => false, // Remove the container element
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'walker'         => new Custom_Bootstrap_Walker_Nav_Menu(), // Use Bootstrap Walker for dropdowns
                            );
                            ?>
                            <?php wp_nav_menu($args) ?>
                        </div>
                        <a href="<?php echo get_theme_mod('nav_btn_link') ?>" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block"><?php echo get_theme_mod('nav_btn_text') ?></a>
                    </div>
                </div>

            </nav>
        </div>