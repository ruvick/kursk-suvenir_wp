<div class="prodCard__column">
  <div class="prodCard__box">
    <a href="<?php echo get_permalink($args['element']->ID);?>" class="prodCard__box-img">
		  <img src="<?php  $imgTm = get_the_post_thumbnail_url( $args['element']->ID, "full" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
    </a>
    <div class="prodCard__box-descp">
      <h3 class="prodCard__box-descp-title"><? echo $args['element']->post_title;?></h3>
      <div class="prodCard__box-descp-flex">
        <div class="prodCard__box-descp-flex-price"><?echo carbon_get_post_meta($args['element']->ID,"as_product_price"); ?> ₽</div>
        <a href="#" class="prodCard__box-descp-flex-link btn_red link-buy" 
        data-postid="<?php echo $args['element']->ID;?>" 
        data-groupid="<?php echo carbon_get_post_meta($args['element']->ID,'offer_group_id');?>" 
        data-offertype="<?php echo carbon_get_post_meta($args['element']->ID,'offer_type');?>" 
        data-offersku="<?php echo carbon_get_post_meta($args['element']->ID,'as_sku');?>" 
        data-offerid="<?php echo carbon_get_post_meta($args['element']->ID,'as_sku');?>" 
        data-pricereg="<?php carbon_get_post_meta($args['element']->ID,'as_product_price');?>" 
        data-src="<?php echo $imgTm;?>" 
        data-weight="<?php echo carbon_get_post_meta($args['element']->ID,'as_product_weight');?>" 
        data-package="<?php echo carbon_get_post_meta($args['element']->ID,'as_product_package');?>">В корзину</a>
      </div>
    </div>
  </div>
</div>
