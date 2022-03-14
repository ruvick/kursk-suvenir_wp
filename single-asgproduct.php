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

		<h2 class="single-section-title section-title"><span>Кружка 160 х 140</span></h2>

		<div class="cardProduct__row">

			<div class="cardProduct__slider">
				<div class="cardProductSl _swiper d-flex">

					<div class="cardProduct__slide slider__slide">
						<img src="<?php echo get_template_directory_uri();?>/img/cardProductSl.jpg" alt="">								
					</div>

				</div>
				<!-- Кнопки-точки -->
				<div class="cardProduct-sl-paggination swiper-paggination"></div>
			</div>

			<div class="cardProduct__descp">

				<div class="cardProduct__descp-flex">
					<div class="cardProduct__descp-price">2 470 Р</div>
					<div class="cardProduct__descp-vendore">Артикул: 13130160140</div>
					<button class="cardProduct__descp-btn btn_red">В корзину</button>
				</div>

				<p class="cardProduct__descp-info">Представленный вид росписи</p>
				<p class="cardProduct__descp-info-text">Двойной фон</p>

				<h4 class="cardProduct__descp-title">Цвет</h4>
				<div class="cardProduct__descp-color">
					<a href="#" class="cardProduct__descp-color-link Btn-color-link Btn-color-link_white"></a>
					<a href="#" class="cardProduct__descp-color-link Btn-color-link Btn-color-link_red"></a>
					<a href="#" class="cardProduct__descp-color-link Btn-color-link Btn-color-link_brown"></a>
					<a href="#" class="cardProduct__descp-color-link Btn-color-link Btn-color-link_green"></a>
					<a href="#" class="cardProduct__descp-color-link Btn-color-link Btn-color-link_blue"></a>
					<a href="#" class="cardProduct__descp-color-link Btn-color-link Btn-color-link_black"></a>
				</div>

				<h4 class="cardProduct__descp-title">Описание</h4> 
				<div class="cardProduct__descp-title-text">
					Кружка. Размер изделия  160x140x140мм. Изготовлена в полном соответствии с  традиционной хохломской технологией золочения.  
					Выточена из цельного дерева вручную. Имеет авторскую роспись в технике фонового письма. Роспись «Двойной фон».  Возможно разместить заказ на 
					изготовление изделия с другими  видами росписи «Ягоды»,  «Торжество»,  «Ландыши». Срок изготовления персонального заказа 21-45 дней.  
					Лаковое покрытие и многократный высокотемпературный обжиг делает изделие влагозащищенным и износоустойчивым. Все применяемые при производстве 
					материалы натуральны и экологичны. Кружка предназначена для холодных и горячих напитков, а также может служить элементом декора помещения. 
					На каждом изделии имеется подпись автора росписи. Упаковка из брендированного картона.
				</div>

				<h4 class="cardProduct__descp-title">Размеры:</h4>
				<ul class="cardProduct__descp-title-list">
					<li>Длина: 140 мм</li>
					<li>Ширина: 140 мм</li>
					<li>Высота: 160 мм</li>
				</ul>

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