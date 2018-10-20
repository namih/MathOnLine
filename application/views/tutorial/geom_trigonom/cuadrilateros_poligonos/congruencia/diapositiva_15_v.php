<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/cuadrilateros_poligonos/poligonos.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>ABCD es paralelogramo. Las diagonales AC y BD se intersecan en el punto X. De los siguientes pares de triangulos, marca aquéllos que son congruentes.</p>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/poligonos/congruencia/triangulo_14.png" align="center"/>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <label>
            <input type="checkbox" name="answer[]" id="answer_1" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x25B3;</mo><mi>A</mi><mi>B</mi><mi>X</mi><mo>&#xA0;</mo><mo>&#x2261;</mo><mo>&#xA0;</mo><mo>&#x25B3;</mo><mi>C</mi><mi>D</mi><mi>X</mi></math>
        </label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <label>
            <input type="checkbox" name="answer[]" id="answer_2" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x25B3;</mo><mi>A</mi><mi>C</mi><mi>B</mi><mo>&#xA0;</mo><mo>&#x2261;</mo><mo>&#xA0;</mo><mo>&#x25B3;</mo><mi>A</mi><mi>D</mi><mi>B</mi></math>
        </label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <label>
            <input type="checkbox" name="answer[]" id="answer_3" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x25B3;</mo><mi>A</mi><mi>X</mi><mi>D</mi><mo>&#xA0;</mo><mo>&#x2261;</mo><mo>&#xA0;</mo><mo>&#x25B3;</mo><mi>A</mi><mi>X</mi><mi>B</mi></math>
        </label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
        <label>
            <input type="checkbox" name="answer[]" id="answer_4" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x25B3;</mo><mi>A</mi><mi>C</mi><mi>D</mi><mo>&#xA0;</mo><mo>&#x2261;</mo><mo>&#xA0;</mo><mo>&#x25B3;</mo><mi>C</mi><mi>A</mi><mi>B</mi></math>
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
