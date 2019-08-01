<?php
/**
 * Personalizando los campos del formulario.
 * Mueva el comment_field debajo de los campos de autor, correo electrónico y url.
 * https://code.tutsplus.com/es/articles/wordpress-actions-and-filters-whats-the-difference--cms-25700
 * 
 */
function Comentario_Personalizado_comment_form_defaults( $fields ) {
	$html_req=null;
	 $html5=null;
    $commenter     = wp_get_current_commenter();  //https://codex.wordpress.org/Function_Reference/wp_get_current_commenter retorna un array
    $user          = wp_get_current_user(); // https://codex.wordpress.org/Function_Reference/wp_get_current_user retorna un obeto wp_user
    $user_identity = $user->exists() ? $user->display_name : '';
    $req           = get_option( 'require_name_email' );
    $aria_req      = ( $req ? " aria-required='true'" : '' );

	$fields = [
		'author' => '<div class="row"><div class="col-md-6 comment-form-author">' .
					'<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
					 '" size="30" maxlength="245"' . $aria_req . $html_req . ' placeholder="'. __( 'Nombre *', 'gymclub'  ) .'" /></div>',

		'email'  => '<div class="col-md-6 comment-form-email">' . 
					'<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . 
					esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' .
					 $aria_req . $html_req  . ' placeholder="'. __( 'Tu correo *', 'gymclub'  ) .'"/></div></div>',

        'url'    => '<div class="row"><div class="col-md-12 comment-form-url">' .
					'<input class="form-control"  placeholder="'. __( 'Tu sitio*', 'gymclub'  ) .'"    id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' .
					 esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></div></div>',

		'comment_field' => '<div class="row"><div class="col-md-12 comment-form-comment">
		 <textarea placeholder="'. __( 'Su comentario', 'gymclub'  ) .'" id="comment" name="comment" 
		 cols="45" rows="8" maxlength="65525" aria-required="true" required="required">
		 </textarea></div></div>',
    ];

    return $fields;
}
  add_filter( 'comment_form_default_fields', 'Comentario_Personalizado_comment_form_defaults' );

/**
 * Elimine el campo de comentario original porque lo hemos agregado a los campos predeterminados
 * Utilizando la funcion Comentario_Personalizado_comment_form_defaults(). 
 * Si no hacemos esto, el campo de comentario aparecerá dos veces.
 * 
 */



function eliminar_comment_form_defaults( $defaults ) {
	global $current_user;

    if ( isset( $defaults[ 'comment_field' ] )  )  {

		
		
		// usuarios con capacidad para actualizar el sistema es decir, administradores
		// https://codex.wordpress.org/Function_Reference/current_user_can
					if (current_user_can('update_core'))
					{			
						$defaults = $defaults;	
					}
					else
					{
						$defaults[ 'comment_field' ] = '';	
						
					}
		
       
    }

    return $defaults;
}

add_filter( 'comment_form_defaults', 'eliminar_comment_form_defaults', 10, 1 );	

?>