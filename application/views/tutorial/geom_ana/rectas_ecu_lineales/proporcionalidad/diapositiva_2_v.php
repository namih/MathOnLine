<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.css">

<script type="text/javascript" charset="utf-8">
    var applet0 = new GGBApplet({filename: base_url+"statics/ggb/tutorial/geom_ana/rectas_ecu_lineales/proporcionalidad/diapositiva_2.ggb","showToolbar":false, height: 300  }, true);
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
                <div class="pregunta"><p>2. Un coche va a una velocidad constante de 80 km/h.</p>
                </div>
                <div class="instruccion">
                <p>Completa la tabla que relaciona las horas con los kilómetros recorridos. </p>
                </div>
                <div class="row">
                    <div align="left"><p><label>Ejemplo 1</label></p></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                            <table class="table table-responsive table-striped table-bordered table-condensed" style="max-width:0%; margin:0 auto;">
                                <thead>
                                    <tr class="success">

                                        <th>Horas</th>
                                        <th>Kilómetros</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="row_1">
                                        <td><input onchange="pintaCoordenada('row_1_td_1',2);" onkeypress="return validarSoloFlotante(event,'row_1_td_1');" class="input-sm2" type="text" id="row_1_td_1" value="0" disabled="disabled" /></td>
                                        <td><input onchange="pintaCoordenada('row_1_td_2',2);" onkeypress="return validarSoloFlotante(event,'row_1_td_2')" class="input-sm2" type="text" id="row_1_td_2" /></td>
                                    </tr>
                                    <tr id="row_2">
                                        <td><input onchange="pintaCoordenada('row_2_td_1',2);" onkeypress="return validarSoloFlotante(event,'row_2_td_1')" class="input-sm2" type="text" id="row_2_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_2_td_2',2);" onkeypress="return validarSoloFlotante(event,'row_2_td_2')" class="input-sm2" type="text" id="row_2_td_2" value="80" disabled="disabled" /></td>
                                    </tr>
                                    <tr id="row_3">
                                        <td><input onchange="pintaCoordenada('row_3_td_1',2);" onkeypress="return validarSoloFlotante(event,'row_3_td_1')" class="input-sm2" type="text" id="row_3_td_1" value="2" disabled="disabled"  /></td>
                                        <td><input onchange="pintaCoordenada('row_3_td_2',2);" onkeypress="return validarSoloFlotante(event,'row_3_td_2')" class="input-sm2" type="text" id="row_3_td_2" /></td>
                                    </tr>
                                    <tr id="row_4">
                                        <td><input onchange="pintaCoordenada('row_4_td_1',2);" onkeypress="return validarSoloFlotante(event,'row_4_td_1')" class="input-sm2" type="text" id="row_4_td_1" value="5.5" disabled="disabled" /></td>
                                        <td><input onchange="pintaCoordenada('row_4_td_2',2);" onkeypress="return validarSoloFlotante(event,'row_4_td_2')" class="input-sm2" type="text" id="row_4_td_2" /></td>
                                    </tr>
                                    <tr id="row_5">
                                        <td><input onchange="pintaCoordenada('row_5_td_1',2);" onkeypress="return validarSoloFlotante(event,'row_5_td_1')" class="input-sm2" type="text" id="row_5_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_5_td_2',2);" onkeypress="return validarSoloFlotante(event,'row_5_td_2')" class="input-sm2" type="text" id="row_5_td_2" /></td>
                                    </tr>
                                    <tr id="row_6">
                                        <td><input onchange="pintaCoordenada('row_6_td_1',2);" onkeypress="return validarSoloFlotante(event,'row_6_td_1')" class="input-sm2" type="text" id="row_6_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_6_td_2',2);" onkeypress="return validarSoloFlotante(event,'row_6_td_2')" class="input-sm2" type="text" id="row_6_td_2" /></td>
                                    </tr>
                                    <tr id="row_7">
                                        <td><input onchange="pintaCoordenada('row_7_td_1',2);" onkeypress="return validarSoloFlotante(event,'row_7_td_1')" class="input-sm2" type="text" id="row_7_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_7_td_2',2);" onkeypress="return validarSoloFlotante(event,'row_7_td_2')" class="input-sm2" type="text" id="row_7_td_2" /></td>
                                    </tr>
                                    <tr id="row_8">
                                        <td><input onchange="pintaCoordenada('row_8_td_1',2);" onkeypress="return validarSoloFlotante(event,'row_8_td_1')" class="input-sm2" type="text" id="row_8_td_1" value="8" disabled="disabled" /></td>
                                        <td><input onchange="pintaCoordenada('row_8_td_2',2);" onkeypress="return validarSoloFlotante(event,'row_8_td_2')" class="input-sm2" type="text" id="row_8_td_2" /></td>
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
                            <select id="select_tipo_grafica" id="select_tipo_grafica" onchange="validaOptSelect('1','select_tipo_grafica','0');">
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
                        <p>Si "x" indica el tiempo transcurrido y "y" indica los kilómetros recorridos, escribe la ecuación que indique cómo se relacionan los kilómetros con el tiempo.</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                        <label> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathvariant="bold-italic">y</mi><mo mathvariant="bold">=</mo></math> <input class="n_float" type="text" name="input_constant_ecu" id="input_constant_ecu" onchange="validaInputRelacion('80','input_constant_ecu','');" onkeypress="return validarSoloFlotante(event,'input_constant_ecu');"> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathvariant="bold-italic">x</mi></math> </label>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_constant_ecu">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="justify">
                        <p>¿Cuántos kilómetros recorrerá el coche en 5 horas y media?</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                        <label> <input class="n_float" type="text" name="input_kilometros" id="input_kilometros" onchange="validaInputRelacion('440','input_kilometros','');" onkeypress="return validarSoloFlotante(event,'input_kilometros');" > kilometros. </label>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_kilometros">
                    </div>
                </div>
            </div><br><br>
        </div>
    </div>
    <br><br>
  </div>
