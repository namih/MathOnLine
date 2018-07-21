<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/cuadrilateros_poligonos/poligonos.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>Dados los siguíentes dos triángulos congruentes, ¿cuál es el valor del ángulo a y cuánto mide el lado c?</p>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/poligonos/congruencia/triangulo_13.png" align="center"/>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <p>
            AC = FC,<br>
            BC = DC,<br>
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2220;</mo><mi>B</mi><mi>C</mi><mi>A</mi><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><mo>&#x2220;</mo><mi>D</mi><mi>C</mi><mi>F</mi></math>
        </p>
    </div>
    <br><br>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
        <label>
            a =
            <input type="number" clas="form-control" id="number_a">
            °
        </label>
        <label>
            c =
            <input type="number" clas="form-control" id="number_b">
        </label>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="button" class="btn btn-success" onclick="correctAB(25,2)">Verificar</button>
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
