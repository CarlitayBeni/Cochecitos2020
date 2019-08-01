<?php
/**
 *Template Name: Todas los Entrenadores 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
*
 * @package GymAndClub
 * @ https://www.w3schools.com/howto/howto_css_image_overlay_slide.asp
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main">
	

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="row">   

                            <div class="col-md-12">
                            <?php the_title( '<h1 class="entry-title">','</h1>' ) ?>

                            </div>
          </div> <!-- Fin row -->

          <div class="row">
    <?php      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;   ?>

        <?php   $argumentos = array(
	'post_type' => 'entrenador',
	'post_status' => 'publish',
	'posts_per_page' => 2,
	'paged' => $paged,
);  
// The Query
$entrenadores = new WP_Query( $argumentos );
if ( $entrenadores->have_posts() ) {
	
	while ( $entrenadores->have_posts() ) {
    $entrenadores->the_post();


        ?>
             
           

 
 


             
             <div class="col-md-4 los_entrenadores">
                        <div class="contenedor_img">

                                                <?php   if (has_post_thumbnail( $post )) {

                                                the_post_thumbnail( 'entrenador-single', ['class' => 'image'] );

                                                } ?>

                                                    <div class="overlay">
                                                                <div class="text">
                                                                <?php  if ( get_field('enlace_social_n1')) { ?>	
                                                                <a href="<?php the_field('enlace_social_n1'); ?>" 
                                                                target="_blank">	
                                                                <i class="fab fa-facebook-square fa-2x"></i> </a>
                                                                <?php } ?>

                                                                <?php  if ( get_field('enlace_social_n2_')) { ?>	
                                                                <a href="<?php the_field('enlace_social_n2_'); ?>" blank:>
                                                                    <i class="fab fa-twitter-square fa-2x"></i>  </a>
                                                                <?php } ?>	

                                                                 <?php  if ( get_field('enlace_social_n3_')) { ?>	
                                                                <a href="<?php the_field('enlace_social_n3_'); ?>" blank:>
                                                                 <i class="fab fa-pinterest-square fa-2x"></i>  </a>
                                                                <?php } ?>



                                                                </div>
                                                    </div>


                                            


                        </div> <!-- #fin-contenedor img-->

                        <h3> <a href="<?php the_permalink( $post ); ?>">
                        <?php the_field('nombre_y_apellido_'); ?> </a> </h3>
                        <p> <?php
                        $terminos = get_the_terms( $id ,'especialidad' ) ;
                        if ( ! empty(  $terminos ) && ! is_wp_error(  $terminos ) ){
						
                            foreach (  $terminos as $term ) {
                                echo  $term->name . '. ';
                            }
                           
                        }
                        
                        ?></p>

              </div> <!-- #fin-col-md-  -->
              
              
              <?php 
    } // end while
    $total_pages = $entrenadores->max_num_pages;
// https://stackoverflow.com/questions/41738362/how-to-include-pagination-in-a-wordpress-custom-post-type-query

    if ($total_pages > 1){ ?>

  <div class="paginador_trainer">
    <?php    $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« Anterior'),
            'next_text'    => __('Siguiente »'),
        ));
?>
 </div>
 <?php   }





wp_reset_postdata();
} 
else {
	echo "No tengo datos";
} // en if
 
              
              
              ?>




          </div>



        




	   </article>






		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php
get_footer();
