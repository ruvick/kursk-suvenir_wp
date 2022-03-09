<?php

/*
* Template Name: Контакты
*/
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		    <div class="main-content__wrapper">
		      <div class="main-content__wrapper container">
		        <?php get_template_part('template-parts/sidebar-catalog');?>
		        <div class="main-content">
		<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
		</div>
		<div class="container">
			<h1 class="page-title"><?php the_title();?></h1>
			<!-- <p>
				<strong>Телефон:</strong> <span><?php echo carbon_get_theme_option('as_phone');?></span>
			</p> -->
			<p>
				<strong>Телефон:</strong> <span><?php echo carbon_get_theme_option('as_phone_2');?></span>
			</p>
			<p>
				<strong>Телефон:</strong> <span><?php echo carbon_get_theme_option('as_phone_3');?></span>
			</p>
			<p>
				<strong>Телефон:</strong> <span><?php echo carbon_get_theme_option('as_phone_4');?></span>
			</p>
			<p>
				<strong>Email:</strong> <span><?php echo carbon_get_theme_option('as_email');?></span>
			</p>

			<?php
			while ( have_posts() ) :
				the_post();

				// get_template_part( 'template-parts/content', 'page' );
				the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					//comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			<div id = "mapLine" class = "mapLine"></div>
			 <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
			<script>
			  ymaps.ready(init);
			  function init () {
				
				  var myMap = new ymaps.Map("mapLine", {
						  center: <?php echo carbon_get_theme_option('mkad_map_point') ?>,
						  zoom: 14,
						  controls: ['zoomControl']
					  }),
					myPlacemarkAdr = new ymaps.Placemark(<?php echo carbon_get_theme_option('mkad_map_point') ?>, {
						  iconContent: '',
						  balloonContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('as_address') ?></b><br/>Телефон: <b> <?php echo carbon_get_theme_option('as_phone') ?>',
						  hintContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('as_address') ?></b><br/>Телефон: <b> <?php echo carbon_get_theme_option('as_phone') ?>',
					  }, {
						iconLayout: 'default#image',
						iconImageHref: '<?php bloginfo("template_url"); ?>/img/map.svg',
						iconImageSize: [30, 54],
						iconImageOffset: [-15, -54]
					  });
					  
					  myMap.geoObjects.add(myPlacemarkAdr);
					  
					
					
					
				myMap.behaviors.disable('scrollZoom');
			  }
</script>
					</div>
				</div>
			</div>
	</main>
</div>

<?php
get_footer();