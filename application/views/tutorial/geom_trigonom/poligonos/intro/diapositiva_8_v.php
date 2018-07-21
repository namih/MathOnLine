<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/cuadrilateros_poligonos/poligonos.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        ¿Cuántos grados suman los ángulos interiores de un heptágono?
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/poligonos/intro/ejercicio_2.jpg" align="center"/>
        <br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success" class="text-center" hidden>
            <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            <br>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error" class="text-center" hidden>
            <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            <br>
        </div>
        <div class="form-group">
            <input type="number" id="answer_user" placeholder="Angulos">°
            <br><br>
            <button type="button" class="btn btn-success" onclick="anglesInPolygon(7)">Verificar</button>
        </div>
    </div>
</div>
