<?php
/**
 * Template Name: Отзывы
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		    <div class="main-content__wrapper">
		      <div class="main-content__wrapper container">
		        <?php get_template_part('template-parts/sidebar-catalog');?>
		        <div class="main-content">
				<div class="container">
					<?php
					if ( function_exists('yoast_breadcrumb') ) {
					  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
					?>
				</div>

		<?php
		while ( have_posts() ) :
			the_post();?>
			<?php if($arr_reviews = carbon_get_theme_option('reviews_complex_theme')):?> 
			<h1 class="page-title single-product__title"><?php the_title();?></h1>
		      <div class="reviews-wrapper">
		        <div class="reviews-slider">
		          <?php foreach($arr_reviews as $item):?>
		          <div class="reviews-item">
		            <div class="reviews-item__wrapper">

		              <div class="reviews-item__photo" style="background-image: url(<?php echo wp_get_attachment_image_src($item['img'], 'full')[0]?>)"></div>
		              <div class="reviews-item__content">
		                <div class="reviews-item__name"><?php echo $item['name'];?></div>
		                <div class="reviews-item__date"><?php echo $item['date'];?></div>
		                <div class="reviews-item__text"><?php echo $item['text'];?></div>
		              </div>
		            </div>
		          </div>
		        <?php endforeach;?>
		          </div>
		        </div>
			<?php endif; //get_template_part( 'template-parts/content', 'page' );?>


		<?php endwhile; // End of the loop.
		?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
