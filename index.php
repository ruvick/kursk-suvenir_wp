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
            <div class="main-bnr-index__nuar_blk nuar_blk"></div>
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

            <form action="<?bloginfo("url")?>/asgproduct" class="cat-products-form">
              <div class="cat-products-form__line form__line">

                <div class="cat-products-form__column">
                  <div class="cat-products-form__sel">
                  <p class="cat-products-form__sel-name">Вид росписи</p>
                  <select name="vid_rosp[0]" class="form">
                    <option selected disabled>Выберите вид росписи</option>
                    <?
                      foreach ($vid_rosp as $el) {
                    ?>
                      <option value="<?echo $el;?>"><?echo $el;?></option>
                    <?
                      }
                    ?>
                  </select>
                  </div>
                  <div class="cat-products-form__sel">
                    <p class="cat-products-form__sel-name">Вид рисунка</p>
                  <select name="vid_ris[0]" class="form">
                    <option selected disabled>Выберите вид рисунка</option>
                    <?
                      foreach ($vid_ris as $el) {
                    ?>
                      <option value="<?echo $el;?>"><?echo $el;?></option>
                    <?
                      }
                    ?>
                  </select>
                  </div>
                </div>

                <div class="cat-products-form__column">
                  <div class="cat-products-form__price">
							      <div class="cat-products-form__price-input">
								      <label for="price_ot" class="form__label">Цена от</label>
								      <input id="price_ot" autocomplete="off" placeholder="200" type="text" name="price_ot" data-error="Ошибка" value="200"  data-value="200" class="input _digital">
							      </div>
							      <div class="cat-products-form__price-input">
								      <label for="price_do" class="form__label">Цена до</label>
								      <input id="price_do" autocomplete="off" placeholder="15 000" type="text" name="price_do" data-error="Ошибка" value="30000" data-value="30000" class="input _digital">
							      </div>
						      </div>
                </div>

                <button type="submit" class="cat-products-form__btn button button_red btn-hover">Найти</button>

              </div>
            </form>

            <div class="products-wrapper">
            <?
              $terms = get_terms( [
                  'taxonomy' => "asgproductcat",
                  'orderby'=> 'include',
                  // 'meta_key'		=> '_term_index',
	                // 'order' => 'ASC',
	                'include' => carbon_get_theme_option('cat_in_main'),

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
