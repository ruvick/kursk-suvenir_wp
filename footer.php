<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package souvenir
 */

?>

</div><!-- #content -->

<footer class="footer">
  <div class="container">
    <div class="footer-block">
      <div class="logo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo_white'), 'full')[0];?>)"></div>
    </div>
    <div class="footer-block">
      <div class="footer-title">О компании</div>
      <?php main_menu_2();?>
      <div class="footer-soc__block">
        <div class="">Мы в соцсетях</div>
        <ul class="ul-clean footer-soc">
          <li><a href="<?php echo carbon_get_theme_option('as_insta');?>" style="background-image: url(<?php echo get_template_directory_uri();?>/img/instagram.svg)"></a></li>
          <li><a href="<?php echo carbon_get_theme_option('as_ok');?>" style="background-image: url(<?php echo get_template_directory_uri();?>/img/odnoklassniki.svg)"></a></li>
          <li><a href="<?php echo carbon_get_theme_option('as_vk');?>" style="background-image: url(<?php echo get_template_directory_uri();?>/img/vk.svg)"></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-block">
      <div class="footer-title">Сервис и поддержка</div>
      <?php main_menu_3();?>
    </div>
    <div class="footer-block footer-contacts">
      <div class="footer-title">УНПЦ "Художественные мастерские" ЮЗГУ</div>
      <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_2'))?>"><?php echo carbon_get_theme_option('as_phone_2');?></a>
      <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_3'))?>"><?php echo carbon_get_theme_option('as_phone_3');?></a>
      <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_4'))?>"><?php echo carbon_get_theme_option('as_phone_4');?></a>
      <a href="#" class="header-callback popup-content" data-formid="Заказ звонка в подвале сайта" data-mailmsg="Заказ звонка в подвале сайта">Заказать звонок</a>
    </div>
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
