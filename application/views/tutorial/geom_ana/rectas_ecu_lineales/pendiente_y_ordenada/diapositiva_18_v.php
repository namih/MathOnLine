<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.css">

<script type="text/javascript" charset="utf-8">
    var applet0 = new GGBApplet({filename: base_url+"statics/ggb/tutorial/geom_ana/rectas_ecu_lineales/pendiente_y_ordenada/diapositiva_18.ggb","howToolbar":false, height: 300 }, true);
    window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>
<div class="container-fluid">
 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
        <div class="tema"><p>Pendiente Ordenada.</p>
        </div>
        <div class="instruccion">
            <p><br></p>
        </div>
        <div id="boxEjemplos_1">
            <div id="box_1_ejemplo_0">
                <div class="pregunta"><p> Ahora resuelve los siguientes ejercicios.</p>
                </div>
                <div class="instruccion">
                <p>Contesta los siguientes ejercicios escribiendo las respuestas en los campos de texto.</p>
                <p><label>Ejercicios</label></p>
                </div>
                <div class="row">
                    <div align="left"></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                             <p>En la recta <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mo>-</mo><mfrac><mn>2</mn><mn>4</mn></mfrac><mi>x</mi><mo>+</mo><mn>3</mn></math></p>
                            <p><label> ¿Cuál es su pendiente? <input class="n_float" type="text" name="pendiente" id="pendiente" onchange="validaInputRelacion('-0','pendiente','.5');" onkeypress="return validarSoloFlotante(event,'pendiente');"> </label>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_pendiente">
                                    </div>
                                    </p>
                            <p><label> ¿Cuál es su intersección con el eje Y? <input class="n_float" type="text" name="inter_x" id="inter_x"  onchange="validaInputRelacion('3','inter_x','');" onkeypress="return validarSoloNumero(event);"> </label>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_inter_x">
                                    </div>
                            </p>
                            <p><label> ¿Cuál es su intersección con el eje x? <input class="n_float" type="text" name="inter_y" id="inter_y" onchange="validaInputRelacion('6','inter_y','');" onkeypress="return validarSoloNumero(event);"> </label>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_inter_y">
                                    </div>
                                    </p>

                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center" style="border: 1px solid;">
                            <div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container0"></div>
                        </div>
                    </div>
                </div><br>
            </div><br><br>
        </div>
    </div>
    <br><br>
  </div>