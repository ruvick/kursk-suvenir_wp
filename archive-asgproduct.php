<?php 

/*
* 
*/

get_header('page'); ?>

<main id="main" class="site-main">

<div style = "display:none" id = "tovarCategoryId" data-id = "<? echo get_queried_object()->term_id; ?>"></div>


<section id="section-title-sec" class="section-title-sec">
  <div class="container">
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
	?>
		<h2 class="single-section-title section-title"><span>Каталог товаров</span></h2>
  </div> 
</section>

<section id="catalog-sec" class="catalog-sec">
  <div class="container">

	<div class="catalog-sec__wrap">
		<?php get_template_part('template-parts/sidebar-catalog');?>
    <div class="catalog-sec__product">
			<?php get_template_part('template-parts/sorting-block');?>
    	<div class="catalog-sec__row">
      <?
			$countInPage = !empty($_REQUEST["countinpage"]) ? $_REQUEST["countinpage"] : "12";

            $termID = get_queried_object()->term_id;

			$term = get_term_by('id', $child, $taxonomyName);
			$term_id = $term->term_taxonomy_id; 

			$arg = $wp_query->query;

			$startPrice = empty($_REQUEST["price_ot"])?"0":$_REQUEST["price_ot"];
			$endPrice = empty($_REQUEST["price_do"])?PHP_INT_MAX:$_REQUEST["price_do"];

			$metaquery = array(
				'relation' => 'AND',
				
				'priceStart' => array (
					'key'     => '_as_product_price',
					'value' => $startPrice,
					'compare' => '>=',
					'type'    => 'NUMERIC',
				),
				
				'priceEnd' => array (
					'key'     => '_as_product_price',
					'value' => $endPrice,
					'compare' => '<=',
					'type'    => 'NUMERIC',
				)
			);

			
			// Фильтрация по материалу
			if (!empty($_REQUEST["material"])) {
				$metaquery["materialQuery"] = array(
					'relation' => 'OR',
				);
				
				for ($i = 0; $i<count($_REQUEST["material"]); $i++) {
					$metaquery["materialQuery"]["material".$i] = array(
						'key'     => '_tov_material',
						'value' => $_REQUEST["material"][$i],
						'compare' => '=',
						'type'    => 'CHAR',
					);
				} 
			}


			// Фильтрация по цвету
			if (!empty($_REQUEST["color"])) {
				$metaquery["colorQuery"] = array(
					'relation' => 'OR',
				);
				
				for ($i = 0; $i<count($_REQUEST["color"]); $i++) {
					$metaquery["colorQuery"]["color".$i] = array(
						'key'     => '_tov_color',
						'value' => $_REQUEST["color"][$i],
						'compare' => '=',
						'type'    => 'CHAR',
					);
				} 
			}

			
			// Фильтрация по виду рисунка
			if (!empty($_REQUEST["color"])) {
				$metaquery["colorQuery"] = array(
					'relation' => 'OR',
				);
				
				for ($i = 0; $i<count($_REQUEST["color"]); $i++) {
					$metaquery["colorQuery"]["color".$i] = array(
						'key'     => '_tov_color',
						'value' => $_REQUEST["color"][$i],
						'compare' => '=',
						'type'    => 'CHAR',
					);
				} 
			}

						
			// Фильтрация по виду росписи
			if (!empty($_REQUEST["vid_rosp"])) {
				$metaquery["vid_rospQuery"] = array(
					'relation' => 'OR',
				);
				
				for ($i = 0; $i<count($_REQUEST["vid_rosp"]); $i++) {
					$metaquery["vid_rospQuery"]["vid_rosp".$i] = array(
						'key'     => '_tov_vid_rosp',
						'value' => $_REQUEST["vid_rosp"][$i],
						'compare' => '=',
						'type'    => 'CHAR',
					);
				} 
			}
						
			// Фильтрация по виду рисунка
			if (!empty($_REQUEST["vid_ris"])) {
				$metaquery["vid_risQuery"] = array(
					'relation' => 'OR',
				);
				
				for ($i = 0; $i<count($_REQUEST["vid_ris"]); $i++) {
					$metaquery["vid_risQuery"]["vid_ris".$i] = array(
						'key'     => '_tov_vid_ris',
						'value' => $_REQUEST["vid_ris"][$i],
						'compare' => '=',
						'type'    => 'CHAR',
					);
				} 
			}

					$mypostCount = array(
						'post_type' => 'asgproduct',
						'posts_per_page' => -1,
						'meta_query' => $metaquery,
						'exclude' => array(417),
						'tax_query' => array(
							array(
								'taxonomy' => 'asgproductcat',
								'field' => 'id',
								'terms' => strval($termID)
							),
						),
					);

					

					$Count = new WP_Query($mypostCount);

					$fullCount = $Count->post_count;
					
					$pagenumber = (get_query_var('paged')) ? get_query_var('paged') : 1; 
				  
					$startPos = ($pagenumber - 1) * $countInPage;
							  
								if ($startPos > $fullCount) {
								  $pagenumber = 1;
								  $startPos = ($pagenumber - 1) * $countInPage;
								}
					
					$mypost = array(
						'post_type' => 'asgproduct',
						
						'posts_per_page' => $countInPage,
						'offset' => $startPos,

						'meta_query' => $metaquery,
						'meta_key' => '_as_product_price',
						'orderby' => 'meta_value_num',
						'order' => ($_REQUEST["sort"] == 'price_ub')?'DESC':'ASC',
						'exclude' => array(417),
						// 'tax_query' => array(
						// 	array(
						// 		'taxonomy' => 'asgproductcat',
						// 		'field' => 'id',
						// 		'terms' => strval($termID)
						// 	),
						// ),
					);

					$loop = new WP_Query($mypost);

					// echo "<pre>";	
					// var_dump($loop);
					// echo "</pre>";

					foreach ($loop->posts as $element) {
						$param = ["element" => $element];
						get_template_part('template-parts/products', 'elem-param', $param); 
					}

		?>
      </div>

    </div>

		</div>
		<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi($loop); ?> 
  </div> 
</section>

</main>


<?php get_template_part('template-parts/applic-section'); ?>
		
<?php get_footer();