<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package asgard
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php the_content();?>
		
		<div class="cart-buttons__top">
			<div onclick="history.back(1);" class="cart-buttons__top-link-continue">Продолжить покупки</div>
		</div>
		
		<div class = "bascetTextZonn">
		<?php
		if (!empty($_COOKIE["bascet"]))
			{
						$bascetsod = explode(",", $_COOKIE["bascet"]);	
		
		
		?>
			
			<form action="" class="form-cart">
			
			<table>
				<thead>
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th>Цена за штуку </th>
						<th>Количество</th>
						<th>Сумма</th>
					</tr>
					
				</thead>
				<tbody>
					
					<?php //foreach(array(18, 20, 22) as $product):
						
						
						$bsumm = 0;
						$bcount = 0;
						
						foreach ($bascetsod as $be) {
							$elempart = explode("|", $be);
							$product = $elempart[0];
							$offerid = $elempart[5];
							$offertype = $elempart[3];
							$bs = 0;
					?>
							<tr class="cart-item">
								<td class="product-delete" >
									<div class = "dellBtnNew" onclick = "dellbascet(this);" 

										data-postid = "<?php echo $product; ?>"  
										data-groupid = "<?php echo $elempart[2]; ?>"  
										data-offertype = "<?php echo $elempart[3]; ?>"
										data-offersku = "<?php echo $elempart[4]; ?>"
										data-offerid = "<?php echo $elempart[5]; ?>"
										data-offerprice = "<?php echo $elempart[6]; ?>"
									>
										<img src = "<?php echo bloginfo("template_url")?>/img/icon/cross.svg" />
									</div>
								</td>
								<td class="product-thumbnail">
									<a href="<?php echo get_the_permalink($product); ?>">
										<?php echo get_the_post_thumbnail( $product, "medium"); ?>
									</a>
								</td>
								
								<td class="product-name__wrap">
									<div class="product-name">
										<a href="<?php echo get_the_permalink($product); ?>" class="product-name__link"><h3 class = "bascetTitle"><?php echo get_the_title($product); ?></h3><span class = "bascetTitleComment"><?php echo $elempart[7] //if (!$offertype) echo get_text_param($offerid); else echo $offerid; ?></span></a>
									</div>
								</td>
								
								<td class="product-price__wrap">
									<span class="bascet_mobile_feild">Цена:</span>
									<?php 
										$old_price = (float)carbon_get_post_meta($product, 'as_product_old_price');
										$cur_price = (float)carbon_get_post_meta($product, 'as_product_price');
										if ((!empty($old_price))&&($old_price != $cur_price))
										{
											echo "<span class='bascet-price__old'>".$old_price." руб.</span>";
										}
										echo "<span class='current-price'>".$cur_price. "</span>"; ?> руб.
								</td>

								<?php
										$bs +=  (float)($cur_price);
										$bcount += (float)($elempart[1]);
										
										$summPoz = (float)($cur_price) * (float)($elempart[1]);
										$bsumm += $summPoz;
								?>
								<td class="product-qunt__wrap">
									<div class="quantity">
										<!-- <input type="number" id="" class="input-text qty text" step="1" min="0" max="" name="" value="1" title="Кол-во" size="4" pattern="[0-9]*" inputmode="numeric"> -->
										<span class="bascet_mobile_feild">Количество:</span>
										<select name="cart-qty-product" id="cart-qty-product" 
											data-postid = "<?php echo $product; ?>"  
											data-groupid = "<?php echo $elempart[2]; ?>"  
											data-offertype = "<?php echo $elempart[3]; ?>"
											data-offersku = "<?php echo $elempart[4]; ?>"
											data-offerid = "<?php echo $elempart[5]; ?>"
											data-offerprice = "<?php echo $elempart[6]; ?>"
										onchange = "recalcbascet(this);">
											<option value="1" <?php if ($elempart[1] == 1) echo "selected"; ?> >1</option>
											<option value="2" <?php if ($elempart[1] == 2) echo "selected"; ?>>2</option>
											<option value="3" <?php if ($elempart[1] == 3) echo "selected"; ?>>3</option>
											<option value="4" <?php if ($elempart[1] == 4) echo "selected"; ?>>4</option>
											<option value="5" <?php if ($elempart[1] == 5) echo "selected"; ?>>5</option>
											<option value="6" <?php if ($elempart[1] == 6) echo "selected"; ?>>6</option>
											<option value="7" <?php if ($elempart[1] == 7) echo "selected"; ?>>7</option>
											<option value="8" <?php if ($elempart[1] == 8) echo "selected"; ?>>8</option>
											<option value="9" <?php if ($elempart[1] == 9) echo "selected"; ?>>9</option>
											<option value="10" <?php if ($elempart[1] == 10) echo "selected"; ?>>10</option>
										</select>
									</div>
								</td>
								
								
								<td class="product-subtotal">
									<span class="bascet_mobile_feild">Сумма:</span>
									<span class="amount"><?php echo $summPoz; ?></span>
									<span class="currency-cymbol"> руб.</span>
								</td>
							</tr>
					<?php 
						}
					?>
					
				</tbody>
			</table>
		</form>
		<div class="cart-subtotal__price">
			<div class="cart-subtotal__price-content">
				<span class="cart-subtotal__price-content-label">Стоимость заказа:</span>
				<span class="cart-subtotal__price-content-price"><?php echo $bsumm; ?> </span>
				<span class="cart-subtotal__price-content-currency">руб</span>
			</div>
		</div>
		<h2>Данные по заказу:</h2>
		<form action="" class="checkout-form" method="post" id="checkout-form">
			<div class="checkout-form__block">
				<!-- <label for="checkout-form__name">Ваше Имя <span>*</span></label> -->
				<input type="text" required name="name" id="checkout-form__name" placeholder="Имя *" class="checkout-form__name">
				<div class="checkout-form__block-checked"></div>
				<div class="checkout-form__block-wrong"></div>
			</div>
			<div class="checkout-form__block">
				<!-- <label for="checkout-form__phone">Ваш Телефон <span>*</span></label> -->
				<input type="tel" class = "mascedphoneclass" required name="phone" placeholder="Телефон *" pattern="^((8|\+7)[\-]?)?(\(?\d{3}\)?[\-]?)?[\d\-]{7,10}$" id="checkout-form__phone">
				<div class="checkout-form__block-checked"></div>
				<div class="checkout-form__block-wrong"></div>
			</div>
			<div class="checkout-form__block">
				<!-- <label for="checkout-form__email">Электронная почта</label> -->
				<input type="email" placeholder="Email" required name="email" id="checkout-form__email" class="checkout-form__email">
				<div class="checkout-form__block-checked"></div>
				<div class="checkout-form__block-wrong"></div>
			</div>
			
			<div class="checkout-form__block">
				<!-- <label for="checkout-form__address">Адрес</label> -->
				<input type="text" placeholder="Адрес" name="address" id="checkout-form__address">
				<div class="checkout-form__block-checked"></div>
			</div>
			

			
			
			<div class="checkout-form__block">
				
				<textarea name="comment" placeholder="Комментарий" id="checkout-form__comment" cols="30" rows="10"></textarea>
				<div class="checkout-form__block-checked"></div>
			</div>
			
			
			<div class="checkout-form__block checkout-form__block-submit">
				<!-- <div class="checkout-form__block-submit-total"><span>Итого <span class="checkout-form__block-submit-qty"><?php echo $bcount; ?></span> товар на сумму <span class="checkout-form__block-submit-summ"><?php echo $bsumm; ?></span> руб.</span></div> -->
				<div class="checkout-form__block-submit-btn button oformlenieZak" onclick="" >Оставить заявку</div>
			</div>
			
			
		</form>
	<?php
		} else {
			?>
				<h3>Ваша корзина пуста</h3>
			<?php
		}
	?>
	</div>
		
		
   </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
