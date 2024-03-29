<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package motorwp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<?php gymclub_post_thumbnail(); ?>

    <header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				gymclub_posted_on();
				gymclub_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->



	<div class="entry-content">
		<?php		
		
		if (! is_singular()):
			the_excerpt();
			echo '<a class="float-right btn-leer-mas btn btn-primary" href="'. get_permalink($post->ID) . '">'. __('Read More', 'motorwp') .'</a>';
		else:
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'motorwp' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
			endif;



			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'motorwp' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php gymclub_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article>  <!-- #post-<?php //the_ID(); // ?> -->
