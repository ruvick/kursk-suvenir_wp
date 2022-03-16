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
						<img src="<?php echo get_template_directory_uri();?>/img/cardProductSl.jpg" alt="">								
					</div>

					<div class="cardProduct__slide slider__slide">
						<img src="<?php echo get_template_directory_uri();?>/img/cardProductSl.jpg" alt="">								
					</div>

					<div class="cardProduct__slide slider__slide">
						<img src="<?php echo get_template_directory_uri();?>/img/cardProductSl.jpg" alt="">								
					</div>

				</div>
				<!-- Кнопки-точки -->
				<div class="product-sl-paggination swiper-paggination"></div>
			</div>

			<div class="cardProduct__descp">

				<div class="cardProduct__descp-flex">
					<div class="cardProduct__descp-price"><?php echo carbon_get_the_post_meta('as_product_price')?> ₽</div>
					<div class="cardProduct__descp-vendore">Артикул: <?php echo carbon_get_the_post_meta('as_sku')?></div>
					<button class="cardProduct__descp-btn btn_red">В корзину</button>
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
				<!-- <div class="form_radio">
						<input id="radio-1" type="radio" name="radio" value="1" checked>
						<label for="radio-1" style="background: #D0D2D3;"></label>
					</div>
					<div class="form_radio">
						<inpu	t id="radio-2" type="radio" name="radio" value="2">
						<label for="radio-2" style="background: #EC1C24;"></label>
					</div>
					<div class="form_radio">
						<input id="radio-3" type="radio" name="radio" value="3">
						<label for="radio-3" style="background: #D9A52A;"></label>
					</div>
					<div class="form_radio">
						<input id="radio-4" type="radio" name="radio" value="4">
						<label for="radio-4" style="background: #39B44A;"></label>
					</div>
					<div class="form_radio">
						<input id="radio-5" type="radio" name="radio" value="5">
						<label for="radio-5" style="background: #00ADEE;"></label>
					</div>
					<div class="form_radio">
						<input id="radio-6" type="radio" name="radio" value="6">
						<label for="radio-6" style="background: #000000;"></label>
					</div> -->
				</div>
				<?
					}
				?>
				<h4 class="cardProduct__descp-title">Описание</h4> 
				<div class="cardProduct__descp-title-text">
					Кружка. Размер изделия  160x140x140мм. Изготовлена в полном соответствии с  традиционной хохломской технологией золочения.  
					Выточена из цельного дерева вручную. Имеет авторскую роспись в технике фонового письма. Роспись «Двойной фон».  
					Возможно разместить заказ на изготовление изделия с другими  видами росписи «Ягоды»,  «Торжество»,  «Ландыши». 
					Срок изготовления персонального заказа 21-45 дней.  Лаковое покрытие и многократный высокотемпературный обжиг делает изделие 
					влагозащищенным и износоустойчивым. Все применяемые при производстве материалы натуральны и экологичны. Кружка предназначена 
					для холодных и горячих напитков, а также может служить элементом декора помещения. На каждом изделии имеется подпись автора росписи. 
					Упаковка из брендированного картона.
					<?php echo carbon_get_the_post_meta('as_short_derscr')?>
				</div>

				<h4 class="cardProduct__descp-title">Размеры:</h4>
					<?php echo wpautop(carbon_get_the_post_meta('as_char'))?>
				<!-- <ul class="cardProduct__descp-title-list">
					<li>Длина: 140 мм</li>
					<li>Ширина: 140 мм</li>
					<li>Высота: 160 мм</li>
				</ul> -->

				<h4 class="cardProduct__descp-title">Материалы:</h4>
				<div class="cardProduct__descp-title-text">
				Массив древесины (липа), грунт, олифа, алюминиевый порошок, эмаль, натуральные 
				пигменты-красители, лак пригодный для контакта с пищевыми продуктами.
				</div>

			</div>

		</div>

	</div> 
</section>

<section id="similar" class="similar">
  <div class="container">
		<h2 class="single-section-title section-title"><span>Похожие товары</span></h2>

		<div class="prodCard__row">

		<div class="prodCard__column">
			<div class="prodCard__box">
				<div class="prodCard__box-img">
					<img src="<?php echo get_template_directory_uri();?>/img/product/01.jpg" alt="">
				</div>
				<div class="prodCard__box-descp">
					<h3 class="prodCard__box-descp-title">
						Набор "Хозяюшка" <br>
						(7 предметов)
					</h3>
					<div class="prodCard__box-descp-flex">
						<div class="prodCard__box-descp-flex-price">1300 Р</div>
						<button class="prodCard__box-descp-flex-link btn_red">В корзину</button>
					</div>
				</div>
			</div>
		</div>

		<div class="prodCard__column">
			<div class="prodCard__box">
				<div class="prodCard__box-img">
					<img src="<?php echo get_template_directory_uri();?>/img/product/02.jpg" alt="">
				</div>
				<div class="prodCard__box-descp">
					<h3 class="prodCard__box-descp-title">
						Матрешка традиционная
						6-и кукольная
					</h3>
					<div class="prodCard__box-descp-flex">
						<div class="prodCard__box-descp-flex-price">1300 Р</div>
						<button class="prodCard__box-descp-flex-link btn_red">В корзину</button>
					</div>
				</div>
			</div>
		</div>

		<div class="prodCard__column">
			<div class="prodCard__box">
				<div class="prodCard__box-img">
					<img src="<?php echo get_template_directory_uri();?>/img/product/01.jpg" alt="">
				</div>
				<div class="prodCard__box-descp">
					<h3 class="prodCard__box-descp-title">
						Набор "Хозяюшка" <br>
						(7 предметов)
					</h3>
					<div class="prodCard__box-descp-flex">
						<div class="prodCard__box-descp-flex-price">1300 Р</div>
						<button class="prodCard__box-descp-flex-link btn_red">В корзину</button>
					</div>
				</div>
			</div>
		</div>

		<div class="prodCard__column">
			<div class="prodCard__box">
				<div class="prodCard__box-img">
					<img src="<?php echo get_template_directory_uri();?>/img/product/03.jpg" alt="">
				</div>
				<div class="prodCard__box-descp">
					<h3 class="prodCard__box-descp-title">
						Матрешка традиционная
						6-и кукольная
					</h3>
					<div class="prodCard__box-descp-flex">
						<div class="prodCard__box-descp-flex-price">1300 Р</div>
						<button class="prodCard__box-descp-flex-link btn_red">В корзину</button>
					</div>
				</div>
			</div>
		</div>

		<div class="prodCard__column">
			<div class="prodCard__box">
				<div class="prodCard__box-img">
					<img src="<?php echo get_template_directory_uri();?>/img/product/04.jpg" alt="">
				</div>
				<div class="prodCard__box-descp">
					<h3 class="prodCard__box-descp-title">
						Набор "Хозяюшка" <br>
						(7 предметов)
					</h3>
					<div class="prodCard__box-descp-flex">
						<div class="prodCard__box-descp-flex-price">1300 Р</div>
						<button class="prodCard__box-descp-flex-link btn_red">В корзину</button>
					</div>
				</div>
			</div>
		</div>

		</div>

	</div> 
</section>



<?php get_template_part('template-parts/applic-section'); ?>
		
<?php get_footer();