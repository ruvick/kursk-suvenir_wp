<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package souvenir
 */

get_header();
?>

<section id="cardProduct" class="cardProduct">
  <div class="container">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); 
			}
		?>
		<h1 class="single-section-title section-title"><span>Результаты поиска</span></h1>
		<div class="search-prodCard__row prodCard__row">
			<?php 
      	while(have_posts()):
        	the_post();
        	get_template_part('template-parts/products', 'elem');
  		?>
    	<?php endwhile;?>
		</div>
		<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi($loop); ?> 
	</div> 
</section>

<?php
get_footer();
