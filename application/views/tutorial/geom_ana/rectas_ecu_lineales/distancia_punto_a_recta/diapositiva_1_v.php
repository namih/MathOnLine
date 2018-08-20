<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.css">

<script type="text/javascript" charset="utf-8">
    var applet0 = new GGBApplet({filename: base_url+"statics/ggb/tutorial/geom_ana/rectas_ecu_lineales/distancia_punto_a_recta/diapositiva_1.ggb","showToolbar":false, height: 300  }, true);
    window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>

<div class="container-fluid">

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
                            <select id="select_tipo_grafica" onchange="validaOptSelect('0','select_tipo_grafica','1');">
                                <option value="00">Seleccione una opción</option>
                                <option value="10" >Paralelas</option>
                                <option value="01">Perpendiculares</option>
                                <option value="11">Ninguna</option>                                
                            </select><br>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_select_tipo_grafica">
                            </div>
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