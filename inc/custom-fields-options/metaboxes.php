<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'as_theme_options', 'Настройки темы' )
    ->add_tab('Главная', array(
      Field::make( 'image', 'as_logo', 'Логотип')
        ->set_width(30),
      Field::make( 'image', 'as_logo_white', 'Логотип белый')
        ->set_width(30),
    ))
    ->add_tab('Отзывы', array(
      Field::make('complex', 'reviews_complex_theme', 'Отзывы')
        ->add_fields(array(
          Field::make('image', 'img', 'Фото')
            ->set_width(30),
          Field::make('text', 'name', 'Имя')
            ->set_width(30),
          Field::make('text', 'date', 'Дата')
            ->set_width(30),
          Field::make('textarea', 'text', 'Текст отзыва')
        ))
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_phone', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_2', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_3', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_4', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) )
          ->set_width(50),
        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'text', 'as_insta', __( 'Инстаграм' ) )
          ->set_width(50),
        Field::make( 'text', 'as_face', __( 'Facebook' ) )
          ->set_width(50),
        Field::make( 'text', 'as_ok', __( 'Одноклассники' ) )
          ->set_width(50),
        Field::make( 'text', 'as_vk', __( 'Вконтакте' ) )
          ->set_width(50),
        Field::make( 'text', 'as_whatsapp', __( 'WhatsApp' ) )
          ->set_width(50),
        Field::make('text', 'mkad_map_point', 'Координаты карты'),
    ) );
Container::make('post_meta', 'ca_product', 'Доп поля')
	->where('post_template', '=', 'page-product.php')
	->add_fields(array(
		Field::make('text', 'ca_product_price', 'Цена'),
	));
Container::make('post_meta', 'as_product_cr', 'Характеристики товара')
  ->show_on_post_type(array( 'asgproduct'))
	//->where( 'post_template', '=', 'single-product.php' )
	->add_fields(array(
    Field::make('complex', 'product_modification', 'Модификация товара')
      ->add_fields(array(
        Field::make('text', 'mod', 'Модификация'),
      )),
		 Field::make('text', 'offer_group_id', 'Группа товара')
			->set_width(50),
		Field::make( 'checkbox', 'offer_type', 'Собственный оффер')
		  ->set_width(50),
    Field::make( 'checkbox', 'hit', 'Хит')
      ->set_width(50),
    Field::make( 'checkbox', 'new_prod', 'Новый')
      ->set_width(50),
		Field::make('text', 'as_product_price', 'Цена')
			->set_width(50),
		Field::make('text', 'as_product_old_price', 'Старая цена')
			->set_width(50),
		Field::make('text', 'as_size', 'Размер')
			->set_width(50),
		Field::make('text', 'as_age', 'Возраст')
			->set_width(50),
    Field::make('rich_text', 'as_char', 'Характеристики товара (Размеры)'),
    Field::make('rich_text', 'as_complect', 'Комплектация товара (Материалы)'),
    Field::make('rich_text', 'as_video_prod', 'Видео о товаре'),
    Field::make('rich_text', 'as_reviews_prod', 'Отзывы о товаре'),
    Field::make('rich_text', 'as_cert_prod', 'Сертификаты'),

		Field::make('text', 'as_product_weight', 'Вес (г)')
			->set_width(50),
		Field::make('text', 'as_product_package', 'Кол-во в упаковке (шт)')
			->set_width(50),
		Field::make( 'text', 'as_sku', 'Артикул')
        	->set_width(50),
		Field::make( 'rich_text', 'as_short_derscr', __( 'Описание' ) ),
        Field::make('image', 'as_gallery_img_1', 'Фото 1')
          ->set_width(20),
        Field::make('image', 'as_gallery_img_2', 'Фото 2')
          ->set_width(20),
        Field::make('image', 'as_gallery_img_3', 'Фото 3')
          ->set_width(20),
        Field::make('image', 'as_gallery_img_4', 'Фото 4')
          ->set_width(20),
	));

Container::make('term_meta', 'as_term_product', 'Дополнительные поля')
	->where('term_taxonomy', '=', 'asgproductcat')
	->add_fields(array(
		Field::make('text', 'term_product_taste', 'Псевдоним'),
	) );