<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Celestia
 */

get_header();
?>
<div class="main-body">
	<main id="primary" class="site-main">

		<?php if (have_posts()): ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf(esc_html__('Search Results for: %s', 'celestia'), '<span>' . get_search_query() . '</span>');
					?>
				</h1>
			</header><!-- .page-header -->

			<div class="archive-div">
				<?php
				/* Start the Loop */
				while (have_posts()):
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part('template-parts/content-search', get_post_type());

				endwhile; ?>
			</div>
			<?php

			the_posts_pagination();

		else:

			get_template_part('template-parts/content', 'none');

		endif;
		?>

	</main><!-- #main -->
	<?php if (is_active_sidebar('sidebar-1')) { ?>
		<aside class="sidebar">
			<?php get_sidebar(); ?>
		</aside>
	<?php } ?>
</div>
<?php
get_footer();
