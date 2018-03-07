<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Utilizando las propiedades que conoces, indica cuál o cuáles  de las siguientes expresiones son correctas:
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>log</mi><mn>3</mn></msub><mo>(</mo><mn>7</mn><mi>x</mi><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mn>7</mn><mo>&#xA0;</mo><msub><mi>log</mi><mn>3</mn></msub><mo>(</mo><mi>x</mi><mo>)</mo></math>
        </div>
        <br><br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_2">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>log</mi><mo>(</mo><mfrac bevelled="true"><mi>x</mi><mn>5</mn></mfrac><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mi>log</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mi>log</mi><mo>(</mo><mn>5</mn><mo>)</mo></math>
        </div>
        <br><br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_3">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>log</mi><mn>4</mn></msub><mo>(</mo><msup><mi>x</mi><mn>3</mn></msup><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mn>3</mn><mo>&#xA0;</mo><mi>log</mi><mo>(</mo><mi>x</mi><mo>)</mo></math>
        </div>
        <br><br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_4">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>log</mi><mfenced open="|" close="|"><mrow><mn>4</mn><mi>x</mi></mrow></mfenced><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mi>log</mi><mo>(</mo><mn>4</mn><msup><mo>)</mo><mn>4</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>log</mi><mfenced open="|" close="|"><mi>x</mi></mfenced></math>
        </div>
        <br><br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success" class="text-center" hidden>
            <br><br>
            <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error" class="text-center" hidden>
            <br><br>
            <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="text-center">
            <br>
            <button type="button" class="btn btn-success" onclick="validateBasePowerByCheckBox()">Verificar</button>
        </div>
    </div>
</div>