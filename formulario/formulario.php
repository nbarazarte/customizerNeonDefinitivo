<!--<form id="customizerNeon">-->
  <div class="card border-light mb-3">
    <div class="card-header">

      <span style="font-size: 28px; color: #870D00;">
        <i class="fas fa-spray-can"></i>
      </span>

      Letras de neon personalizadas
    </div>
    <div class="card-body">

    <canvas id="myCanvas"  style="border:1px solid #d3d3d3; width: 300; height: 300">
    Your browser does not support the canvas element.
    </canvas>

    <input id="font-url-input" type="hidden" readonly="yes" value="http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/css/Fonts/signatura_monoline_script/signatura_monoline-webfont.woff" />
    <div id="medida"> </div>
    <div id="result"> </div>
    
      <div id="response">
        
        <h1>
          <small class="text-muted"> <strong> <?php echo esc_html($cn_precio_base);?>&euro;<strong></small>
            <!--<input type="text" class="form-control" id="precio_final_rotulo" name="precio_final_rotulo" value="0.00" readonly="yes">-->
        </h1>
        <div style="font-size: 10px; color: #870D00"> IVA incluido</div>
        <div style="font-size: 10px;"> ENVÍO GRATUITO</div>

        <div id="caja">
          <div class="neon_effect signatura_monoline_scriptRg amarillo">
            <p>Ainhoa Valentina</p>
          </div>
       </div>

      </div>
      
      <div class="col-12 text-center">

      <!--
        <button id="myButton" style="color: #fff; background-color: #870D00" onclick="jQueryDoSomethingAJAX()" class="btn"> 
          <i class="fas fa-magic"></i> 
          Aplicar cambios
        </button>
       -->

        <a id="myButton" style="color: #fff; background-color: #870D00" onclick="" class="btn" role="button"><!-- browser.js ln 455-->
          <i class="fas fa-magic"></i> 
          Aplicar cambios
        </a>

        <div id="myDIV">
          <i class="fas fa-hourglass-start"></i> Creando el nuevo diseño...
        </div>        

      </div>

        <?php

          require 'opciones.php';

          require 'formaContorno.php';

          require 'traseraNeon.php';

          require 'sujecionNeon.php';

          require 'dimmer.php';

          require 'colores.php';

        ?>
      
    </div>
  </div>
<!--</form>-->