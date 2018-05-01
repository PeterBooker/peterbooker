<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package peterbooker
 */

get_header();
?>
<div class="content-area">
	<div class="grid">

		<div id="primary" class="content box small-12">
			<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				//the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) : ?>
					<div class="grid container">
						<div class="box small-12">
						<?php comments_template(); ?>
						</div>
					</div>
				<?php endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .grid -->
</div><!-- .content-area -->

<?php
get_footer();
