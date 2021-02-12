<div class="row g-3">

  <div class="col-sm-8">
    <div class="col-12 form-floating mb-3">
      <input type="text" class="form-control" id="rotulo" placeholder="Tu texto" value="Metalarte" onkeyup="jQueryDoSomethingAJAX()">  
      <label for="rotulo">Escríbe tu texto aquí</label>
    </div>
  </div>

  <div class="col-sm-4">
    <label for="alto">Tipo de Letra:</label>
    <select form="letras" class="form-select" id="letra" onchange="jQueryDoSomethingAJAX()">  
      
      <option style="font-family:'Axaxax W05 Regular';" value="axaxax">Axaxax W05 Regular</option>
      <option style="font-family:'arialbold';" value="arialbold">Arial Bold</option>
      <option style="font-family:'ArialCE';" value="ArialCE">ArialCE</option>
      <option style="font-family:'ArialCEBold';" value="ArialCEBold">ArialCEBold</option>
      <option style="font-family:'ArialCEBoldItalic';" value="ArialCEBoldItalic">ArialCEBoldItalic</option>
      <option style="font-family:'ArialCEItalic';" value="ArialCEItalic">ArialCEItalic</option>
      <option style="font-family:'ArialCEMTBlack';" value="ArialCEMTBlack">ArialCEMTBlack</option>
      <option style="font-family:'Arial_GEO';" value="Arial_GEO">Arial GEO</option>
      <option style="font-family:'ARI';" value="ARI">ARI</option>
      <option style="font-family:'Arialn';" value="Arialn">Arial n</option>
      <option style="font-family:'Arialnb';" value="Arialnb">Arial Nb</option>
      <option style="font-family:'ArialTh';" value="ArialTh">Arial Th</option>
      <option style="font-family:'ariblk';" value="ariblk">Arial Black</option>














      <option style="font-family:'Bulo';"value="Bulo">Bulo</option>
      <option style="font-family:'Bulo Black';"value="Bulo_Black">Bulo Black</option>
      <option style="font-family:'Bulo Black Italic';"value="Bulo_Black_Italic">Bulo Black Italic</option>
      <option style="font-family:'Bulo Bold';"value="Bulo_Bold">Bulo Bold</option>
      <option style="font-family:'Bulo Bold Italic';"value="Bulo_Bold_Italic">Bulo Bold Italic</option>
      <option style="font-family:'Bulo ExtraBlack';"value="Bulo_ExtraBlack">Bulo ExtraBlack</option>
      <option style="font-family:'Bulo ExtraBlack Italic';"value="Bulo_ExtraBlack_Italic">Bulo ExtraBlack Italic</option>
      <option style="font-family:'Bulo Hair Blond';"value="Bulo_Hair_Blond">Bulo Hair Blond</option>
      <option style="font-family:'Bulo Hair Blond Italic';"value="Bulo_Hair_Blond_Italic">Bulo Hair Blond Italic</option>
      <option style="font-family:'Bulo Hair Dark';"value="Bulo_Hair_Dark">Bulo Hair Dark</option>
      <option style="font-family:'Bulo Hair Dark Italic';"value="Bulo_Hair_Dark_Italic">Bulo Hair Dark Italic</option>
      <option style="font-family:'Bulo Italic';"value="Bulo_Italic">Bulo Italic</option>
      <option style="font-family:'Bulo Light';"value="Bulo_Light">Bulo Light</option>
      <option style="font-family:'Bulo Light Italic';"value="Bulo_Light_Italic">Bulo Light Italic</option>
      <option style="font-family:'Bulo Medium';"value="Bulo_Medium">Bulo Medium</option>
      <option style="font-family:'Bulo Medium Italic';"value="Bulo_Medium_Italic">Bulo Medium Italic</option>
      <option style="font-family:'Bulo Thin';"value="Bulo_Thin">Bulo Thin</option>
      <option style="font-family:'Bulo Thin Italic';"value="Bulo_Thin_Italic">Bulo Thin Italic</option>
      <option style="font-family:'Bulo Ultra Black';"value="Bulo_Ultra_Black">Bulo Ultra Black</option>
      <option style="font-family:'Bulo Ultra Black Italic';"value="Bulo_Ultra_Black_Italic">Bulo Ultra Black Italic</option>
      <option style="font-family:'gruenewald_varegular';"value="gruenewald_varegular">Gruenewald Va Regular</option>
      <option style="font-family:'Monoton';"value="monoton">Monoton</option>
      <option style="font-family:'Neoneon';"value="Neoneon">Neoneon</option>
      <option style="font-family:'neon_lightsregular';"value="neon-lights">Neon Lights Regular</option>
      <option style="font-family:'neoncity_displayregular';"value="neoncity_displayregular">Neoncity Display Regular</option>
      <option style="font-family:'neoncity_scriptregular';"value="neoncity_scriptregular">Neoncity Script Regular</option>
      <option style="font-family:'optisantitaregular';"value="optisantitaregular">Optisantita Regular</option>
      <option style="font-family:'signatura_monoline_scriptRg';"value="signatura_monoline_scriptRg">Signatura Monoline ScriptRg Regular</option>
    </select>
  </div>
  <br/><br/><br/>
</div>

<div class="row g-3">

  <div class="col-sm-4">
    <div class="col-12 form-floating mb-3">
      <input type="number" step=".01" class="form-control" id="alto" placeholder="Alto total texto cm" value="10" onchange="jQueryDoSomethingAJAX()">  
      <label for="alto">Alto total texto cm</label>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="col-12 form-floating mb-3">
      <input type="text" class="form-control" id="ancho" placeholder="Ancho total texto cm" value="53.720" readonly="yes">
      <label for="ancho">Ancho total texto cm</label>
    </div>
  </div>

  <div class="col-sm-4">
    <label for="alto">Tiempos de Entrega:</label>
    <select for="tiempos" class="form-select" id="tiempos" onchange="jQueryDoSomethingAJAX()">  
      
      <option value="<?php echo esc_html($cn_precio_sietediaslaborales);?>">7 días (laborales)</option>
      <option value="<?php echo esc_html($cn_precio_4872);?>">48 a 72 horas</option>
    </select>
  </div>

</div>

<br/>