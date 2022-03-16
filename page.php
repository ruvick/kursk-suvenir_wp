<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package souvenir
 */

get_header(); ?>

<section id="cardProduct" class="cardProduct">
  <div class="container">
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); 
		}
	?>
<h1 class="single-section-title section-title"><span><?php echo the_title();?></span></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 
	</div> 
</section>

<?php get_template_part('template-parts/applic-section'); ?>
		
<?php get_footer();