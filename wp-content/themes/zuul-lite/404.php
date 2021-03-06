<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package zuul-lite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
		<main id="main" class="site-main column-1">

			<section class="error-404 not-found">

				<div class="page-content">

					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'zuul-lite' ); ?></h1>
					</header><!-- .page-header -->

					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'zuul-lite' ); ?></p>

					<?php
						get_search_form();
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_footer();
