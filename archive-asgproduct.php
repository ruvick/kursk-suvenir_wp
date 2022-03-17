<?php 

/*
* 
*/

get_header('page'); ?>

<main id="main" class="site-main">

<div style = "display:none" id = "tovarCategoryId" data-id = "<? echo get_queried_object()->term_id; ?>"></div>

<section id="cardProduct" class="cardProduct">
  <div class="container">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); 
			}
		?>
		<h2 class="single-section-title section-title"><span>Каталог товаров</span></h2> 
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
</main>

<?php get_template_part('template-parts/applic-section'); ?>
		
<?php get_footer();