<?php
/**
 * Template Name: Cuadricula
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GymAndClub
 */

get_header(); ?>

	


<div class="col-md-12 banner_cuadricula">
<?php dynamic_sidebar( 'img-cuadricula' ); ?>

<div class="cuadricula">


								<div class="cuadricula_grande">
								<?php   $consulta  = array(
											'post_type' => 'post',
											'post_status' => 'publish',
											'posts_per_page' => 1,
											'category_name' => 'provinciales',
				
											);  
											// The Query
			
											$cuadriculas = new WP_Query( $consulta );
											if ( $cuadriculas->have_posts() ) {
												
												
												while ( $cuadriculas->have_posts() ) {

											
													$cuadriculas->the_post();

													

													if (has_post_thumbnail( $post )) { ?>

														<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
													<?php the_post_thumbnail( 'cudricula_grande'); ?>
													</a>
													<div class="text_flotante">

													<?php the_title( sprintf( '<h1 class="entry-title titulo_cuadricula_g"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
																	<div class="metadatos">
																				<div class="fecha_cuadricula"><?php echo esc_html( get_the_date() ); ?></div>
																				<div class="categoria_cuadri"> 	<?php	the_category( ', ' );?> </div>
																		</div>
																				
													
																
													</div>
												 
													

													<?php	}
													else
													{ ?>
														<img src='<?php echo get_template_directory_uri(); ?>/img/img-cuadricula-grande.png'   />

													<?php }


																
												} // end ciclo cuadricula grande
												} // en if 
												wp_reset_postdata();

												?>
										</div>

										
					
														<div class="cuadricula_min">

																				<?php   $consulta_min  = array(
																	'post_type' => 'post',
																	'post_status' => 'publish',
																	'posts_per_page' => 3,
																	'category_name' => 'nacionales',
										
																	);  
																	// The Query
									
																	$cuadricula_min = new WP_Query( $consulta_min );
																	if ( $cuadricula_min->have_posts() ) {
																		
																		$flotante=1;
																		while ( $cuadricula_min->have_posts() ) {

																	
																			$cuadricula_min->the_post(); ?>

																		
																			<div class="flotante_min">
																				
																			<?php 	
																			if (has_post_thumbnail( $post )) { ?>

																				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
																			<?php the_post_thumbnail( 'cuadricula_min'); ?>
																			</a>

																			<?php	}
																			else
																			{ ?>
																				<img src='<?php echo get_template_directory_uri(); ?>/img/img-cuadricula-min.png'   />

																			<?php } ?>
																		
																			<div class="text_flotante text_flotante_<?php echo $flotante; ?>">
																			
																			<?php the_title( sprintf( '<h3 class="entry-title titulo_cuadricula_m"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
																	<div class="metadatos">
																				<div class="fecha_cuadricula"><?php echo esc_html( get_the_date() ); ?></div>
																				<div class="categoria_cuadri"> 	<?php	the_category( ', ' );?> </div>
																		</div> 
																		
																		
																		
																		</div>
																				
																			</div>

																						
																	<?php
																	$flotante= $flotante+1;	
																} // end ciclo cuadricula grande
																		} // en if 
																		wp_reset_postdata();

																		?>
																									
																	


															</div>

														
												


			




</div>

</div>
<div class="clear"></div>




<div id="primary" class="content-area col-sm-6 col-md-9">
		<main id="main" class="site-main">
			
		<h2 class="entry-title"> PROVINCIALES </h2>
			<div class="clear"></div>


			<div class="row">

			

			<?php   $argumentos = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 6,
				'category_name' => 'provinciales',
				'offset'  => 1,
				
			);  
			// The Query
			$noticias = new WP_Query( $argumentos );
			if ( $noticias->have_posts() ) {
				
				while ( $noticias->have_posts() ) {
			
					$noticias->the_post();

					?>
			
		<div class="col-md-6">
			<?php 
the_title( sprintf( '<h3 class="entry-title title_cuadricula"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
if (has_post_thumbnail( $post )) { ?>

	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail( 'blog-single'); ?>
   </a>

<?php	}
	echo "<div class='fecha_noti' >" . esc_html( get_the_date() ) . "</div>";	
	echo resumen(20);
	
			
			
			
			
			?>	




			

		</div> 
		<!-- fin row -->
			
			
			<?php
				
				} // fin ciclo ?>
			</div>  <!-- fin row --> <?php

			wp_reset_postdata();
				
			} // else no hay post?>



<!-- Nacionales  -->
<h2 class="entry-title"> Nacionales </h2>
			<div class="clear"></div>


			<div class="row">

			

			<?php   $nacionales = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 4,
				'category_name' => 'nacionales',
				'offset'  => 3,
				
			);  
			// The Query
			$noticias_n = new WP_Query( $nacionales );
			if ( $noticias->have_posts() ) {
				
				while ( $noticias_n->have_posts() ) {
			
					$noticias_n->the_post();

					?>
			
		<div class="col-md-6">
			<?php 

if (has_post_thumbnail( $post )) { ?>

	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail( 'blog-single'); ?>
   </a>

<?php	}
	echo "<div class='fecha_noti' >" . esc_html( get_the_date() ) . "</div>";	
	the_title( sprintf( '<h3 class="entry-title title_cuadricula"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
	echo resumen(20);
			
			
			
			
			?>	




			

		</div> 
		<!-- fin row -->
			
			
			<?php
				
				} // fin ciclo ?>
			</div>  <!-- fin row --> <?php

			wp_reset_postdata();
				
			} // else no hay post?>


			<!-- Internacionales -->

		<h2 class="entry-title"> Internacionales </h2>
			<div class="clear"></div>


			<div class="row">

			

			<?php   $nacionales = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 4,
				'category_name' => 'internacionales',
				
				
			);  
			// The Query
			$noticias_n = new WP_Query( $nacionales );
			if ( $noticias->have_posts() ) {
				
				while ( $noticias_n->have_posts() ) {
			
					$noticias_n->the_post();

					?>
			
		<div class="col-md-6">
			<?php 

if (has_post_thumbnail( $post )) { ?>

	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail( 'blog-single'); ?>
   </a>

<?php	}
	echo "<div class='fecha_noti' >" . esc_html( get_the_date() ) . "</div>";	
	the_title( sprintf( '<h3 class="entry-title title_cuadricula"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
	echo resumen(20);
			
			
			
			
			?>	




			

		</div> 
		<!-- fin row -->
			
			
			<?php
				
				} // fin ciclo ?>
			</div>  <!-- fin row --> <?php

			wp_reset_postdata();
				
			} // else no hay post?>






		

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="col-sm-6 col-md-3 mx-auto">
<?php get_sidebar(); ?>
</div>

<?php
get_footer();
