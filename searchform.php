<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		searchForm.php
	File source:    wp-content/themes/catorce/searchForm.php
	Author: 		Diego Delbono
	Version: 		1.0
*/
 
?>
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">

	<div class="search">
        <div class="search-input">
            <input type="text" class="form-input" placeholder="Buscar" value="<?php the_search_query(); ?>" name="s" id="s">
        </div>
        <div class="search-button">
            <button class="btn btn-blue btn-round" type="submit" id="searchsubmit">
                <span class="ico-search ico ico-white">Buscar</span>
            </button>
        </div>
    </div>

</form>