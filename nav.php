<nav class="nav js-nav">
    <div class="nav__wrapper">

        <?php
            if (has_nav_menu('header-menu', 'catorce')) {
                wp_nav_menu(array(
                    'container'       => 'section',
                    'fallback_cb'     =>  false,
                    'theme_location'  => 'header-menu')
                );
            };
        ?>
        
    </div>
</nav>
