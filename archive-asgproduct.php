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
		<h2 class="single-section-title section-title"><span>Каталог товаров</span></h2> 
  </div> 
</section>

<section id="catalog-sec" class="catalog-sec">
  <div class="container">

	<div class="catalog-sec__wrap">
		<?php get_template_part('template-parts/sidebar-catalog');?>
    <div class="catalog-sec__product">

				<div class="catalog-sec__sorting">
          <div class="catalog-sec__sorting-name">Сортировать по:</div>
          <form action="#" class="catalog-sec__sorting-select-form form">
    				<div class="catalog-sec__options options">
      				<label class="catalog-sec__options-item options__item">
        				<input class="catalog-sec__options-input options__input" checked="" type="radio" value="1" name="form[option]">
        				<span class="catalog-sec__options-text options__text"><span>Популярности </span></span> 
      				</label>
      				<label class="catalog-sec__options-item options__item">
        				<input class="catalog-sec__options-input options__input" type="radio" value="2" name="form[option]">
        				<span class="catalog-sec__options-text options__text"><span>Цене</span></span>
      				</label>
      				<label class="catalog-sec__options-item options__item">
        				<input class="catalog-sec__options-input options__input" type="radio" value="3" name="form[option]">
        				<span class="catalog-sec__options-text options__text"><span>Скидке</span></span>
      				</label>
      				<label class="catalog-sec__options-item options__item">
        				<input class="catalog-sec__options-input options__input" type="radio" value="3" name="form[option]">
        				<span class="catalog-sec__options-text options__text"><span>Обновлению</span></span>
      				</label>
    				</div>
          </form>
        </div>

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