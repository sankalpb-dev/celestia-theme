<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Celestia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if (is_singular()):
			the_title('<h1 class="entry-title">', '</h1>');
		else:
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()):
			?>
			<div class="entry-meta">
				<?php
				celestia_posted_on(); ?><br>
				<?php
				celestia_posted_by();
				?>
			</div><!-- .entry-meta -->
			<div class="post-excerpt">
				<?php
				if (has_excerpt()) {
					the_excerpt();
				}
				?>
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php celestia_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'celestia'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'celestia'),
				'after' => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<hr>
	<footer class="entry-footer">
		<?php celestia_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->