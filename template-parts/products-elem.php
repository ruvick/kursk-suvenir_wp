<div class="prodCard__column">
  <div class="prodCard__box">
    <a href="<?php echo get_permalink();?>" class="prodCard__box-img">
		  <img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
    </a>
    <div class="prodCard__box-descp">
      <h3 class="prodCard__box-descp-title"><?php the_title();?></h3>
      <div class="prodCard__box-descp-flex">
        <div class="prodCard__box-descp-flex-price"><?php echo carbon_get_the_post_meta('as_product_price');?> ₽</div>
        <button class="prodCard__box-descp-flex-link btn_red">В корзину</button>
      </div>
    </div>
  </div>
</div>
