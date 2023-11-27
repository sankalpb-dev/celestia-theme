<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Celestia
 */

get_header();
?>
<div class="main-body">
	<main id="primary" class="site-main">

		<?php
		while (have_posts()):
			the_post();

			get_template_part('template-parts/content', get_post_type());

			the_post_navigation(
				array(
					'prev_text' => '<b><span class="nav-subtitle">' . esc_html__('Previous Post:', 'celestia') . '</span></b><br> <span class="nav-title">%title</span>',
					'next_text' => '<b><span class="nav-subtitle">' . esc_html__('Next Post:', 'celestia') . '</span></b><br> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()):
				comments_template();
			endif;

		endwhile; // End of the loop.
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
