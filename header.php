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

<div class="menu-side-nuar_blk nuar_blk"></div>

  <div style="display: none;">
  <div class="box-modal" id="messgeModal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class = "modalline" id = "lineIcon">
  </div>
  
  <div class = "modalline" id = "lineMsg">
  </div>
  </div>
</div>
  <div style="display: none;">
    <div class="box-modal" id="buy-modal">
      <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close.svg" width = "15px" /></div>
      <div class = "modalline" id = "lineIcon">
        <form id="order-modal-form">
          <div class="order-popup-form__header">
              <img class="loadImg" src="" alt="">
              <div class="order-popup-form__header-text">
              <h2 class="tovName"></h2>
              <div class="order-popup-form__price"><span class="single-price__old"><span class="tovOldPrice"></span> </span> <span id = "tovPrice" class="tovPrice"></span></div>
              <div class="postId" style="display:none;"></div>
              <div class="tovSKU" style="display:none;"></div>
              <div class="tovType" style="display:none;"></div>
              <div class="tovGroupID" style="display:none;"></div>
              <div class="tovOfferID" style="display:none;"></div>
              <div class="tovWeight" style="display: none"></div>
              <div class="tovPackage" style="display: none;"></div>
              <div id="order-popup__param"></div>
          </div>
          </div>

          <div class="character-block">
            <div class="modal-mod"></div>
            <!-- <select name="order-popup__param" id="order-popup__param" class="order-popup__param">
             
            </select> -->
          </div>
          <div class="product-content__block">
            
          </div>
         <!--  <input type="text" id="order-modal-form-name" placeholder="Имя">
          <input type="tel" id="order-modal-form-phone" placeholder="Телефон"> -->
          <div class="character-block__btn">
            <div class="more-link cancel-link">Отмена</div>
            <div class="link-consultation product-add-to-cart button link-button toBascetInWin" id="buy-submit-link">В корзину</div>
          </div>
        </form>    
      </div>
  
  <div class = "modalline" id = "lineMsg">
  </div>
  </div>
</div>
<div style="display: none;">
  <div class="box-modal" id="order-modal">
      <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close.svg" width = "15px" /></div>
      <div class = "order-modal-wrapper" id = "lineIcon">
        <div class="order-modal-photo"></div>
        <div class="order-modal-form-wrap">
          <h2>Обратный звонок</h2>
          <form action="">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="tel" name="tel" placeholder="Ваш телефон">
            <a href="#" class="uniSendBtn button">Отправить</a>
          </form>
        </div>
  </div>
  
  <div class = "modalline" id = "lineMsg">
  </div>
  </div>
</div>

<div style="display: none;">

    <div class="box-modal main-comp-modal" id="phone-modal">
        <!-- <img class = "formpers1" src = "<?php bloginfo("template_url")?>/images/formpers1.svg"> -->
        <!-- <img class = "formpers2" src = "<?php bloginfo("template_url")?>/images/formpers2.svg"> -->
    <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/img/close.svg" width = "15px" /></div>
    <div class="uniConsultModal-wrapper">
      <div class="uniConsultModal-img">
        
      </div>
      <div class="uniConsultModal-form">
            <h2 id = "uniHeaderNdp">Наши специалисты свяжутся с вами в течении 15 минут</h2>
        <form class = "uniForm phone-modal">
            <input type = "hidden" class = "uniFormName" id = "ovFormName" value = "по кнопке">
            <!-- <input type = "text" class = "uniName" id = "uniName" placeholder = "Имя"> -->
            <input type = "tel" class = "uniTel mascedtel" id = "uniTel"  placeholder = "Телефон*">
            <!-- <textarea id = "uniMsg" class = "uniMes" placeholder = "Причина обращения"></textarea> -->
            <span class = "btn ovBtn button" data-formname = "phone-modal" >Позвоните мне</span>
          <span class="note-form">Нажимая на кнопку <span id="name_serv">Заказать услугу</span>, вы соглашаетесь с условиями обработки персональных данных</span>
        </form>
      </div>
    </div>
    
    </div>
</div>
<div class="dialog-cb-button dialog-cb-button__decstop">
    <a href="#"></a>
</div>
<div class="dialog-cb-button dialog-cb-button__mobile">
    <a class="mgo-number" href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a>
</div>
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
          <a href="#" class="header-callback popup-content" data-formid="Заказ звонка в шапке сайта" data-mailmsg="Заказ звонка в шапке сайта">Заказать звонок</a>
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
        <div class="mobile-catalog">
          <div class="mobile-catalog__btn">Продукция</div>
        </div>
        <div class="catalog-link menu-side-open">
          <span class="catalog-link__hamburger"></span>
          <span class="catalog-link__text">Весь каталог</span>
        </div>
        <?php main_menu();?>
        <div class="hamburger"><span>Меню</span></div>
      </div>
    </nav>

    <div class="menu-side">
      <button class="menu-side__closed menu-side-close"></button> 
      <div class="menu-side__body">
        <ul class="menu-side__body-list">
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Популярные товары</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Модная сказка Хохломы</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Для интерьера</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Коллекция "Ретро"</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Мебель</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Мебель детская</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Иконы</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Ложки</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Матрешки</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Новогодний ассортимент</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Офисные принадлежности</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Посуда</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">С геральдикой и символикой</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">С миниатюрной росписью</a></li>
          <li class="menu-side__body-list-item"><a href="#" class="menu-side__body-list-item-link">Сувениры</a></li>
        </ul>
      </div>
    </div>

    <div id="content" class="site-content">
