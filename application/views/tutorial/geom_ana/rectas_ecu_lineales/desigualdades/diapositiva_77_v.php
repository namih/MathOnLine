<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.css">

<script type="text/javascript" charset="utf-8">
    var applet0 = new GGBApplet({filename: base_url+"statics/ggb/tutorial/geom_ana/rectas_ecu_lineales/desigualdades/diapositiva_77.ggb","showToolbar":false, height: 100  }, true);
    window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>

<div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
        <div class="tema"><p>Desigualdades - Operaciones con desigualdades lineales de una variable</p>
        </div>
        <div class="instruccion">
            <p></p>
        </div>
        <div id="boxEjemplos_1">
            <div id="box_1_ejemplo_0">
                <div class="pregunta"><p></p>
                </div>
                <div class="instruccion">
                <p></p>
                </div>
                <div class="row">
                    <div align="left"><p><label>Ejercicio</label></p></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left">
                            <div class="paso_0">
                                <p>Resuelve la siguiente desigualdad <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>&#xA0;</mo><mo>&lt;</mo><mo>&#xA0;</mo><mn>3</mn><mo>&#xA0;</mo><mo>(</mo><mo>&#xA0;</mo><mo>-</mo><mn>3</mn><mi>q</mi><mo>+</mo><mn>4</mn><mo>&#xA0;</mo><mo>)</mo><mo>&#xA0;</mo><mo>&lt;</mo><mo>&#xA0;</mo><mn>21</mn></math></p>
                                <p>Resuelve primero el lado izquierdo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>q</mi></math> 
                                    <select id="select_extremo" disabled="disabled" readonly>
                                        <option value="00"> </option>
                                        <option value="10" selected="selected"> < </option>
                                        <option value="11"> > </option>
                                        <option value="001"> = </option>
                                    </select> <input class="n_float" type="text" name="input_valor" id="input_valor" value="1.44" disabled="disabled" readonly>
                                </p>
                            </div><br>
                            <div class="paso_1">
                                <p>Arrastra el punto (a) al extremo de la solución</p>
                            </div><br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 cont_graph" align="center">
                            <div align="center" class="col-xs-12 col-sm-12 col-lg-12 graphic" id="applet_container0"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left">
                            <div class="paso_2"><br>
                                <p>Ahora el lado derecho <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>q</mi></math> 
                                <select id="select_extremo_2" onchange="validaOptSelect('1','select_extremo_2','1');" >
                                <option value="00" ></option>
                                <option value="10" ><</option>
                                <option value="11" >></option>
                                <option value="001" >=</option>
                                </select> <input class="n_float" type="text" name="input_valor_2" id="input_valor_2" onchange="validaInputRelacion('-1','input_valor_2','');" onkeypress="return validarSoloEntero(event);">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_select_extremo_2">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_valor_2">
                                    </div>
                                </p>
                                <p>Arrastra el punto (b) al otro extremo de la solución</p>
                            </div><br>
                        </div>                        
                    </div>
                </div><br>
            </div><br><br>
        </div>
    </div>
    <br><br>
  </div>
