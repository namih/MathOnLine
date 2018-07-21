<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/cuadrilateros_poligonos/poligonos.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>También podemos resolver problemas planteados a la inversa:</p>
        <p style="display: inline-block">Si los ángulos interiores de un polígono regular miden</p>
        <p id="grade" style="display: inline-block">1440°</p>,
        <p style="display: inline-block"> ¿cuántos lados tiene el poligono?</p>
        <input type="hidden" id="number_sides" name="number_sides" step="1" value="8" class="form-control" style="width:100px; display:inline-block">
        <input type="number" id="answer" name="answer" step="1" value="0" class="form-control" style="width:100px; display:inline-block">
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <button type="button" class="btn btn-success" onclick="numbersSides()">Verificar</button>
        <button type="button" class="btn btn-success" onclick="moreNumbersSides()">Más ejercicios</button>
    </div>
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
