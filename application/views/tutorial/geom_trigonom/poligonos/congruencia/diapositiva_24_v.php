<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/cuadrilateros_poligonos/poligonos.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>¿Cuánto miden los ángulos p y q, si los triángulos son congruentes?</p>
    </div>

    <div>
        <img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/poligonos/congruencia/triangulo_23.png" align="center"/>
    </div>
    <br><br>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
        <label>
            p =
            <input type="number" clas="form-control" id="number_a">
            °
        </label>
        <label>
            q =
            <input type="number" clas="form-control" id="number_b">
            °
        </label>

    </div>
    <br>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="button" class="btn btn-success" onclick="correctAB(50,20)">Verificar</button>
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
