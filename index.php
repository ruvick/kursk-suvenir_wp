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
      <div class="main-content__wrapper container">
        <?php get_template_part('template-parts/sidebar-catalog');?>
        <div class="main-content">
          <div class="main-bnr" >
            <div class="main-bnr__slider">
              <div class="main-bnr__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/k-slide-1.jpg)"></div>
              <div class="main-bnr__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/k-slide-2.jpg)"></div>
              <div class="main-bnr__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/k-slide-3.jpg)"></div>
            </div>
            <div class="main-bnr__content">
              <h1 class="main-bnr__title">Сувенирная продукция <span>Курской области</span></h1>
            </div>
          </div>
          <section class="products">
            <h2 class="section-title"><span>Популярные товары</span></h2>
            <?php 
              $args = array(
                'posts_per_page' => 4,
                'post_type' => 'asgproduct',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'asgproductcat',
                    'field' => 'id',
                    'terms' => array(2)
                  )
                )
              );
              $query = new WP_Query($args);
              if($query->have_posts()):
            ?>
            <div class="products-wrapper">
              <?php while($query->have_posts()):
                  $query->the_post();
                  get_template_part('template-parts/products-loop');
                endwhile;?>
            </div>
          <?php endif;?>
          </section>
<!--           <section class="products">
            <h2 class="section-title"><span>Матрешки</span></h2>
            <div class="products-wrapper">
              <div class="products-loop">
                <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/product.png)"></a>
                <div class="products-loop__content">
                  <div class="products-loop__title">Матрешка традиционная 6-и кукольная</div>
                  <div class="products-loop__btn">
                    <a href="#" class="products-loop__cart"></a>
                    <div class="products-loop__price">1607 ₽</div>
                  </div>
                </div>
              </div>
              <div class="products-loop">
                <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/product.png)"></a>
                <div class="products-loop__content">
                  <div class="products-loop__title">Матрешка традиционная 6-и кукольная</div>
                  <div class="products-loop__btn">
                    <a href="#" class="products-loop__cart"></a>
                    <div class="products-loop__price">1607 ₽</div>
                  </div>
                </div>
              </div>
              <div class="products-loop">
                <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/product.png)"></a>
                <div class="products-loop__content">
                  <div class="products-loop__title">Матрешка традиционная 6-и кукольная</div>
                  <div class="products-loop__btn">
                    <a href="#" class="products-loop__cart"></a>
                    <div class="products-loop__price">1607 ₽</div>
                  </div>
                </div>
              </div>
              <div class="products-loop">
                <a href="#" class="products-loop__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/product.png)"></a>
                <div class="products-loop__content">
                  <div class="products-loop__title">Матрешка традиционная 6-и кукольная</div>
                  <div class="products-loop__btn">
                    <a href="#" class="products-loop__cart"></a>
                    <div class="products-loop__price">1607 ₽</div>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
        </div>
      </div>

    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
