<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.css">

<script type="text/javascript" charset="utf-8">
    var applet0 = new GGBApplet({filename: base_url+"statics/ggb/tutorial/geom_ana/rectas_ecu_lineales/proporcionalidad/diapositiva_3.ggb","showToolbar":false, height: 300  }, true);
    window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>
<div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
        <div class="tema"><p>Proporcionalidad</p>
        </div>
        <div class="instruccion">
        </div>
        <div id="boxEjemplos_1">
            <div id="box_1_ejemplo_1">
                <div class="pregunta"><p>3. Un taxista cobra $15.00 el banderazo más $2.50 por kilómetro recorrido.</p>
                </div>
                <div class="instruccion">
                <p>Completa la siguiente tabla que relaciona los kilómetros recorridos con el costo del viaje.</p>
                </div>
                <div class="row">
                    <div align="left"><p><label>Ejemplo 3</label></p></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                            <table class="table table-responsive table-striped table-bordered table-condensed" style="max-width:0%; margin:0 auto;">
                                <thead>
                                    <tr class="success">

                                        <th>Kilómetros</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="row_1">
                                        <td><input onchange="pintaCoordenada('row_1_td_1',3);" onkeypress="return validarSoloFlotante(event,'row_1_td_1');" class="input-sm2" type="text" id="row_1_td_1" value="0" disabled="disabled" /></td>
                                        <td><input onchange="pintaCoordenada('row_1_td_2',3);" onkeypress="return validarSoloFlotante(event,'row_1_td_2');" class="input-sm2" type="text" id="row_1_td_2" /></td>
                                    </tr>
                                    <tr id="row_2">
                                        <td><input onchange="pintaCoordenada('row_2_td_1',3);" onkeypress="return validarSoloFlotante(event,'row_2_td_1');" class="input-sm2" type="text" id="row_2_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_2_td_2',3);" onkeypress="return validarSoloFlotante(event,'row_2_td_2');" class="input-sm2" type="text" id="row_2_td_2" /></td>
                                    </tr>
                                    <tr id="row_3">
                                        <td><input onchange="pintaCoordenada('row_3_td_1',3);" onkeypress="return validarSoloFlotante(event,'row_3_td_1');" class="input-sm2" type="text" id="row_3_td_1"  /></td>
                                        <td><input onchange="pintaCoordenada('row_3_td_2',3);" onkeypress="return validarSoloFlotante(event,'row_3_td_2');" class="input-sm2" type="text" id="row_3_td_2" /></td>
                                    </tr>
                                    <tr id="row_4">
                                        <td><input onchange="pintaCoordenada('row_4_td_1',3);" onkeypress="return validarSoloFlotante(event,'row_4_td_1');" class="input-sm2" type="text" id="row_4_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_4_td_2',3);" onkeypress="return validarSoloFlotante(event,'row_4_td_2');" class="input-sm2" type="text" id="row_4_td_2" /></td>
                                    </tr>
                                    <tr id="row_5">
                                        <td><input onchange="pintaCoordenada('row_5_td_1',3);" onkeypress="return validarSoloFlotante(event,'row_5_td_1');" class="input-sm2" type="text" id="row_5_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_5_td_2',3);" onkeypress="return validarSoloFlotante(event,'row_5_td_2');" class="input-sm2" type="text" id="row_5_td_2" /></td>
                                    </tr>
                                    <tr id="row_6">
                                        <td><input onchange="pintaCoordenada('row_6_td_1',3);" onkeypress="return validarSoloFlotante(event,'row_6_td_1');" class="input-sm2" type="text" id="row_6_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_6_td_2',3);" onkeypress="return validarSoloFlotante(event,'row_6_td_2');" class="input-sm2" type="text" id="row_6_td_2" /></td>
                                    </tr>
                                    <tr id="row_7">
                                        <td><input onchange="pintaCoordenada('row_7_td_1',3);" onkeypress="return validarSoloFlotante(event,'row_7_td_1');" class="input-sm2" type="text" id="row_7_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_7_td_2',3);" onkeypress="return validarSoloFlotante(event,'row_7_td_2');" class="input-sm2" type="text" id="row_7_td_2" /></td>
                                    </tr>
                                    <tr id="row_8">
                                        <td><input onchange="pintaCoordenada('row_8_td_1',3);" onkeypress="return validarSoloFlotante(event,'row_8_td_1');" class="input-sm2" type="text" id="row_8_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_8_td_2',3);" onkeypress="return validarSoloFlotante(event,'row_8_td_2');" class="input-sm2" type="text" id="row_8_td_2" /></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center" style="border: 1px solid;">
                            <div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container0"></div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_valor">
                    </div>
                </div><br>                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left"><br>
                            <label>Los puntos parecen formar:</label>
                            <select id="select_tipo_grafica" onchange="validaOptSelect('0','select_tipo_grafica','1');">
                                <option value="00" >Seleccione una opción</option>
                                <option value="10" >Una línea recta que pasa por el origen</option>
                                <option value="01" >Una línea recta que NO pasa por el origen</option>
                                <option value="11" >Una curva</option>
                            </select><br>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_select_tipo_grafica">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="justify">
                        <p>Si "x" indica el número de kilómetros recorridos y "y" indica el costo del viaje, escribe la ecuación que indique cómo se relacionan los kilómetros con el costo.</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                        <label> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathvariant="bold-italic">y</mi><mo mathvariant="bold">=</mo></math> <input class="n_float" type="text" name="input_constant_ecu" id="input_constant_ecu" onchange="validaInputRelacion('2','input_constant_ecu','.5');" onkeypress="return validarSoloFlotante(event,'input_constant_ecu');"> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathvariant="bold-italic">x</mi><mo mathvariant="bold">+</mo><mn mathvariant="bold">15</mn></math> </label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_constant_ecu">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="justify">
                        <p>¿Cuánto cobra el taxista por un viaje de 30 km?</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                        <label> Precio: <input class="n_float" type="text" name="input_precio" id="input_precio" onchange="validaInputRelacion('90','input_precio','');" onkeypress="return validarSoloFlotante(event,'input_precio');"> </label>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_precio">
                    </div>
                </div>
            </div><br><br>
        </div>
    </div>
    <br><br>
  </div>
