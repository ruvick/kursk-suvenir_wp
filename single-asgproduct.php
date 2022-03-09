<?php 

/*
* 
*/

get_header('page');
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
	    <div class="main-content__wrapper">
	      <div class="main-content__wrapper container">
	        <?php get_template_part('template-parts/sidebar-catalog');?>

	        <div class="main-content">
	        	
		    <?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
			?>
			<div class="single-product-wrapper">
			      <div class="single-product__gallery">
			        <div class="slider-for">
			        	<a href="<?php echo get_the_post_thumbnail_url()?>" data-lightbox="product-img" class="slider-for__item" style="background-image: url(<?php echo get_the_post_thumbnail_url()?>);"></a>
			        	<?php if(carbon_get_the_post_meta('as_gallery_img_1')):?>
					         <a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_1'), 'full')[0];?>" data-lightbox="product-img" class="slider-for__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_1'), 'full')[0];?>)"></a>
						<?php endif;?>
			        	<?php if(carbon_get_the_post_meta('as_gallery_img_2')):?>
					         <a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_2'), 'full')[0];?>" data-lightbox="product-img" class="slider-for__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_2'), 'full')[0];?>)"></a>
						<?php endif;?>
			        	<?php if(carbon_get_the_post_meta('as_gallery_img_3')):?>
					         <a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_3'), 'full')[0];?>" data-lightbox="product-img" class="slider-for__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_3'), 'full')[0];?>)"></a>
						<?php endif;?>
			        	<?php if(carbon_get_the_post_meta('as_gallery_img_4')):?>
					         <a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_4'), 'full')[0];?>" data-lightbox="product-img" class="slider-for__item" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('as_gallery_img_4'), 'full')[0];?>)"></a>
						<?php endif;?>
			        </div>
			      </div>
			      <div class="single-product__content">
			      	<div class="single-product__top-block">
			      		<div class="">
					        <h1 class="single-product__title"><?php echo the_title();?></h1>
				      		<div class="single-product__sku">Артикул: <span><?php echo carbon_get_the_post_meta('as_sku')?></span></div>
				      		<?php if($arr_mod = carbon_get_the_post_meta('product_modification')):?>
					      		<form action="" class="single-modification">
					      			<?php 
					      			$inc = 1;
					      			foreach($arr_mod as $mod):
					      				if($inc === 1):?>
					      					 <div class="radio">
											    <input id="radio-<?php echo $inc;?>" checked="" name="mod" type="radio" value="<?php echo $mod['mod'];?>">
											    <label  for="radio-<?php echo $inc;?>" class="radio-label"> <?php echo $mod['mod'];?></label>
											  </div>
									      		<div class="choice-mod"><?php echo $mod['mod'];?></div>
										<?php else:?>
					      					 <div class="radio">
											    <input id="radio-<?php echo $inc;?>" name="mod" type="radio" value="<?php echo $mod['mod'];?>">
											    <label  for="radio-<?php echo $inc;?>" class="radio-label"> <?php echo $mod['mod'];?></label>
											  </div>
										<?php endif;?>
					      			<?php $inc++; endforeach;?>
					      		</form>
					      	<?php endif;?>
			      		</div>
				        <div class="">
					        <span class="product-loop__price-reg">
					        	<?php if(carbon_get_the_post_meta('as_product_old_price')):?>
									<span class="old-price"><?php echo carbon_get_the_post_meta('as_product_old_price')?>  ₽</span>
								<?php endif;?>
								<span class="price-reg">
					        	<?php echo carbon_get_the_post_meta('as_product_price')?>  ₽</span>
				      		<a href="#" class="button add-to-cart toBascetInPage" data-postid="<?php the_ID();?>" data-groupid="<?php echo carbon_get_the_post_meta('offer_group_id');?>" data-offertype="<?php echo carbon_get_the_post_meta('offer_type');?>" data-offersku="<?php echo carbon_get_the_post_meta('as_sku');?>" data-offerid="<?php echo carbon_get_the_post_meta('as_sku');?>" data-src="<?php echo get_the_post_thumbnail_url()?>" data-weight="<?php echo carbon_get_the_post_meta('as_product_weight');?>" data-package="<?php echo carbon_get_the_post_meta('as_product_package');?>">В корзину</a>
				        </div>
			      	</div>
			        <div class="single-product__text">
			          <?php the_content();?>
			        </div>
			        <?php if(carbon_get_the_post_meta('as_short_derscr')):?>
			        <div class="single-product__descr">
			        	<h2 class="product-h2">Описание</h2>
			        	<?php echo carbon_get_the_post_meta('as_short_derscr')?>
			        </div>
				    <?php endif;?>
			        <?php if(carbon_get_the_post_meta('as_char')):?>
			        <div class="single-product__char">
			        	<h2 class="product-h2">Размеры</h2>
			        	<?php echo wpautop(carbon_get_the_post_meta('as_char'))?>
			        </div>
				    <?php endif;?>
			        <?php if(carbon_get_the_post_meta('as_complect')):?>
			        <div class="single-product__char">
			        	<h2 class="product-h2">Материалы</h2>
			        	<?php echo wpautop(carbon_get_the_post_meta('as_complect'))?>
			        </div>
				    <?php endif;?>
			      </div>
			    </div>
			    <div class="products upsells">
			    	<h2 class="section-title"><span>Похожие товары</span></h2>
    	            <?php 
		              $args = array(
		                'posts_per_page' => 4,
		                'post_type' => 'asgproduct',
		                'tax_query' => array(
		                  array(
		                    'taxonomy' => 'asgproductcat',
		                    'field' => 'id',
		                    'terms' => array(2)
		                  )
		                )
		              );
		              $query = new WP_Query($args);
		              if($query->have_posts()):
		            ?>
		            <div class="products-wrapper">
		              <?php while($query->have_posts()):
		                  $query->the_post();
		                  get_template_part('template-parts/products-loop');
		                endwhile;?>
		            </div>
		          <?php endif;?>
			    </div>
			</div>
			<!-- <div class="container">
			    <div class="single-product__tabs">
			      <div class="tabs">
			        <span class="tab">Характеристики товара</span>
			        <span class="tab">Комплектация товара</span>
			        <span class="tab">Видео о товаре</span>
			        <span class="tab">Сертификаты</span>
			      </div>
			      <div class="tab_content">
			        <div class="tab_item">
			          <div class="tab_item__title">Характеристики товара</div>
			          <div class="tab_item__content tab_item__content-ul">
			             <?php echo carbon_get_the_post_meta('as_char');?>
			          </div>
			        </div>
			        <div class="tab_item">
			          <div class="tab_item__title">Комплектация товара</div>
			          <div class="tab_item__content tab_item__content-ul">
			            
			             <?php echo carbon_get_the_post_meta('as_complect');?>
			          </div>
			        </div>
			        <div class="tab_item">
			          <div class="tab_item__title">Видео о товаре</div>
			          <div class="tab_item__content tab_item__content-ul">
			             <?php echo carbon_get_the_post_meta('as_video_prod');?>
			          </div>
			        </div>
			        <div class="tab_item">
			          <div class="tab_item__title">Сертификаты</div>
			          <div class="tab_item__content tab_item__content-ul">
			            <ul>
			              <li><span>Категория:</span><span>Домики</span></li>
			              <li><span>Рекомендуемый возраст:</span><span>1-4</span></li>
			              <li><span>Бренд:</span><span>Бренд</span></li>
			              <li><span>Материал:</span><span>Фанера березовая 4 мм</span></li>
			              <li><span>Размер упаковки:</span><span>30 х 30 х 40 см</span></li>
			              <li><span>Вес набора:</span><span>5 кг</span></li>
			            </ul>
			          </div>
			        </div>
			      </div>
			    </div>
			</div> -->
		  </div>
		</div>
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
get_footer();