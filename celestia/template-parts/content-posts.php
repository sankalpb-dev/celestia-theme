<?php
/**
 * Template part for displaying posts in index.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Celestia
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php celestia_post_thumbnail(); ?>
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php echo the_permalink() ?>">
				<?php the_title() ?>
			</a></h2>
	</header><!-- .entry-header -->
	<div class="entry-meta">
		<?php
		celestia_posted_on(); ?><br>
		<?php
		celestia_posted_by();
		?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->