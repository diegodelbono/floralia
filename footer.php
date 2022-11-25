<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		footer.php
	File source:    wp-content/themes/catorce/footer.php
	Author: 		Diego Delbono
	Version: 		1.0
*/
 
?>

    <footer class="footer container">
        <div class="footer__container">
            <div class="footer__item">
                <p>© 2022. Floralia</p>
            </div>
            <div class="footer__item">                
                <a href="https://www.instagram.com/floralia_world/" title="Instagram Floralia" target="_blank">Instagram</a>
            </div>
        </div>
    </footer>

	<?php wp_footer(); ?>


    <script src="<?php echo get_stylesheet_directory_uri(); ?>/plugins/owl/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/metodos.js" type="text/javascript"></script>

</body>
</html>
