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

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
	    <div class="main-content__wrapper">
	      <div class="main-content__wrapper container">
	        <?php get_template_part('template-parts/sidebar-catalog');?>
			<div class="products main-content">

					<?php if ( have_posts() ) : ?>

				<?php
					if ( function_exists('yoast_breadcrumb') ) {
					  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
				?>
						<header class="page-header">
							<h1 class="page-title single-product__title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Результаты для: %s', 'souvenir' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</header><!-- .page-header -->

						<div class="products-wrapper products">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							// get_template_part( 'template-parts/content', 'search' );
								get_template_part('template-parts/products', 'loop');

						endwhile;

						//the_posts_navigation();?>
						</div>
						<div class="pagination">
							<?php the_posts_pagination(array('prev_text' => '«', 'next_text' => '»'));?>
						</div>

					<?php else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</div>
		</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
