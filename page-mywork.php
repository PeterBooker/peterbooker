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
 * @package peterbooker
 */

get_header();
?>

<div class="content-area">
	<div class="grid">

		<div id="primary" class="content box small-12">
			<main id="main" class="site-main">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="post-title grid">
					<div class="box small-12">

					<header class="entry-header<?php echo ( has_post_thumbnail() ? ' has-thumbnail' : '') ?>">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					</div><!-- .box -->
				</div><!-- .post-title -->

				<div class="curve"></div>

				<div class="post-content grid container">
					<div class="box small-12">

						<div class="entry-content grid container">
							<div class="box small-12">
								<div class="intro">
									<?php
									while ( have_posts() ) :
										the_post();
										the_content();
									endwhile;
									?>
								</div>
							</div>
							<div class="box small-12">
								<div class="mywork grid margin-x margin-y">

									<div class="small-12 medium-6">
										<div class="work">
											<h2 class="work-title">WPDirectory <span class="label secondary">Beta</span></h2>
											<div class="tech">Go, React, Trigram Index, Regex Automata</div>
											<p>WPDirectory is a web tool which allows lightning fast regex searches of the entire WordPress Plugin and Theme Directories. Reducing delays in decision-making across WordPress Core teams and encourages uses, from security research to development, which were not feasible before.</p>
											<a class="button" href="https://wpdirectory.net/" target="_blank">View</a>
											<a class="button" href="https://github.com/wpdirectory/wpdir" target="_blank">Source</a>
										</div>
									</div>

									<div class="small-12 medium-6">
										<div class="work">
											<h2 class="work-title">WPDS</h2>
											<div class="tech">Go, CLI</div>
											<p>WordPress Directory Slurper (WPDS) is a CLI tool which allows you to maintain local copies of the WP Plugin/Theme Directories. A single executable with no dependencies makes it accessible, and highly concurrent downloads make it fast.</p>
											<a class="button" href="https://github.com/PeterBooker/wpds" target="_blank">Source</a>
											<a class="button" href="https://github.com/PeterBooker/wpds/releases" target="_blank">Download</a>
										</div>
									</div>

									<div class="small-12 medium-6">
										<div class="work">
											<h2 class="work-title">mtStats <span class="label secondary">Early Prototype</span></h2>
											<div class="tech">React, Go</div>
											<p>mtStats is a fantasy betting and encylopedia website for MMA (Mixed Martial Arts). It seeks to encourage positive engagement in the MMA community.</p>
											<a class="button" href="https://github.com/mtstats/mtstats" target="_blank">Source</a>
										</div>
									</div>

								</div>
							</div>
						</div><!-- .entry-content -->

					</div><!-- .box -->
				</div><!-- .post-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .grid -->
</div><!-- .content-area -->

<?php
get_footer();