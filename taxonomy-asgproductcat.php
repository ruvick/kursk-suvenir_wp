<?php
/**
 */

get_header('page');
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
	    <div class="main-content__wrapper">
		<div class="container catalog-page main-content__wrapper ">
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
						<select name="orderby" id="orderby" method="get" onchange = "this.form.submit()" >
							<option value="menu_order" <?php if (!empty($_REQUEST["orderby"]) ) echo "selected"; ?> disabled>Сортировать</option>
							<option value="price_asc" <?php if ($_REQUEST["orderby"] === "price_asc" ) echo "selected"; ?> >Цена по возрастанию</option>
							<option value="price_desc" <?php if ($_REQUEST["orderby"] === "price_desc" ) echo "selected"; ?> >Цена по убыванию</option>
							<option value="order_abs" <?php if ($_REQUEST["orderby"] === "order_abs" ) echo "selected"; ?> >По алфавиту</option>
						</select>
					</form>
				</header><!-- .page-header -->
					<div class="category-description">
						<?php echo category_description(); ?>
					</div>
				<div class="products-wrapper products">
					<?php 

					include("sortBlk.php");
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
	</main>
</div>

<?php
get_footer();