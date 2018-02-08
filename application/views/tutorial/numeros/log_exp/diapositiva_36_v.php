<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Junto con las propiedades 1 y 2, utiliza la Propiedad 3 para simplificar:
        <br><br>
        <div class="text-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mfenced><msup><mi>a</mi><mi>m</mi></msup></mfenced><mi>n</mi></msup><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><mo>(</mo><msup><mi>a</mi><mi>n</mi></msup><msup><mo>)</mo><mi>m</mi></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>a</mi><mrow><mi>m</mi><mo>*</mo><mi>n</mi></mrow></msup></math>
        </div>
        <br>
        Indica cuál o cuáles de las siguientes expresiones son correctas:
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mfenced><msup><mi>a</mi><mn>2</mn></msup></mfenced><mn>2</mn></msup><mo>&#x2009;</mo><mo>*</mo><mo>&#x2009;</mo><msup><mi>a</mi><mn>4</mn></msup><mo>=</mo><mo>&#x2009;</mo><msup><mi>a</mi><mn>8</mn></msup></math>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_2">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mn>5</mn></msup><mo>*</mo><msup><mfenced><msup><mi>m</mi><mn>2</mn></msup></mfenced><mn>4</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>m</mi><mn>13</mn></msup></math>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_3">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><msup><mfenced><msup><mi>g</mi><mn>2</mn></msup></mfenced><mn>3</mn></msup><mi>g</mi></mfrac><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>g</mi><mn>5</mn></msup></math>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_4">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><msup><mfenced><msup><mi>p</mi><mn>7</mn></msup></mfenced><mn>2</mn></msup><msup><mi>p</mi><mn>8</mn></msup></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msup><mi>p</mi><mn>5</mn></msup></math>
        </div>
        <br><br>

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