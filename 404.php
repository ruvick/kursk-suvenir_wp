<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package souvenir
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
	    <div class="main-content__wrapper">
	      <div class="main-content__wrapper container">
	        <?php get_template_part('template-parts/sidebar-catalog');?>

			<div class="products main-content">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
					  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
				?>
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title single-product__title"><?php esc_html_e( 'Страница не найдена', 'souvenir' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'К сожалению, такой страницы не существует.', 'souvenir' ); ?></p>
							<a href="<?php echo home_url('/');?>">Вернуться на главную</a>

							<?php
							// get_search_form();

							// the_widget( 'WP_Widget_Recent_Posts' );
							?>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
