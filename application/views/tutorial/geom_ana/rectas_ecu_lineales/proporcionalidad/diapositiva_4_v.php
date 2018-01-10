<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
    var applet0 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300  }, true);
    window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>
<div class="container-fluid">
    <style type="text/css">
        .tema{
            color: #224EB5;
            text-align: justify;
            font-weight: bold;
        }
        .pregunta{
            color: #2e75b6;
            text-align: justify;
            font-weight: bold;
        }
        .instruccion{
            color: #000000;
            text-align: justify;
            font-weight: normal;
        }
    </style>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
        <div class="tema"><p>Proporcionalidad</p>
        </div>
        <div class="instruccion">
        </div>
        <div id="boxEjemplos_1">
            <div id="box_1_ejemplo_1">
                <div class="pregunta"><p>4. Empiezo con 100 pesos ahorrados en el banco. Al final de cada año, el banco me duplica la cantidad que tengo ahorrada.</p>
                </div>
                <div class="instruccion">
                <p>Completa tabla que relaciona los años transcurridos con el capital que tengo en el banco.</p>
                </div>
                <div class="row">
                    <div align="left"><p><label>Ejemplo 3</label></p></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                            <table class="table table-responsive table-striped table-bordered table-condensed" style="max-width:0%; margin:0 auto;">
                                <thead>
                                    <tr class="success">

                                        <th>Años</th>
                                        <th>Capital</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="row_1">
                                        <td><input onchange="pintaCoordenada('row_1_td_1');" class="input-sm2" type="text" id="row_1_td_1" value="0" disabled="disabled" /></td>
                                        <td><input onchange="pintaCoordenada('row_1_td_2');" class="input-sm2" type="text" id="row_1_td_2" value="100" disabled="disabled" /></td>
                                    </tr>
                                    <tr id="row_2">
                                        <td><input onchange="pintaCoordenada('row_2_td_1');" class="input-sm2" type="text" id="row_2_td_1" value="1" disabled="disabled" /></td>
                                        <td><input onchange="pintaCoordenada('row_2_td_2');" class="input-sm2" type="text" id="row_2_td_2" value="200" disabled="disabled" /></td>
                                    </tr>
                                    <tr id="row_3">
                                        <td><input onchange="pintaCoordenada('row_3_td_1');" class="input-sm2" type="text" id="row_3_td_1"  /></td>
                                        <td><input onchange="pintaCoordenada('row_3_td_2');" class="input-sm2" type="text" id="row_3_td_2" value="400" disabled="disabled" /></td>
                                    </tr>
                                    <tr id="row_4">
                                        <td><input onchange="pintaCoordenada('row_4_td_1');" class="input-sm2" type="text" id="row_4_td_1" value="3" disabled="disabled" /></td>
                                        <td><input onchange="pintaCoordenada('row_4_td_2');" class="input-sm2" type="text" id="row_4_td_2" /></td>
                                    </tr>
                                    <tr id="row_5">
                                        <td><input onchange="pintaCoordenada('row_5_td_1');" class="input-sm2" type="text" id="row_5_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_5_td_2');" class="input-sm2" type="text" id="row_5_td_2" value="1600" disabled="disabled" /></td>
                                    </tr>
                                    <tr id="row_6">
                                        <td><input onchange="pintaCoordenada('row_6_td_1');" class="input-sm2" type="text" id="row_6_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_6_td_2');" class="input-sm2" type="text" id="row_6_td_2" /></td>
                                    </tr>
                                    <tr id="row_7">
                                        <td><input onchange="pintaCoordenada('row_7_td_1');" class="input-sm2" type="text" id="row_7_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_7_td_2');" class="input-sm2" type="text" id="row_7_td_2" /></td>
                                    </tr>
                                    <tr id="row_8">
                                        <td><input onchange="pintaCoordenada('row_8_td_1');" class="input-sm2" type="text" id="row_8_td_1" /></td>
                                        <td><input onchange="pintaCoordenada('row_8_td_2');" class="input-sm2" type="text" id="row_8_td_2" /></td>
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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left"><br>
                            <label>Los puntos parecen formar:</label>
                            <select id="tipo_grafica">
                                <option>Seleccione una opción</option>
                                <option>Una línea recta que pasa por el origen</option>
                                <option>Una línea recta que NO pasa por el origen</option>
                                <option>Una curva</option>
                            </select><br>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="justify">
                        <p>Si "x" indica el número años transcurridos y "y" indica la cantidad de dinero que tengo en el banco al final de cada año, escribe una ecuación que relacione los años con mi capital.</p>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                        <label> y= <input class="n_float" type="text" name="constant_ecu" id="constant_ecu" onkeypress="return validarSoloFlotante(event,'constant_ecu');"> <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>2</mi><mn>x</mn></msup></math> </label>

                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                        <div id="respuesta"></div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="justify">
                        <p>Si no deposito ni tampoco retiro dinero del banco, ¿cuánto tendré después de 5 años?</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                        <label> <input class="n_float" type="text" name="constant_ecu" id="constant_ecu" onkeypress="return validarSoloFlotante(event,'constant_ecu');"> </label>

                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                        <div id="respuesta"></div>
                    </div>
                </div>
            </div><br><br>
        </div>
    </div>
    <br><br>
  </div>
