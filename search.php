<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		search.php
	File source:    wp-content/themes/catorce/search.php
	Author: 		Diego Delbono
	Version: 		1.0
*/
 
?>

<?php
	$title 	= get_the_title();
	$keys = explode(" ",$s);
	$title 	= preg_replace('/('.implode('|', $keys) .')/iu',
		'<strong class="search-excerpt">\0</strong>',
		$title);
		
		
	function search_excerpt_highlight() {
		$excerpt = get_the_excerpt();
		$keys = implode('|', explode(' ', get_search_query()));
		$excerpt = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $excerpt);
		/*echo '<p>' . $excerpt . '</p>';*/
	}		
		
?>

<?php get_header(); ?>


<section>
	<div class="container">
		<div class="row">				
			<div class="col-md-8">

                <article class="article-content">				

                	<h1>Resultado de búsqueda: <strong><?php echo esc_html( get_search_query( false ) ); ?></strong></h1>

                	<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>	

						<h2><a href="<?php the_permalink(); ?>" title="Ver mas de <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<p><a href="<?php the_permalink(); ?>" title="Ver mas de <?php the_title(); ?>"><?php the_excerpt(); ?></a></p>					
					
					<?php endwhile;?>
						<?php else:	?>
							<h2>No hay resultados</h2>
					<?php endif; ?>
					
                </article>

			</div>
			<div class="col-md-4">
				<?php get_sidebar('sidebar') ?>				
			</div>				
		</div>
	</div>
</section>

<?php get_footer(); ?>