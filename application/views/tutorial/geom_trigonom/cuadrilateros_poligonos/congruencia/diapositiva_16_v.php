<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/cuadrilateros_poligonos/poligonos.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>PQRS es un trapecio con PQ//SR y PS = QR. Las diagonales PR y QS se intersecan en Y. ¿Cuáles de los siguientes triángulos son congruentes?</p>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/poligonos/congruencia/triangulo_15.png" align="center"/>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <label>
            <input type="checkbox" name="answer[]" id="answer_1" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x25B3;</mo><mi>P</mi><mi>Q</mi><mi>Y</mi><mo>&#xA0;</mo><mo>&#x2261;</mo><mo>&#xA0;</mo><mo>&#x25B3;</mo><mi>S</mi><mi>R</mi><mi>Y</mi></math>
        </label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <label>
            <input type="checkbox" name="answer[]" id="answer_2" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x25B3;</mo><mi>P</mi><mi>Y</mi><mi>S</mi><mo>&#xA0;</mo><mo>&#x2261;</mo><mo>&#xA0;</mo><mo>&#x25B3;</mo><mi>Q</mi><mi>Y</mi><mi>R</mi></math>
        </label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <label>
            <input type="checkbox" name="answer[]" id="answer_3" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x25B3;</mo><mi>P</mi><mi>Q</mi><mi>S</mi><mo>&#xA0;</mo><mo>&#x2261;</mo><mo>&#xA0;</mo><mo>&#x25B3;</mo><mi>Q</mi><mi>P</mi><mi>R</mi></math>
        </label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <label>
            <input type="checkbox" name="answer[]" id="answer_4" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x25B3;</mo><mi>P</mi><mi>S</mi><mi>R</mi><mo>&#xA0;</mo><mo>&#x2261;</mo><mo>&#xA0;</mo><mo>&#x25B3;</mo><mi>Q</mi><mi>R</mi><mi>S</mi></math>
        </label>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="button" class="btn btn-success" onclick="validateMultipleCheckBox()">Verificar</button>
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
