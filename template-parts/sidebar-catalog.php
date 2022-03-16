<div class="catalog-sec__sidebar">
	<div class="loaderSize" id="categoryFilterLoader" style="display: block;">Загрузка...</div>
	<form id = "categoryFilterForm" action="#" class="catalog-sec__sidebar-form" style="display: none;">
    <div class="catalog-sec__sidebar-form-column">
			<div class="spollers-block" data-spollers data-one-spoller>
				<?			
					$listCat = wp_list_categories (array(
					'hierarchical' => true,
					'taxonomy' => "asgproductcat",
					'child_of' => get_queried_object()->term_id,
					'hide_empty' => false,
					'title_li' => '',
					'echo' => 0,
					'depth' => 1,
					'show_option_none'   => "", 
					) );
				?>
				<div class="spollers-block__item catalog-sec__sidebar-spollers-item">
					<div class="spollers-block__title catalog-sec__sidebar-spollers-title _active" data-spoller>Весь ассортимент</div>
					<div class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
						<!-- <label for="check" class="checkbox catalog-sec__sidebar-spollers-checkbox">
							<input id="check" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1" name="form[]">
							<span class="checkbox__text"><span>Бокалы</span></span> 
						</label> -->
						<ul id="catmenu" class=" subcatmenu ">
              <?
                echo $listCat;
              ?>	
            </ul>
					</div>
				</div>

				<div class="spollers-block__item catalog-sec__sidebar-spollers-item">
					<div class="spollers-block__title catalog-sec__sidebar-spollers-title _active" data-spoller>Цена</div>
					<div class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
						<div class="catalog-sec__sidebar-price">
							<div class="catalog-sec__sidebar-price-input catalog-sec__sidebar-price-input-left">
								<label for="priceOt" class="form__label">От</label>
								<input id="priceOt" autocomplete="off" placeholder="200" type="text" name="form[]" data-error="Ошибка" data-value="25" class="input _digital">
							</div>
							<div class="catalog-sec__sidebar-price-input catalog-sec__sidebar-price-input-right">
								<label for="priceDo" class="form__label">До</label>
								<input id="priceDo" autocomplete="off" placeholder="15 000" type="text" name="form[]" data-error="Ошибка" data-value="15000" class="input _digital">
							</div>
						</div>
					</div>
				</div>

				<div class="spollers-block__item catalog-sec__sidebar-spollers-item">
					<div class="spollers-block__title catalog-sec__sidebar-spollers-title _active" data-spoller>Цвет</div>
					<div id = "filterMaterialWrapper" class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
            <div class="catalog-sec__sidebar-form-color-btn-flex">
              <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_white"></a>
              <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_red"></a>
              <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_brown"></a>
              <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_green"></a>
              <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_blue"></a>
              <a href="#" class="catalog-sec__sidebar-form-color-btn-link Btn-color-link Btn-color-link_black"></a>
            </div>
					</div>
				</div>

				<div class="spollers-block__item catalog-sec__sidebar-spollers-item">
					<div class="spollers-block__title catalog-sec__sidebar-spollers-title _active" data-spoller>Материал изделия</div>
					<div id = "filterMaterialWrapper" class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
						<label for="check" class="checkbox catalog-sec__sidebar-spollers-checkbox">
							<input id="check" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1" name="material[]">
							<span class="checkbox__text"><span>Дерево</span></span>
						</label>
					</div>
				</div>

      </div>
		</div>
		<div class="catalog-sec__sidebar-form-btn">
      <button type="reset" class="catalog-sec__sidebar-form-btn-limk button button_grey">Сбросить</button>
      <button type="submit" class="catalog-sec__sidebar-form-btn-limk button button_red">Применить</button>
    </div>
	</form>
</div>