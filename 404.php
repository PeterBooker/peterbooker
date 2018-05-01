<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package peterbooker
 */

get_header();
?>

<div class="archive-header">
	<div class="grid container">
		<div class="box small-12">
			<h1 class="archive-title">Oops, nothing found.</h1>
			<h4 class="archive-subtitle">I could not find what you were looking for, sorry.</h4>
		</div>
	</div>
</div>

<div class="curve"></div>
	
<div class="content-area">
	<div class="grid container">

		<div id="primary" class="content box small-12 medium-8 large-9">
			<main id="main" class="site-main grid container">

				<section class="error-404 not-found">

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'pb' ); ?></p>

						<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'pb' ); ?></h2>
							<ul>
								<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
								?>
							</ul>
						</div><!-- .widget -->

						<?php
						/* translators: %1$s: smiley */
						$pb_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'pb' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$pb_archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
		
	</div><!-- .grid .container -->
</div><!-- .content-area -->

<?php
get_footer();
