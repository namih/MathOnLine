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
        <div class="tema"><p>Distancia punto a recta.</p>
        </div>
        <div class="instruccion">
            <p> En este tutorial aprenderás cómo calcular la distancia de un punto a una recta.
            <br>
            Lee con atención cada paso de Ias explicaciones y dedícale suficiente tiempo a los ejercicios hasta que domines el tema.<br></p>
        </div>
        <div id="boxEjemplos_1">
            <div id="box_1_ejemplo_0">
                <div class="pregunta"><p>Problema</p>
                </div>
                <div class="instruccion">
                <p>Es necesario llevar agua del río a la casa que se muestra en el mapa.</p>
                <p>Observa que hay dos líneas rectas en el mapa. Una representa al río y la otra va desde la casa hasta el río.</p>
                <p>Arrastra el punto Q que está en el río para encontrar la distancia más corta de la casa al río</p>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="justify">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
                            <label>¿Cómo son las dos rectas cuando la distancia en más corta?</label>
                            <select id="tipo_grafica">
                                <option>Seleccione una opción</option>
                                <option>Paraletas</option>
                                <option>Perpendiculares</option>
                                <option>Ninguna</option>
                            </select><br>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center" style="border: 1px solid;">
                            <div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container0"></div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="justify">
                        <p>En este tutorial aprenderás a obtener la distancia de un punto <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi></math></b> a una recta <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>l</mi></math></b></p>
                        <p>Para obtenerla: </p>
                        <p>
                            <ul style="list-style: decimal;">
                                <li>Encontraremos las ecuaciones de la recta y de la recta perpendicular a ésta que pasa por <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi></math></li>
                                <li>Después encontraremos el punto de intersección de las dos rectas.</li>
                                <li>Finalmente la distancia entre el último punto y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi></math></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div><br><br>
        </div>
    </div>
    <br><br>
  </div>