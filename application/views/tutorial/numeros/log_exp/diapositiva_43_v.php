<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Utilizando las propiedades que conoces, indica cuál o cuáles de las siguientes expresiones son correctas:
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>log</mi><mfenced><mrow><mi>x</mi><mo>+</mo><mn>2</mn></mrow></mfenced><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mi>log</mi><mfenced><mi>x</mi></mfenced><mo>+</mo><mi>log</mi><mfenced><mn>2</mn></mfenced></math>
        </div>
        <br><br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_2">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>log</mi><mn>2</mn></msub><mo>(</mo><mn>5</mn><mi>x</mi><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msub><mi>log</mi><mn>2</mn></msub><mo>(</mo><mn>5</mn><mo>)</mo><mo>+</mo><msub><mi>log</mi><mn>2</mn></msub><mo>(</mo><mi>x</mi><mo>)</mo></math>
        </div>
        <br><br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_3">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>log</mi><mo>(</mo><mfrac bevelled="true"><mi>x</mi><mn>4</mn></mfrac><mo>)</mo><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac bevelled="true"><mrow><mi>log</mi><mo>(</mo><mi>x</mi><mo>)</mo></mrow><mrow><mi>log</mi><mo>(</mo><mn>4</mn><mo>)</mo></mrow></mfrac></math>
        </div>
        <br><br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_4">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>log</mi><mn>5</mn></msub><mo>(</mo><msup><mi>x</mi><mn>2</mn></msup><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msub><mi>log</mi><mn>5</mn></msub><mo>(</mo><mi>x</mi><mo>)</mo><mo>*</mo><msub><mi>log</mi><mn>5</mn></msub><mo>(</mo><mi>x</mi><mo>)</mo></math>
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