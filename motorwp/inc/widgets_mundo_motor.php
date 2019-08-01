<?php
/*--------------------------------------Agenda ----------------------------------------------------------- */
class agenda_widget extends WP_Widget {
    
    function agenda_widget() {
        $options = array('classname' => 'mi-estilo',
                         'description' => 'Agenda de la Semana');
        $this->WP_Widget('agenda_widget', 'Agenda de la Semana', $options);
    }


    function form($instance) {
        $defaults = array('titulo' => 'Esta Semana',
     'Titulo_Agenda_1'=> 'Carrera Rio Cuarto', 
      'Subtitulo_Agenda_1' => 'Cordoba Pista',
     'Descripcion_Agenda_1'=> 'Descripcion corta',
     'Titulo_Agenda_2'=> 'Otra titulo 2 ', 
      'Subtitulo_Agenda_2' => 'Otro subtitulo 2',
     'Descripcion_Agenda_2'=> 'Otra descripcion corta 2',
     'Titulo_Agenda_3'=> 'Otro titulo 3 ', 
      'Subtitulo_Agenda_3' => 'Otro subtitulo 3',
     'Descripcion_Agenda_3'=> 'Otra descripcion corta 3',
     'Titulo_Agenda_4'=> 'Titulo 4 ', 
      'Subtitulo_Agenda_4' => 'Subtitulo 4',
     'Descripcion_Agenda_4'=> 'Descripcion 4',
     'Titulo_Agenda_5'=> 'Titulo 5 ', 
      'Subtitulo_Agenda_5' => 'Subtitulo 5',
     'Descripcion_Agenda_5'=> 'Descripcion 5',
     'Enlace_mas_agenda'=> 'Enlace a mas agenda' );

     $instance = wp_parse_args((array)$instance, $defaults);
    
     // Tomamos los valores
    $titulo = $instance['titulo'];
    $Titulo_Agenda_1 = $instance['Titulo_Agenda_1'];
    $Subtitulo_Agenda_1 = $instance['Subtitulo_Agenda_1'];
    $Descripcion_Agenda_1 = $instance['Descripcion_Agenda_1'];
    // dos
    $Titulo_Agenda_2 = $instance['Titulo_Agenda_2'];
    $Subtitulo_Agenda_2 = $instance['Subtitulo_Agenda_2'];
    $Descripcion_Agenda_2 = $instance['Descripcion_Agenda_2'];
    // 3
    $Titulo_Agenda_3 = $instance['Titulo_Agenda_3'];
    $Subtitulo_Agenda_3 = $instance['Subtitulo_Agenda_3'];
    $Descripcion_Agenda_3 = $instance['Descripcion_Agenda_3'];

    // 4
    $Titulo_Agenda_4 = $instance['Titulo_Agenda_4'];
    $Subtitulo_Agenda_4 = $instance['Subtitulo_Agenda_4'];
    $Descripcion_Agenda_4 = $instance['Descripcion_Agenda_4'];

    // 5
    $Titulo_Agenda_5 = $instance['Titulo_Agenda_5'];
    $Subtitulo_Agenda_5 = $instance['Subtitulo_Agenda_5'];
    $Descripcion_Agenda_5 = $instance['Descripcion_Agenda_5'];

    // Enlace mas agenda
    $Enlace_mas_agenda = $instance['Enlace_mas_agenda'];

     // Mostramos el formulario
     ?>
     <p>
         <?php _e('Titulo:Agenda de la Semana', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('titulo');?>"
                value="<?php echo esc_attr($titulo);?>"/>
     </p>
 
     <p>
        <?php _e('Titulo primer agenda', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Titulo_Agenda_1');?>"
                value="<?php echo esc_attr($Titulo_Agenda_1);?>"/>
     </p>

     <p>
        <?php _e('Subtitulo primer agenda', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Subtitulo_Agenda_1');?>"
                value="<?php echo esc_attr($Subtitulo_Agenda_1);?>"/>
     </p>
     <p>
        <?php _e('Descripcion corta Agenda 1', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Descripcion_Agenda_1');?>"
                value="<?php echo esc_attr($Descripcion_Agenda_1);?>"/>
     </p>
    <?php  // agenda 2 ?>
    <p>
        <?php _e('Titulo segunda agenda', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Titulo_Agenda_2');?>"
                value="<?php echo esc_attr($Titulo_Agenda_2);?>"/>
     </p>

     <p>
        <?php _e('Subtitulo segunda agenda', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Subtitulo_Agenda_2');?>"
                value="<?php echo esc_attr($Subtitulo_Agenda_2);?>"/>
     </p>
     <p>
        <?php _e('Descripcion corta Agenda 2', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Descripcion_Agenda_2');?>"
                value="<?php echo esc_attr($Descripcion_Agenda_2);?>"/>
     </p>

          <?php  // agenda 3 ?>
          <p>
        <?php _e('Titulo agenda tres', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Titulo_Agenda_3');?>"
                value="<?php echo esc_attr($Titulo_Agenda_3);?>"/>
     </p>

     <p>
        <?php _e('Subtitulo tercera agenda', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Subtitulo_Agenda_3');?>"
                value="<?php echo esc_attr($Subtitulo_Agenda_3);?>"/>
     </p>
     <p>
        <?php _e('Descripcion corta Agenda 3', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Descripcion_Agenda_3');?>"
                value="<?php echo esc_attr($Descripcion_Agenda_3);?>"/>
     </p>

      <?php  // agenda 4 ?>
          <p>
        <?php _e('Titulo agenda cuatro', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Titulo_Agenda_4');?>"
                value="<?php echo esc_attr($Titulo_Agenda_4);?>"/>
     </p>

     <p>
        <?php _e('Subtitulo 4', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Subtitulo_Agenda_4');?>"
                value="<?php echo esc_attr($Subtitulo_Agenda_4);?>"/>
     </p>
     <p>
        <?php _e('Descripcion corta Agenda 4', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Descripcion_Agenda_4');?>"
                value="<?php echo esc_attr($Descripcion_Agenda_4);?>"/>
     </p>

      <?php  // agenda 5 ?>
          <p>
        <?php _e('Titulo agenda 5', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Titulo_Agenda_5');?>"
                value="<?php echo esc_attr($Titulo_Agenda_5);?>"/>
     </p>

     <p>
        <?php _e('Subtitulo 5', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Subtitulo_Agenda_5');?>"
                value="<?php echo esc_attr($Subtitulo_Agenda_5);?>"/>
     </p>
     <p>
        <?php _e('Descripcion corta Agenda 5', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Descripcion_Agenda_5');?>"
                value="<?php echo esc_attr($Descripcion_Agenda_5);?>"/>
     </p>
     <?php // enlace mas agenda  ?>

     <p>
         <?php _e('Enlace a mas Agenda', 'stark'); ?>
         <input class="widefat" type="text" name="<?php echo $this->get_field_name('Enlace_mas_agenda');?>"
                value="<?php echo esc_attr($Enlace_mas_agenda);?>"/>
     </p>


     <?php


    }

    function update($new_instance, $old_instance) {

        $instance = $old_instance;

        // Con sanitize_text_field elimiamos HTML de los campos
        $instance['titulo'] = sanitize_text_field($new_instance['titulo']);
        $instance['Titulo_Agenda_1'] = sanitize_text_field($new_instance['Titulo_Agenda_1']);
        $instance['Subtitulo_Agenda_1'] = sanitize_text_field($new_instance['Subtitulo_Agenda_1']);
        $instance['Descripcion_Agenda_1'] = sanitize_text_field($new_instance['Descripcion_Agenda_1']);
        // dos
        $instance['Titulo_Agenda_2'] = sanitize_text_field($new_instance['Titulo_Agenda_2']);
        $instance['Subtitulo_Agenda_2'] = sanitize_text_field($new_instance['Subtitulo_Agenda_2']);
        $instance['Descripcion_Agenda_2'] = sanitize_text_field($new_instance['Descripcion_Agenda_2']);
         // tres
         $instance['Titulo_Agenda_3'] = sanitize_text_field($new_instance['Titulo_Agenda_3']);
         $instance['Subtitulo_Agenda_3'] = sanitize_text_field($new_instance['Subtitulo_Agenda_3']);
         $instance['Descripcion_Agenda_3'] = sanitize_text_field($new_instance['Descripcion_Agenda_3']);
        // cuatro
        $instance['Titulo_Agenda_4'] = sanitize_text_field($new_instance['Titulo_Agenda_4']);
        $instance['Subtitulo_Agenda_4'] = sanitize_text_field($new_instance['Subtitulo_Agenda_4']);
        $instance['Descripcion_Agenda_4'] = sanitize_text_field($new_instance['Descripcion_Agenda_4']);
        // cinco
        $instance['Titulo_Agenda_5'] = sanitize_text_field($new_instance['Titulo_Agenda_5']);
        $instance['Subtitulo_Agenda_5'] = sanitize_text_field($new_instance['Subtitulo_Agenda_5']);
        $instance['Descripcion_Agenda_5'] = sanitize_text_field($new_instance['Descripcion_Agenda_5']);
        //enlace mas agenda
        $instance['Enlace_mas_agenda'] = sanitize_text_field($new_instance['Enlace_mas_agenda']);
         



        return $instance;

    }

    function widget($args, $instance) {
        // Extraemos los argumentos del area de widgets
        extract($args);        

         $titulo = apply_filters('widget_title', $instance['titulo']);
         $Titulo_Agenda_1= $instance['Titulo_Agenda_1'];
         $Subtitulo_Agenda_1 = $instance['Subtitulo_Agenda_1'];
         $Descripcion_Agenda_1 = $instance['Descripcion_Agenda_1'];
         //dos
         $Titulo_Agenda_2= $instance['Titulo_Agenda_2'];
         $Subtitulo_Agenda_2 = $instance['Subtitulo_Agenda_2'];
         $Descripcion_Agenda_2 = $instance['Descripcion_Agenda_2'];
         // tres
         $Titulo_Agenda_3= $instance['Titulo_Agenda_3'];
         $Subtitulo_Agenda_3 = $instance['Subtitulo_Agenda_3'];
         $Descripcion_Agenda_3 = $instance['Descripcion_Agenda_3'];
         // cuatro
         $Titulo_Agenda_4= $instance['Titulo_Agenda_4'];
         $Subtitulo_Agenda_4 = $instance['Subtitulo_Agenda_4'];
         $Descripcion_Agenda_4 = $instance['Descripcion_Agenda_4'];
         // cinco
         $Titulo_Agenda_5= $instance['Titulo_Agenda_5'];
         $Subtitulo_Agenda_5 = $instance['Subtitulo_Agenda_5'];
         $Descripcion_Agenda_5 = $instance['Descripcion_Agenda_5'];
          // enlace_mas_agenda
          $Enlace_mas_agenda= $instance['Enlace_mas_agenda'];

       

         echo '<div class="agenda">';
         echo '<div id="titulo_agenda"><h2>'. $titulo .'</h2></div>';
         echo '<div class="subtitulo_agenda_item"><h4>'. $Subtitulo_Agenda_1.'</h4></div>';
         echo '<div class="titulo_agenda_item"><h3>'. $Titulo_Agenda_1.'</h3></div>';
         echo '<div class="Descripcion_Agenda_item"><p>'. $Descripcion_Agenda_1.'</p></div>';
         echo '<div class="separador"></div>';
         echo '<div class="subtitulo_agenda_item"><h4>'. $Subtitulo_Agenda_2.'</h4></div>';
         echo '<div class="titulo_agenda_item"><h3>'. $Titulo_Agenda_2.'</h3></div>';
         echo '<div class="Descripcion_Agenda_item"><p>'. $Descripcion_Agenda_2.'</p></div>';
         echo '<div class="separador"></div>';
         if (!empty($Titulo_Agenda_3)) {
         echo '<div class="subtitulo_agenda_item"><h4>'. $Subtitulo_Agenda_3.'</h4></div>';
         echo '<div class="titulo_agenda_item"><h3>'. $Titulo_Agenda_3.'</h3></div>';
         echo '<div class="Descripcion_Agenda_item"><p>'. $Descripcion_Agenda_3.'</p></div>';
         echo '<div class="separador"></div>';
         }
         // 4
         if (!empty($Titulo_Agenda_4)) {
         echo '<div class="subtitulo_agenda_item"><h4>'. $Subtitulo_Agenda_4.'</h4></div>';
         echo '<div class="titulo_agenda_item"><h3>'. $Titulo_Agenda_4.'</h3></div>';
         echo '<div class="Descripcion_Agenda_item"><p>'. $Descripcion_Agenda_4.'</p></div>';
         echo '<div class="separador"></div>';
         }
         // 5
         if (!empty($Titulo_Agenda_5)) {
         echo '<div class="subtitulo_agenda_item"><h4>'. $Subtitulo_Agenda_5.'</h4></div>';
         echo '<div class="titulo_agenda_item"><h3>'. $Titulo_Agenda_5.'</h3></div>';
         echo '<div class="Descripcion_Agenda_item"><p>'. $Descripcion_Agenda_5.'</p></div>';
         echo '<div class="separador"></div>';
         }
         // enlace mas agenda
         if (!empty($Enlace_mas_agenda)) {
            echo '<a href="'. $Enlace_mas_agenda.'" class="link_mas_agenda" target="_blank">Agenda Completa </a>';
         }
         
         
         

         echo '</div>'; // fin agenda

    }

}
register_widget('agenda_widget');  

?>
