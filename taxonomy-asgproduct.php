<?php
/**
 */

get_header('page');
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
			?>
		</div>
		<div class="container catalog-page">
			<?php get_sidebar('cat');?>
			<div class="products">
				<header class="page-header">
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
					<?php

					if ($_GET['select'] == 'menu_order') { $order = "&orderby=date&order=DESC"; $s1 = ' selected="selected"'; }
					if ($_GET['select'] == 'price') { $order = "&orderby=date&order=ASC"; $s2 = ' selected="selected"'; }
					if ($_GET['select'] == 'price_desc') { $order = "&orderby=title&order=ASC"; $s3 = ' selected="selected"'; }
					if ($_GET['select'] == 'order_abs') { $order = "&orderby=modified"; $s4 = ' selected="selected"'; }
					?>
					<form class="prodcuts-sort ">
						<select name="orderby" id="orderby" method="get">
							<option value="menu_order" selected="selected">Сортировать</option>
							<option value="price">Цена по возрастанию</option>
							<option value="price_desc">Цена по убыванию</option>
							<option value="order_abs">По алфавиту</option>
						</select>
					</form>
				</header><!-- .page-header -->
				<div class="products-wrapper">
					<div class="container">

					<?php

					include("sortBlk.php");
					 while(have_posts()):
						the_post();
						get_template_part('template-parts/product', 'loop');
						?>
					<?php endwhile;?>
					</div>
				</div>
				<div class="pagination">
					<?php the_posts_pagination(array('prev_text' => '«', 'next_text' => '»'));?>
				</div>
			</div>
		</div>
	</main>
</div>

<?php
get_footer();