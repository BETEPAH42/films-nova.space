<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package films-nova
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<center><h1 class="entry-title">', '</h1></center>' ); ?>
	</header><!-- .entry-header -->

	<?php //films_nova_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		/*wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'films-nova' ),
				'after'  => '</div>',
			)
		);
		*/
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
