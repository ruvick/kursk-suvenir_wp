<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package souvenir
 */

get_header();  
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main"> 

    <div class="main-content__wrapper">
      <!-- <div class="main-content__wrapper container"> -->

        <div class="main-content-index">

          <div class="main-bnr-index main-bnr">
            <div class="nuar_blk"></div>
            <div class="main-bnr__slider">
              <div class="main-bnr__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/k-slide-1.jpg)"></div>
              <div class="main-bnr__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/k-slide-2.jpg)"></div>
              <div class="main-bnr__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/k-slide-3.jpg)"></div>
            </div>
            <div class="container">
              <div class="main-bnr__content">
                <h1 class="main-bnr__title">Сувенирная продукция <span>Курского края</span></h1>
              </div>
            </div>
          </div>

          <section class="cat-products products"> 
            <div class="container">
            <h2 class="section-title"><span>Каталог продукции</span></h2>
            <div class="products-wrapper">
              
            <?
              $terms = get_terms( [
                  'taxonomy' => "asgproductcat",
                  'orderby'=> 'meta_value_num',
                  'meta_key'		=> '_term_index',
	                'order' => 'ASC',
	                'include' => [22, 42, 21, 58],

              ] );

              foreach( $terms as $term ){
                ?>
                    <div class="products-loop">
                      <a href="<?echo get_category_link($term->term_id)?>" class="products-loop__photo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_term_meta($term->term_id, 'term_photo'), 'full')[0];?>"></a>
                      <div class="cat-products__products-loop-content products-loop__content">
                        <div class="products-loop__title"><? echo $term->name ?></div>
                      </div>
                    </div>
                
                <?
              }
            ?>
              <!-- 
              <div class="products-loop">
                <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/catalog-products/01.jpg)"></a>
                <div class="cat-products__products-loop-content products-loop__content">
                  <div class="products-loop__title">Бижутерия</div>
                </div>
              </div>

              <div class="products-loop">
              <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/catalog-products/02.jpg)"></a>
                <div class="cat-products__products-loop-content products-loop__content">
                  <div class="products-loop__title">Для <br> интерьера</div>
                </div>
              </div>

              <div class="products-loop">
              <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/catalog-products/03.jpg)"></a>
                <div class="cat-products__products-loop-content products-loop__content">
                  <div class="products-loop__title">Изделия <br>из металла</div>
                </div>
              </div>

              <div class="products-loop">
              <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/catalog-products/04.jpg)"></a>
                <div class="cat-products__products-loop-content products-loop__content">
                  <div class="products-loop__title">Кухонные принадлежности</div>
                </div>
              </div>

              <div class="products-loop">
              <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/catalog-products/05.jpg)"></a>
                <div class="cat-products__products-loop-content products-loop__content">
                  <div class="products-loop__title">Матрёшки</div>
                </div>
              </div>

              <div class="products-loop">
              <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/catalog-products/06.jpg)"></a>
                <div class="cat-products__products-loop-content products-loop__content">
                  <div class="products-loop__title">Настенные <br>кашпо <br>(карманы)</div>
                </div>
              </div>

              <div class="products-loop">
              <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/catalog-products/07.jpg)"></a>
                <div class="cat-products__products-loop-content products-loop__content">
                  <div class="products-loop__title">Посуда</div>
                </div>
              </div>

              <div class="products-loop">
              <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/catalog-products/08.jpg)"></a>
                <div class="cat-products__products-loop-content products-loop__content">
                  <div class="products-loop__title">Наборы</div>
                </div>
              </div> -->

            </div>
            </div>
          </section>

          <?php get_template_part('template-parts/applic-section'); ?>

        </div>
      <!-- </div> -->

    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
