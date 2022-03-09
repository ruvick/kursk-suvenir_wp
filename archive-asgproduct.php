<?php
/**
 */
$current_cat_ID = get_query_var('cat');
$active = '';
get_header('page');
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
				<header class="page-header">
					<?php the_archive_title( '<h1 class="page-title single-product__title">', '</h1>' );?>
					<form class="prodcuts-sort ">
						<select name="orderby" id="orderby" method="get">
							<option value="menu_order" selected="selected">Сортировать</option>
							<option value="price">Цена по возрастанию</option>
							<option value="price_desc">Цена по убыванию</option>
							<option value="order_abs">По алфавиту</option>
						</select>
					</form>
				</header><!-- .page-header -->
				<div class="products-wrapper products">
					<?php 

					//include("sortBlk.php");
					while(have_posts()):
						the_post();
						get_template_part('template-parts/products', 'loop');
						?>
					<?php endwhile;?>
					</div>
				<div class="pagination">
					<?php the_posts_pagination(array('prev_text' => '«', 'next_text' => '»'));?>
				</div>
			</div>
			</div>
		</div>
	</div>
	</main>
</div>

<?php
get_footer();