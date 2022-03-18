<?php
/*
	Template Name: Страница корзины
	Template Post Type: page
*/

get_header();
?>

<section id="cardProduct" class="cardProduct cardProduct-bascet">
  <div class="container">
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); 
		}
	?>
<h1 class="single-section-title section-title"><span><?php echo the_title();?></span></h1>
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'bascet' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
	</div> 
</section>

<?php
get_footer();
