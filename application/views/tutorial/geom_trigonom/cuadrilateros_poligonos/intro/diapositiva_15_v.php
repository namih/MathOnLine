<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/cuadrilateros_poligonos/poligonos.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p>¿Cuánto mide un ángulo exterior del siguiente polígono?

                Poligono de <p id="sides" style="display: inline-block">3</p>, lados <input type="number" id="answer">°
            </p>
        </div>
        <div id="example_1">
            <img class="img-responsive text-center" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/poligonos/intro/poligono_lados_3.png" align="center"/>
        </div>
        <div id="example_2" hidden>
            <img class="img-responsive text-center" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/poligonos/intro/poligono_lados_4.png" align="center"/>
        </div>
        <div id="example_3" hidden>
            <img class="img-responsive text-center" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/poligonos/intro/poligono_lados_5.png" align="center"/>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="button" class="btn btn-success" onclick="moreImage2()">Mas Ejercicios</button>
            <button type="button" class="btn btn-success" onclick="validateAnglesExternal()">Verificar</button>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success" class="text-center" hidden>
            <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            <br>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error" class="text-center" hidden>
            <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            <br>
        </div>
    </div>
</div>
