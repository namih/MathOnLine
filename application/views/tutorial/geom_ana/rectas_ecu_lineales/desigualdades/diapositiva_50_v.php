<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas_ecu_lineales/rectas_ecu_lineales.js"></script>
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
        <div class="tema"><p>Desigualdades.</p>
            <p> Operaciones con desigualdades lineales de una variable</p>
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
                                <p>Recuerda que al multiplicar una desigualdad por <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn></math> cambia el signo. ¿Qué le pasa a la desigualdad <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>4</mn><mo>&#xA0;</mo><mi>q</mi><mo>&#xA0;</mo><mo>&#x2264;</mo><mo>&#xA0;</mo><mo>-</mo><mn>5</mn></math> si multiplicas los dos lados por <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mfrac><mn>1</mn><mn>4</mn></mfrac></math>?
                                    <select>
                                        <option></option>
                                        <option>a</option>
                                        <option>b</option>
                                        <option>c</option>
                                        <option>d</option>
                                    </select>
                                </p>
                                <p>
                                    <p>(a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>q</mi><mo>&#xA0;</mo><mo>&#x2265;</mo><mo>&#xA0;</mo><mfrac><mn>5</mn><mn>4</mn></mfrac></math></p>
                                    <p>(b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>q</mi><mo>&#xA0;</mo><mo>&#x2265;</mo><mo>&#xA0;</mo><mo>-</mo><mfrac><mn>5</mn><mn>4</mn></mfrac></math></p>
                                    <p>(c) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>q</mi><mo>&#xA0;</mo><mo>&#x2264;</mo><mo>&#xA0;</mo><mfrac><mn>5</mn><mn>4</mn></mfrac></math></p>
                                    <p>(d) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>q</mi><mo>&#xA0;</mo><mo>&#x2264;</mo><mo>&#xA0;</mo><mo>-</mo><mfrac><mn>5</mn><mn>4</mn></mfrac></math></p>
                                </p>
                            </div><br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="center" style="border: 1px solid;">
                            <div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container0"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left">
                            <div class="paso_2">
                                <p>Arrastra el punto (a) hasta el extremo del intervalo solución.
                                </p>
                            </div><br>
                            <div class="paso_3">
                                <p>Ahora elige el intervalo donde está <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>q</mi></math>
                                </p>
                                <p>(a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>q</mi><mo>&#xA0;</mo><mo>&#x2208;</mo><mo>&#xA0;</mo><mo>[</mo><mo>&#xA0;</mo><mfrac><mn>5</mn><mn>4</mn></mfrac><mo>,</mo><mo>&#xA0;</mo><mo>&#x221E;</mo><mo>&#xA0;</mo><mo>)</mo></math></p>
                                <p>(b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>q</mi><mo>&#xA0;</mo><mo>&#x2208;</mo><mo>&#xA0;</mo><mo>(</mo><mo>&#xA0;</mo><mo>-</mo><mo>&#x221E;</mo><mo>,</mo><mo>&#xA0;</mo><mfrac><mn>5</mn><mn>4</mn></mfrac><mo>&#xA0;</mo><mo>)</mo></math></p>
                                <p>(c) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>q</mi><mo>&#xA0;</mo><mo>&#x2208;</mo><mo>&#xA0;</mo><mo>[</mo><mo>&#xA0;</mo><mo>-</mo><mo>&#x221E;</mo><mo>,</mo><mo>&#xA0;</mo><mfrac><mn>5</mn><mn>4</mn></mfrac><mo>&#xA0;</mo><mo>]</mo></math></p>
                                <p>(d) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>q</mi><mo>&#xA0;</mo><mo>&#x2208;</mo><mo>&#xA0;</mo><mo>(</mo><mo>&#xA0;</mo><mfrac><mn>5</mn><mn>4</mn></mfrac><mo>,</mo><mo>&#xA0;</mo><mo>&#x221E;</mo><mo>&#xA0;</mo><mo>)</mo></math></p>
                                <p>
                                    <select>
                                        <option></option>
                                        <option>a</option>
                                        <option>b</option>
                                        <option>c</option>
                                        <option>d</option>
                                    </select>
                                </p>                                
                            </div><br>
                        </div>                         
                    </div>
                </div><br>
            </div><br><br>
        </div>
    </div>
    <br><br>
  </div>
