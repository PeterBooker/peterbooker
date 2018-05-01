<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package peterbooker
 */

get_header();
?>

<div class="archive-header">
	<div class="grid container">
		<div class="box small-12">
			<h1 class="archive-title">
			<?php printf( esc_html__( 'Search Results for: %s', 'pb' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h1>
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

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

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
