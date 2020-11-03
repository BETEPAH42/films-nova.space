<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package films-nova
 */

get_header();

	the_archive_title( '<h2 class="page-title">', '</h2>' );
	the_archive_description( '<div class="archive-description">', '</div>' );?>
	<header class="page-header">
				
			</header><!-- .page-header -->
			<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>
<?php
				
				?>
			

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
<?php if(function_exists('hocwp_pagination')) hocwp_pagination(); ?>
<?php
get_sidebar();
get_footer();
