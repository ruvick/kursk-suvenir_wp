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
		<h2 class="single-section-title section-title"><span>Бочата</span></h2>
  </div> 
</section>

<section id="catalog-sec" class="catalog-sec">
  <div class="container">

	<div class="catalog-sec__wrap">

    <div class="catalog-sec__sidebar">
							<form action="#" class="catalog-sec__sidebar-form">

              <div class="catalog-sec__sidebar-form-column">
								<div class="spollers-block" data-spollers data-one-spoller>
                  <div class="spollers-block__item catalog-sec__sidebar-spollers-item">
											<div class="spollers-block__title catalog-sec__sidebar-spollers-title" data-spoller>Весь ассортимент</div>
											<div class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
												<label for="check" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1" name="form[]">
													<span class="checkbox__text"><span>Бокалы</span></span>
												</label>
												<label for="check1" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check1" data-error="Ошибка" class="checkbox__input" type="checkbox" value="2" name="form[]">
													<span class="checkbox__text"><span>Баченки</span></span>
												</label>
												<label for="check2" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check2" data-error="Ошибка" class="checkbox__input" type="checkbox" value="3" name="form[]">
													<span class="checkbox__text"><span>Вазы</span></span>
												</label>
												<label for="check3" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check3" data-error="Ошибка" class="checkbox__input" type="checkbox" value="4" name="form[]">
													<span class="checkbox__text"><span>Ковши</span></span>
												</label>
												<label for="check3" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check3" data-error="Ошибка" class="checkbox__input" type="checkbox" value="4" name="form[]">
													<span class="checkbox__text"><span>Конфетницы</span></span>
												</label>
                        <label for="check3" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check3" data-error="Ошибка" class="checkbox__input" type="checkbox" value="4" name="form[]">
													<span class="checkbox__text"><span>Креманки</span></span>
												</label>
                        <label for="check3" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check3" data-error="Ошибка" class="checkbox__input" type="checkbox" value="4" name="form[]">
													<span class="checkbox__text"><span>Кружки</span></span>
												</label>
                        <label for="check3" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check3" data-error="Ошибка" class="checkbox__input" type="checkbox" value="4" name="form[]">
													<span class="checkbox__text"><span>Ложки</span></span>
												</label>
											</div>
										</div>

                    <div class="catalog-sec__sidebar-form-column">
									<div class="spollers-block" data-spollers data-one-spoller>
										<div class="spollers-block__item catalog-sec__sidebar-spollers-item">
											<div class="spollers-block__title catalog-sec__sidebar-spollers-title" data-spoller>Цена</div>
											<div class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
												<div class="catalog-sec__sidebar-price">
													<div class="catalog-sec__sidebar-price-input">
														<label for="min-price" class="form__label">От</label>
														<input id="min-price" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="25"
														class="input _digital">
													</div>
													<div class="catalog-sec__sidebar-price-input">
														<label for="max-price" class="form__label">До</label>
														<input id="max-price" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="15000"
														class="input _digital">
													</div>
												</div>
											</div>
										</div>

                    <div class="catalog-sec__sidebar-form-color-btn">
                      <h4 class="catalog-sec__sidebar-form-color-btn-title">Цвет</h4>
                      <div class="catalog-sec__sidebar-form-color-btn-flex">
                        <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_white"></a>
                        <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_red"></a>
                        <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_brown"></a>
                        <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_green"></a>
                        <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_blue"></a>
                        <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_black"></a>
                      </div>
								    </div>

										<div class="spollers-block__item catalog-sec__sidebar-spollers-item">
											<div class="spollers-block__title catalog-sec__sidebar-spollers-title" data-spoller>Материал изделия</div>
											<div class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
												<label for="check" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1" name="form[]">
													<span class="checkbox__text"><span>Дерево</span></span>
												</label>
												<label for="check1" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check1" data-error="Ошибка" class="checkbox__input" type="checkbox" value="2" name="form[]">
													<span class="checkbox__text"><span>Металл</span></span>
												</label>
												<label for="check2" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check2" data-error="Ошибка" class="checkbox__input" type="checkbox" value="3" name="form[]">
													<span class="checkbox__text"><span>Керамика</span></span>
												</label>
												<label for="check3" class="checkbox catalog-sec__sidebar-spollers-checkbox">
													<input id="check3" data-error="Ошибка" class="checkbox__input" type="checkbox" value="4" name="form[]">
													<span class="checkbox__text"><span>Стекло</span></span>
												</label>
											</div>
										</div>

									</div>
								</div>
                </div>
								</div>
							</form>
						<!-- </div> -->
    </div>

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

    	<div class="catalog-sec__row prodCard__row">

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

		</div>
		<div class="pagination">
			<?php the_posts_pagination(array('prev_text' => '«', 'next_text' => '»'));?>
		</div>
  </div> 
</section>

</main>


<?php get_template_part('template-parts/applic-section'); ?>
		
<?php get_footer();