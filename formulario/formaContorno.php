<div class="card">

  <div class="card-header">
    Forma del Contorno
  </div>

  <div class="card-body">

    <div class="row">

      <div class="col-sm-6">

        <div class="card-group">

          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/contorno/rectangular.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
             
              <div class="row">

                <div class="col-sm-12">
                  <input class="form-check-input" type="radio" name="contornos" id="rectangular" value="rectangular" checked onchange="deshabiltarBotonCart()">        
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="rectangular">                    
                    Rectangular
                  </label>       
                </div>      

              </div>

            </div>
          </div>

          <div class="card" >
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/contorno/redondo.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input class="form-check-input" type="radio" name="contornos" id="redondo" value="redondo" onchange="deshabiltarBotonCart()">     
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="redondo">                    
                    Redondo
                  </label>       
                </div>      

              </div>

            </div>
          </div>

          <div class="card" >
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/contorno/personalizado.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input class="form-check-input" type="radio" name="contornos" id="personalizado" value="personalizado" onchange="deshabiltarBotonCart()">       
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="personalizado">                    
                    Personalizado con forma
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