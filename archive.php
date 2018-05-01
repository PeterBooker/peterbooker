<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peterbooker
 */

get_header();
?>

<div class="archive-header">
	<div class="grid container">
		<div class="box small-12">
			<?php
			the_archive_title( '<h1 class="archive-title">', '</h1>' );
			the_archive_description( '<h4 class="archive-subtitle">', '</h4>' );
			?>
		</div>
	</div>
</div>

<div class="curve"></div>
	
<div class="content-area">
	<div class="grid container">

		<div id="primary" class="content box small-12 medium-8 large-9">
			<main id="main" class="site-main grid container">

			<?php if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				//the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
		
	</div><!-- .grid .container -->
</div><!-- .content-area -->

<?php
get_footer();
