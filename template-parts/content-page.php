<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peterbooker
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-title grid">
		<div class="box small-12">

		<header class="entry-header<?php echo ( has_post_thumbnail() ? ' has-thumbnail' : '') ?>">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		</div>
	</div>

	<div class="curve"></div>

	<div class="post-content grid container">
		<div class="box small-12">

			<?php pb_post_thumbnail(); ?>

			<div class="entry-content grid container">
				<div class="box small-12">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pb' ),
					'after'  => '</div>',
				) );
				?>
				</div>
			</div><!-- .entry-content -->

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer grid container">
					<div class="box small-12">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'pb' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
					</div>
				</footer><!-- .entry-footer -->
			<?php endif; ?>

		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
