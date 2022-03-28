<div class="catalog-sec__sidebar">
	<div class="catalog-sec__sidebar-filter-block-mob"><p class="catalog-sec__sidebar-filter-block-mob-text">Фильтры</p></div>
	<div class="catalog-sec__sidebar-body">
	<div class="loaderSize" id="categoryFilterLoader" style="display: block;">Загрузка...</div>
	<form id = "categoryFilterForm" action="#" class="catalog-sec__sidebar-form" style="display: none;">
    <input type="hidden" id = "sortFormFilter" name = "sort" value = "price_vozr">
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
								<label for="price_ot" class="form__label">От</label>
								<input id="price_ot" autocomplete="off" placeholder="200" type="text" name="price_ot" data-error="Ошибка" value="<?echo $_REQUEST["price_ot"]?>"  data-value="<?echo $_REQUEST["price_ot"]?>" class="input _digital">
							</div>

							<div class="catalog-sec__sidebar-price-input catalog-sec__sidebar-price-input-right">
								<label for="price_do" class="form__label">До</label>
								<input id="price_do" autocomplete="off" placeholder="15 000" type="text" name="price_do" data-error="Ошибка" value="<?echo $_REQUEST["price_do"]?>" data-value="<?echo $_REQUEST["price_do"]?>" class="input _digital">
							</div>
						</div>
					</div>
				</div>

				<div class="spollers-block__item catalog-sec__sidebar-spollers-item">
					<div class="spollers-block__title catalog-sec__sidebar-spollers-title _active" data-spoller>Цвет фона</div>
					<div class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
						<div id = "filterColorWrapper" class="catalog-sec__sidebar-form-color-btn-flex">
							<!-- <div class="form_radio">
								<input id="radio-1" type="radio" name="radio" value="1" checked>
								<label for="radio-1" style="background: #D0D2D3;"></label>
							</div> -->
						</div>
					</div>
				</div> 

				<div class="spollers-block__item catalog-sec__sidebar-spollers-item">
					<div class="spollers-block__title catalog-sec__sidebar-spollers-title _active" data-spoller>Материал изделия</div>
					<div id = "filterMaterialWrapper" class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
						<!-- <label for="check" class="checkbox catalog-sec__sidebar-spollers-checkbox">
							<input id="check" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1" name="material[]">
							<span class="checkbox__text"><span>Дерево</span></span>
						</label> -->
					</div>
				</div>

				<div class="spollers-block__item catalog-sec__sidebar-spollers-item">
					<div class="spollers-block__title catalog-sec__sidebar-spollers-title _active" data-spoller>Вид росписи</div>
					<div id = "filterVidRospWrapper" class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
						
					</div>
				</div>

				<div class="spollers-block__item catalog-sec__sidebar-spollers-item">
					<div class="spollers-block__title catalog-sec__sidebar-spollers-title _active" data-spoller>Вид рисунка</div>
					<div id = "filterVidRisWrapper" class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
						
					</div>
				</div>

      </div>
		</div>
		<div class="catalog-sec__sidebar-form-btn">
      <button type="reset" onclick = "clearFilter()" class="catalog-sec__sidebar-form-btn-limk button button_grey">Сбросить</button>
      <button type="submit" class="catalog-sec__sidebar-form-btn-limk button button_red btn-hover">Применить</button> 
    </div>
	</form>
	</div>
</div>