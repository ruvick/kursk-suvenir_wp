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
						
					if (!empty($listCat)) {
					
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
				<?}?>

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
							<div class="form_radio">
								<input id="radio-1" type="radio" name="radio" value="1" checked>
								<label for="radio-1" style="background: #D0D2D3;"></label>
							</div>
							<div class="form_radio">
								<input id="radio-2" type="radio" name="radio" value="2">
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
							</div>
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