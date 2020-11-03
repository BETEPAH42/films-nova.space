<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package films-nova
 */

get_header();

?>

	<main id="primary" class="site-main">
<div class='singl-page'>
<div class="post_page">
<div class="post_images">
		<?php
		 
		while ( have_posts() ) :
			the_post();

		//get_template_part( 'template-parts/content', get_post_type() );
		
		films_nova_post_thumbnail();
		echo '</div>
		<div class="post_cont"><div>';the_title();echo ' смотреть онлайн бесплатно в HD</div>';
		
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Смотреть онлайн <span class="screen-reader-text"> "%s"</span>', 'films-nova' ),
					array(
						'span' => array(
							'class' => array(),

						),
					)
				),
				wp_kses_post( get_the_title())
			)
		);
		
		
		echo 'Год выпуска: '.get_field('year').'</br>';
		echo 'Страна: '.get_field('country').'</br>';
		echo 'Актеры: '.get_field('actors').'</br>';
		echo 'Режисер: '.get_field('director').'</br>';
		echo '</div></div>';
		?>
		<div class="tabs-pl">
    <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
    <label for="tab-btn-1">Смотреть онлайн</label>
<?php if(get_field('url2')): echo '<input type="radio" name="tab-btn" id="tab-btn-2" value="">
<label for="tab-btn-2">Плеер 2</label>'; endif;
 if(get_field('url3')): echo '<input type="radio" name="tab-btn" id="tab-btn-3" value="">
    <label for="tab-btn-3">Плеер 3</label>'; endif;
	?>
	  
	<div id="content-1">
      <iframe id="yohoho-iframe" frameborder="0" allowfullscreen="allowfullscreen" style="width: 1108px; height: 370px; border: 0px; margin: 0px; padding: 0px; overflow: hidden; position: relative; display: block;" width="1108" height="370" src="<?php echo the_field('url1'); ?>" class=""></iframe>
    </div>
<div id="content-2">
      <iframe id="yohoho-iframe" frameborder="0" allowfullscreen="allowfullscreen" style="width: 1108px; height: 370px; border: 0px; margin: 0px; padding: 0px; overflow: hidden; position: relative; display: block;" width="1108" height="370" src="<?php echo the_field('url2'); ?>" class=""></iframe>
    </div>
	
    <div id="content-3">
      <iframe id="yohoho-iframe" frameborder="0" allowfullscreen="allowfullscreen" style="width: 1108px; height: 370px; border: 0px; margin: 0px; padding: 0px; overflow: hidden; position: relative; display: block;" width="1108" height="370" src="<?php echo the_field("url3"); ?>" class=""></iframe>
    </div>
  </div></div>

<?php
		//	the_post_navigation(
		//		array(
		//			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'films-nova' ) . '</span> <span class="nav-title">%title</span>',
		//			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'films-nova' ) . '</span> <span class="nav-title">%title</span>',
		////		)
		
		//	);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<?php if(function_exists('hocwp_pagination')) hocwp_pagination(); ?>
<?php
get_sidebar();
get_footer();
