<!--<form id="customizerNeon">-->
  <div class="card border-light mb-3">
    <div class="card-header">

      <span style="font-size: 28px; color: #870D00;">
        <i class="fas fa-spray-can"></i>
      </span>

      Letras de neon personalizadas
    </div>
    <div class="card-body">

      <canvas id="myCanvas"  style="border:1px solid #d3d3d3; width: 100%; height: 100%">
      Your browser does not support the canvas element.
      </canvas>

      <div id="response">
        
        <h1>
          <small class="text-muted"> <strong> <?php echo esc_html($cn_precio_base);?>&euro;<strong></small>
            <input type="hidden" class="form-control" id="precio_final_rotulo" name="precio_final_rotulo" value="0.00" readonly="yes">
        </h1>
        <div style="font-size: 10px; color: #870D00"> IVA incluido</div>
        <div style="font-size: 10px;"> ENVÍO GRATUITO</div>

        <div id="caja">
          <div class="neon_effect axaxax amarillo">
            <p>Metalarte</p>
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

        <a id="myButton" style="color: #fff; background-color: #870D00" onclick="jQueryDoSomethingAJAX()" class="btn" role="button">
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