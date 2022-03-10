<?php 

/*
* 
*/

get_header('page'); ?>

<section id="similar" class="similar">
  <div class="container">
		<h2 class="similar__title section-title"><span>Похожие товары</span></h2>

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
						<button class="prodCard__box-descp-flex-link">В корзину</button>
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
						<button class="prodCard__box-descp-flex-link">В корзину</button>
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
						<button class="prodCard__box-descp-flex-link">В корзину</button>
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
						<button class="prodCard__box-descp-flex-link">В корзину</button>
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
						<button class="prodCard__box-descp-flex-link">В корзину</button>
					</div>
				</div>
			</div>
		</div>

		</div>

	</div> 
</section>



<?php get_template_part('template-parts/applic-section'); ?>
		
<?php get_footer();