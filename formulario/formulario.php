<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/slide1.jpg'; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/slide2.jpg'; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/slide3.jpg'; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/slide2.jpg'; ?>" class="d-block w-100" alt="...">
    </div>    
  </div>
</div>

    <input id="font-url-input" type="hidden" readonly="yes" value="<?php echo plugin_dir_url( __FILE__ ). '../css/Fonts/signatura_monoline_script/signatura_monoline-webfont.woff'; ?>" />
  
    <div id="medida"> </div>
    <div id="result"> </div>
    
      <div id="response">
        
        <h1>
          <small class="text-muted"> <strong> 0<?php echo esc_html($cn_precio_base);?>&euro;<strong></small>
            <!--<input type="text" class="form-control" id="precio_final_rotulo" name="precio_final_rotulo" value="0.00" readonly="yes">-->
        </h1>
        
          <div style="font-size: 10px; color: #870D00"> IVA incluido</div>
        
        <div style="font-size: 10px;"> ENVÍO GRATUITO</div>

        <h3 style="font-size: 24px;font-family: 'Open Sans', sans-serif;">Letras de Neón Personalizadas</h3>
        <p style="text-align: justify;">
          Neones personalizados, puedes seguirnos en nuestro perfil de Instagram para ver los trabajos realizados @RotulosMetalarte
          Tres medidas a escoger, Puedes pedirnos un presupuesto personalizado si quieres  en caso de querer un Neón personalizado o con alguna medida diferente
        </p>

        <div id="caja">
          <div class="neon_effect signatura_monoline_scriptRg amarillo">
            Rótulos Metalarte
          </div>
       </div>

      </div>
      <br/>
      <div class="col-12 text-center">

          <div class="fabify-button" style="cursor: pointer;">
            <!--<a href="https://www.rotulosmetalarte.es/myaccount/" target="_blank">
              <i class="fa fa-user" aria-hidden="true"></i> Mi usuario
            </a>-->

            <a id="myButton" style="color: #ffffff">
              <i class="fas fa-magic"></i> Aplicar cambios
            </a>            
          </div>

        <!--<a id="myButton" style="color: #fff; background-color: #870D00" onclick="" class="btn" role="button">
          <i class="fas fa-magic"></i> Aplicar cambios
        </a>
      -->

        <div id="myDIV">
          <i class="fas fa-hourglass-start"></i> Creando el nuevo diseño...
        </div>        

      </div>
      <input type="hidden" class="form-control" id="costoTransformador" value="<?php echo esc_html($costoTransformador);?>" readonly="yes">
      <input type="hidden" class="form-control" id="iva" value="<?php echo esc_html($iva);?>" readonly="yes"> 

 <div class="card" style="">

        <div class="card-header">
          <center> <i class="fas fa-cogs"></i> Personaliza tu rótulo</center>
        </div>

        <div class="card-body" style="background-color: #D3D3D3">

          <?php

            require 'opciones.php';

            require 'formaContorno.php';
                      
           /* 
            require 'traseraNeon.php';

            require 'sujecionNeon.php';

            require 'dimmer.php';
          
            require 'colores.php';

          */
          ?>
        </div>
      
      </div>
    
    <br/>
