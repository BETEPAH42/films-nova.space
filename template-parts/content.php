<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package films-nova
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				//films_nova_posted_on();
				//films_nova_posted_by();
				
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
	</header><!-- .entry-header -->
<div class="wrap">
<div class="img_post">
	<?php films_nova_post_thumbnail();?>
</div>
<!-- .entry-content -->
</div>
	<footer class="entry-footer">
		<?php if ( is_singular() ) :
			the_title( '<h4 class="entry-title">', '</h1>' );
		else :
			the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


