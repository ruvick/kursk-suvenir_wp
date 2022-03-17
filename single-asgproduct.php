<?php 

/*
* 
*/

get_header('page'); ?>

<section id="cardProduct" class="cardProduct">
  <div class="container">

	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
	?>

		<h1 class="single-section-title section-title"><span><?php echo the_title();?></span></h1>

		<div class="cardProduct__row">

			<div class="cardProduct__slider">
				<div class="cardProductSl _swiper d-flex">

					<div class="cardProduct__slide slider__slide">
						<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), "full" );?>" alt="">								
					</div>

					<? 
						$foto1 = wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(), 'as_gallery_img_1'), 'full')[0];
						
						if (!empty($foto1)) {
					?>
						<div class="cardProduct__slide slider__slide">
							<img src="<?php echo $foto1;?>" alt="">								
						</div>
					<?
						}
					?>

					<? 
						$foto1 = wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(), 'as_gallery_img_2'), 'full')[0];
						
						if (!empty($foto1)) {
					?>
						<div class="cardProduct__slide slider__slide">
							<img src="<?php echo $foto1;?>" alt="">								
						</div>
					<?
						}
					?>

					<? 
						$foto1 = wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(), 'as_gallery_img_3'), 'full')[0];
						
						if (!empty($foto1)) {
					?>
						<div class="cardProduct__slide slider__slide">
							<img src="<?php echo $foto1;?>" alt="">								
						</div>
					<?
						}
					?>

					<? 
						$foto1 = wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(), 'as_gallery_img_4'), 'full')[0];
						
						if (!empty($foto1)) {
					?>
						<div class="cardProduct__slide slider__slide">
							<img src="<?php echo $foto1;?>" alt="">								
						</div>
					<?
						}
					?>

				

				</div>
				<!-- Кнопки-точки -->
				<div class="product-sl-paggination swiper-paggination"></div>
			</div>

			<div class="cardProduct__descp">

				<div class="cardProduct__descp-flex">
					<div class="cardProduct__descp-price"><span class = "price-reg"><?php echo carbon_get_the_post_meta('as_product_price')?></span> ₽</div>
					<div class="cardProduct__descp-vendore">Артикул: <?php echo carbon_get_the_post_meta('as_sku')?></div>
					<button class="cardProduct__descp-btn btn_red toBascetInPage"
					data-postid="<?php echo get_the_ID();?>"
					data-offertype="<?php echo carbon_get_post_meta(get_the_ID(),'offer_type');?>" 
        			data-offersku="<?php echo carbon_get_post_meta(get_the_ID(),'as_sku');?>" 
					data-offerid="<?php echo carbon_get_post_meta(get_the_ID(),'as_sku');?>" 
					data-groupid="<?php echo carbon_get_post_meta(get_the_ID(),'offer_group_id');?>"
					>В корзину</button>
				</div>

				<p class="cardProduct__descp-info">Представленный вид росписи</p>
				<p class="cardProduct__descp-info-text">Двойной фон</p>

				<?
					$elem = carbon_get_the_post_meta('tov_over_color');
					if($elem) {
				?>	

				<h4 class="cardProduct__descp-title">Цвет</h4>
				<div class="cardProduct__descp-color">
					<?	
						$elemIndex = 0;
						foreach($elem as $item) {
					?>	
						<a href = "<? echo $item['tov_o_lnk']?>" class="over_color_select cardProduct__descp-color-link Btn-color-link Btn-color-link_black" style="background: <? echo $item['tov_o_color']?>"></a>
					<?
							$elemIndex++; 
						}
					?> 

				</div>
				<?
					}
				?>
				<h4 class="cardProduct__descp-title">Описание</h4> 
				<div class="cardProduct__descp-title-text">
					<?php echo carbon_get_the_post_meta('as_short_derscr')?>
				</div>

				<h4 class="cardProduct__descp-title">Размеры:</h4>
					<?php echo wpautop(carbon_get_the_post_meta('as_char'))?>


				<h4 class="cardProduct__descp-title">Материалы:</h4>
				<div class="cardProduct__descp-title-text">
					<?php echo wpautop(carbon_get_the_post_meta('as_complect'))?>
				</div>

			</div>

		</div>

	</div> 
</section>

<section id="similar" class="similar">
  <div class="container">
		<h2 class="single-section-title section-title"><span>Похожие товары</span></h2>

		<div class="prodCard__row">
		<?
			$my_posts = get_posts( array(
				'numberposts' => 5,
				'orderby'     => 'rand',
				'post_type'   => 'asgproduct',
				
			) );

			foreach ($my_posts as $element) {
				$param = ["element" => $element];
				get_template_part('template-parts/products', 'elem-param', $param); 
			}
		?>

		</div>

	</div> 
</section>



<?php get_template_part('template-parts/applic-section'); ?>
		
<?php get_footer();