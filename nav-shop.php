<nav class="nav-shop">

    <?php
        if (has_nav_menu('shop-menu', 'catorce')) {
            wp_nav_menu(array(
                'container'       => 'section',
                'fallback_cb'     =>  false,
                'theme_location'  => 'shop-menu')
            );
        };
    ?>

</nav>
