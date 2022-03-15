<div class="prodCard__column">
  <div class="prodCard__box">
    <a href="<?php echo get_permalink();?>" class="prodCard__box-img">
		  <img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
    </a>
    <div class="prodCard__box-descp">
      <h3 class="prodCard__box-descp-title"><?php the_title();?></h3>
      <div class="prodCard__box-descp-flex">
        <div class="prodCard__box-descp-flex-price"><?php echo carbon_get_the_post_meta('as_product_price');?> ₽</div>
        <a href="#" class="prodCard__box-descp-flex-link btn_red link-buy" data-postid="<?php the_ID();?>" data-groupid="<?php echo carbon_get_the_post_meta('offer_group_id');?>" data-offertype="<?php echo carbon_get_the_post_meta('offer_type');?>" data-offersku="<?php echo carbon_get_the_post_meta('as_sku');?>" data-offerid="<?php echo carbon_get_the_post_meta('as_sku');?>" data-pricereg="<?php echo carbon_get_the_post_meta('as_product_price');?>" data-src="<?php echo get_the_post_thumbnail_url()?>" data-weight="<?php echo carbon_get_the_post_meta('as_product_weight');?>" data-package="<?php echo carbon_get_the_post_meta('as_product_package');?>">В корзину</a>
      </div>
    </div>
  </div>
</div>
