<?php 

/*
* 
*/

get_header('page'); ?>

<main id="main" class="site-main">

<section id="section-title-sec" class="section-title-sec">
  <div class="container">
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
	?>
		<h2 class="single-section-title section-title"><span><?php single_cat_title( '', true );?></span></h2>
  </div> 
</section>

<section id="catalog-sec" class="catalog-sec">
  <div class="container">

	<div class="catalog-sec__wrap">
		<?php get_template_part('template-parts/sidebar-catalog');?>
    <div class="catalog-sec__product">
			<?php get_template_part('template-parts/sorting-block');?>
    	<div class="catalog-sec__row">
        <?php 
          while(have_posts()):
            the_post();
            get_template_part('template-parts/products', 'elem');
        ?>
        <?php endwhile;?>
      </div>

    </div>

		</div>
		<div class="pagination">
			<?php the_posts_pagination(array('prev_text' => '«', 'next_text' => '»'));?>
		</div>
  </div> 
</section>

</main>


<?php get_template_part('template-parts/applic-section'); ?>
		
<?php get_footer();