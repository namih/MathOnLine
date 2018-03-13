<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Utilizando las propiedades que conoces, indica cuál o cuáles  de las siguientes expresiones son correctas:
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>log</mi><mi>a</mi></msub><mo>(</mo><mn>4</mn><mi>w</mi><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msub><mi>log</mi><mi>a</mi></msub><mo>(</mo><mi>w</mi><mo>)</mo><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><msub><mi>log</mi><mi>a</mi></msub><mo>(</mo><mn>4</mn><mo>)</mo></math>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_1" class="text-center" hidden>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_1" class="text-center" hidden>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_2" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>log</mi><mi>b</mi></msub><mo>(</mo><msup><mi>p</mi><mn>2</mn></msup><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msub><mi>log</mi><mi>b</mi></msub><mo>(</mo><mi>p</mi><mo>)</mo><mo>&#xA0;</mo><mo>*</mo><mo>&#xA0;</mo><msub><mi>log</mi><mi>b</mi></msub><mo>(</mo><mi>p</mi><mo>)</mo></math>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_2" class="text-center" hidden>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_2" class="text-center" hidden>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_3" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>log</mi><mo>(</mo><mfrac bevelled="true"><mrow><mn>3</mn><mi>m</mi></mrow><mn>8</mn></mfrac><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac bevelled="true"><mrow><mi>log</mi><mo>(</mo><mn>3</mn><mi>m</mi><mo>)</mo></mrow><mrow><mo>&#xA0;</mo><mi>log</mi><mo>(</mo><mn>8</mn><mo>)</mo></mrow></mfrac><mo>&#xA0;</mo></math>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_3" class="text-center" hidden>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_3" class="text-center" hidden>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_4" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>log</mi><mo>(</mo><mi>p</mi><mo>+</mo><mn>5</mn><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mi>log</mi><mo>(</mo><mi>p</mi><mo>)</mo><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>log</mi><mo>(</mo><mn>5</mn><mo>)</mo></math>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_4" class="text-center" hidden>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_4" class="text-center" hidden>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="text-center">
            <br>
            <button type="button" class="btn btn-success" onclick="validateMultipleCheckBox()">Verificar</button>
        </div>
    </div>
</div>