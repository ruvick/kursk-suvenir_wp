<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package souvenir
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="apple-touch-icon" sizes="256x256" href="<?php echo get_template_directory_uri();?>/img/favicon/icon256.png">
  <link rel="apple-touch-icon" sizes="128x128" href="<?php echo get_template_directory_uri();?>/img/favicon/icon128.png">
  <link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri();?>/img/favicon/icon64.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicon/icon32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicon/icon16.png">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/img/favicon/safari-pinned-tab.svg" color="#00abaf">
  <meta name="theme-color" content="#00abaf">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 

<script>
  let thencsPage = "<?echo get_the_permalink(69); ?>"
  let thencsPageCart = "<?echo get_the_permalink(1041); ?>"
</script> 

<div class="wrapper">  
  <!-- Подключение  модальных окон-->
  <? include "modal-win.php";?>

<div class="menu-side-nuar_blk nuar_blk"></div>

  <div id="page" class="site">

    <header class="header">
      <div class="container">
        <a href="<?php echo home_url('/');?>" class="logo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo'), 'full')[0];?>)">
        </a>
        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
          <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск" />
          <input type="submit" id="searchsubmit" value="" />
        </form>
        <a href="<?php echo get_permalink(17);?>" class="header-cart">
          <?php
            $bsumm = 0;
            $bcount = 0;
            
            if (!empty($_COOKIE["bascet"])) {
              $bascetsod = explode(",", $_COOKIE["bascet"]);  
            
              foreach ($bascetsod as $be) {
                $elempart = explode("|", $be);  
                
                $product = $elempart[0];
                $bs = 0;
                
                $bs +=  (float)($elempart[6]);
                $bcount += (float)($elempart[1]);
                      
                $summPoz = $bcount * $bs;
                $bsumm += $summPoz;
                
              }
            }
          ?>
          <span class="header-cart__img">
            <span class="inputCount"><?php echo $bcount;?></span>
          </span>
          <span class="header-cart__text">Корзина</span>
        </a>
        <div class="header-contacts">
          <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>" class="header-phone"><?php echo carbon_get_theme_option('as_phone');?></a>
          <a href="#callback" class="header-callback _popup-link" data-formid="Заказ звонка в шапке сайта" data-mailmsg="Заказ звонка в шапке сайта">Заказать звонок</a>
        </div>
      </div>
    </header>
    <div class="mob-menu">
      <div class="close-menu"></div>
      <div class="logo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo'), 'full')[0];?>)"></div>
        <?php main_menu();?>
        <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>" class="header-phone"><?php echo carbon_get_theme_option('as_phone');?></a>
        <a href="mailto:<?php echo carbon_get_theme_option('as_email')?>" class="header-phone"><?php echo carbon_get_theme_option('as_email');?></a>
    </div>
    <div class="mob-catalog">
        <div class="close-menu"></div>
          <?php
          $args = array(
            
            'hide_empty' => 0,
            'show_count' => 0,
            'parent' => 0,
            'taxonomy' => 'asgproductcat',
            'title_li' => ''
          );
          ?>
          <div class="logo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo'), 'full')[0];?>)"></div>
          <ul class="ul-clean menu">
            <?php 
              wp_list_categories($args);
            ?>
          </ul>
    </div>
    <nav class="main-menu">
      <div class="container">
        <!-- <div class="mobile-catalog">
          <div class="mobile-catalog__btn">Продукция</div>
        </div> -->
        <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>" class="header-phone header-phone__mob"><?php echo carbon_get_theme_option('as_phone');?></a>
        <div class="catalog-link menu-side-open">
          <span class="catalog-link__hamburger"></span>
          <span class="catalog-link__text">Весь каталог</span>
        </div>
        <?php main_menu();?>
        <div class="hamburger menu-side-open-mob"><span>Меню</span></div>
      </div>
    </nav>

    <div class="menu-side">
      <button class="menu-side__closed menu-side-close"></button> 
      <div class="menu-side__body">
      <?			
				$listCat = wp_list_categories (array(
				'hierarchical' => true,
				'taxonomy' => "asgproductcat",
				'hide_empty' => false,
				'title_li' => '',
				'echo' => 0,
				'depth' => 1,
				'show_option_none'   => "", 
				) );
			?>
        <ul class="menu-side__body-list">
          <?
            echo $listCat;
          ?>	
        </ul>
        <?php wp_nav_menu( array('theme_location' => 'menu-1','menu_class' => 'menu-side__body-list menu-side__body-list_mob',
        'container_class' => 'menu-side__body-list menu-side__body-list_mob','container' => false )); ?> 
      </div>
    </div>

    <div id="content" class="site-content">
