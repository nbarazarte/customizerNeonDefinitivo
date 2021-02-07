<div class="card">

  <div class="card-header">
    Dimmer (controlador de luz)
    <input type="hidden" id="tipoDimmer" name="tipoDimmer" readonly="yes" value="incluir">
  </div>

  <div class="card-body">

    <div class="row">

      <div class="col-sm-4">

        <div class="card-group">

         <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/dimmer/incluir.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
            
              <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoDimmer',this.id)" class="form-check-input" type="radio" name="dimmer" id="incluir" value="<?php echo esc_html($cn_precio_dimmer);?>" checked>      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="incluir">                    
                    Incluir
                  </label>       
                </div>      

              </div>

            </div>
          </div>
          
          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/dimmer/noincluir.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoDimmer',this.id)" class="form-check-input" type="radio" name="dimmer" id="noincluir" value="0">      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="noincluir">                    
                    No incluir
                  </label>       
                </div>      

              </div>

            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<br/>