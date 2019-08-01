<?php
/**
 *Template Name: Todas las Clases 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://codex.wordpress.org/Class_Reference/WP_Query#Post_.26_Page_Parameters
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-a-custom-page-template-for-one-specific-page
 * @package GymAndClub
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

                <div class="col-md-12">
                                    <div class="button-group filters-button-group">
                                    <button class="button is-checked" data-filter="*">Ver todos</button>

                                      <?php
                                    $terms = get_terms( 'categoria_clases' ) ;
                                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                                  
                                    foreach ( $terms as $term ) {

                                    
                                     
                                      echo '<button class="button" data-filter=".'.$term->slug.'">' . $term->name . '</button>';
                            
                                      }
                                
                                    }
                                     ?>
                                      </div>  <!-- fin grupo filtro -->
                 
                </div>

</div>




         
          

 


   <div class="row  grid">   

<?php
$argumentos = array(
	'post_type' => 'clases',
	'post_status' => 'publish',
	'posts_per_page' => -1,
); 
// The Query
$the_query = new WP_Query( $argumentos );

// The Loop
if ( $the_query->have_posts() ) {
	
	while ( $the_query->have_posts() ) {
    $the_query->the_post();
 //   $terms = get_terms( 'categoria_clases' ) ;
   $terminos = get_the_terms( $id ,'categoria_clases' ) ;


    ?>
  
  <div class="col-md-4 element-item 
  
  <?php
                                    
                                    if ( ! empty( $terminos ) && ! is_wp_error( $terminos ) ){                                  
                                    foreach ( $terminos as $term ) {

                                    
                                     
                                      echo $term->slug ." ";
                            
                                      }
                                
                                    }
                                     ?>"  data-category="transition">     
        
        
        
        
        
        <?php
						
						$img = get_field('imagen_n#1');
					$thumb = $img['sizes'][ 'large' ];
					$alt = $img['alt'];
					if( !empty($thumb) ):  ?>

						<img class="" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
						<?php else: ?>

					<?php echo "No hay imagen"; ?>

					<?php endif; ?>
                                    
        <?php //  the_title('<h3 class="las_clases">','</h3>'); 
        the_title( '<h3 class="las_clases"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
        
        ?>
       
	
	</div> <!-- fin col-md-4 -->



<?php	} // final del ciclo o loop
	
	
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	echo "No tengo datos";
}

?>


</div> <!-- fin row de clases -->


	   </article>






		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php
get_footer();
