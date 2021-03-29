<div class="row g-3">

  <div class="col-sm-8">
    <div class="col-12 form-floating mb-3">
      <input type="text" class="form-control" id="rotulo" placeholder="Tu texto" value="Rótulos Metalarte" onkeyup="deshabiltarBotonCart()">  
      <label for="rotulo">Escríbe tu texto aquí</label>
    </div>
  </div>

  <div class="col-sm-4">
    <label for="alto">Tipo de Letra:</label>
    <select form="letras" class="form-select" id="letra" onchange=""><!-- browser.js ln 274-->  
      <option style="font-family:'Barcelony'; font-size: 25px"value="Barcelony">Barcelony</option>
      <option style="font-family:'BeonMedium'; font-size: 25px"value="BeonMedium">Beon</option>
      <option style="font-family:'Heartbeat in Christmas'; font-size: 40px"value="HeartbeatinChristmas" selected>Heartbeat in Christmas</option>
      <option style="font-family:'Intro Script';font-size: 25px"value="IntroScript">Intro Script</option>
      <option style="font-family:'lie to me';font-size: 25px"value="lietome">Lie to me</option>
      <option style="font-family:'milasian circa';font-size: 30px"value="milasiancirca" >Milasian Circa</option>
      <option style="font-family:'Neoneon';font-size: 20px"value="Neoneon">Neoneon</option>
      <option style="font-family:'neoncity_scriptregular';font-size: 35px"value="neoncity_scriptregular">Neoncity</option>
      <option style="font-family:'Nickainley';font-size: 25px"value="Nickainley">Nickainley</option>
      <option style="font-family:'optisantitaregular';font-size: 25px"value="optisantitaregular">Opti Santita</option>
      <option style="font-family:'Raleway';font-size: 25px"value="Raleway">Raleway</option>
      <option style="font-family:'Roboto';font-size: 25px"value="Roboto" >Roboto</option>
      <option style="font-family:'saitama';font-size: 40px"value="saitama">Saitama</option>
      <option style="font-family:'signatura_monoline_scriptRg';font-size: 40px"value="signatura_monoline_scriptRg">Signatura Monoline</option>
      <option style="font-family:'Slim Joe';font-size: 25px"value="SlimJoe">Slim Joe</option>
      <option style="font-family:'that i love you';font-size: 25px"value="thatiloveyou">That i love you</option>

    </select>
  </div>

</div>

<div class="col-sm-12">
  <div class="col-12 form-floating mb-3">

    <span for="alto">Dimensiones de su rótulo (Alto y Ancho en cm.)</span><br/>
    <span style="font-size: 10px; color: red">Deslice hasta obtener las medidas deseadas</span>
  
  </div>
</div>

<div class="col-sm-12">
  <div class="col-12 form-floating mb-3">

    <input type="range" step=".01" class="form-range" id="altoAncho" min="11" max="38.34" value="11">
    <input type="hidden" class="form-range" id="alto" value="11" readonly="yes"> 

    <!--
      <input type="number" step=".01" class="form-control" id="alto" placeholder="Tamaño" value="10" onchange="deshabiltarBotonCart()">  
    -->

  </div>
</div>

<div class="row g-3">

  <div class="col-sm-4">
    <div class="col-12 form-floating mb-3">
      <input type="text" class="form-control" id="altura" placeholder="Alto total texto cm" value="11.000" readonly="yes">  
      <label for="altura">Alto (mín. 11 cm)</label>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="col-12 form-floating mb-3">
      <input type="text" class="form-control" id="ancho" placeholder="Ancho total texto cm" value="68.853" readonly="yes">
      <input type="hidden" class="form-control" id="anchoSVG" value="0" readonly="yes">
      <label for="ancho">Ancho (máx. 240 cm)</label>
    </div>
  </div>

  <div class="col-sm-4">
    <label for="alto">Tiempos de Entrega:</label>
    <select for="tiempos" class="form-select" id="tiempos" onchange="deshabiltarBotonCart()">  
      
      <option value="<?php echo esc_html($cn_precio_sietediaslaborales);?>">7 días (laborales)</option>
      <option value="<?php echo esc_html($cn_precio_4872);?>">48 a 72 horas</option>
    </select>
  </div>

</div>

<br/>