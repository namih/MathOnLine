<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Ahora utiliza la propiedad 1 y 2 para simplificar. Indica cuál o cuáles de las siguientes expresiones son correctas:
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><msup><mi>x</mi><mn>7</mn></msup><mo>*</mo><msup><mi>x</mi><mn>2</mn></msup></mrow><msup><mi>x</mi><mn>4</mn></msup></mfrac><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>x</mi><mn>5</mn></msup></math>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_2">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><msup><mi>x</mi><mn>4</mn></msup><mo>*</mo><mn>3</mn><msup><mi>x</mi><mn>2</mn></msup></mrow><mrow><mn>4</mn><msup><mi>x</mi><mn>5</mn></msup></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><mn>3</mn><mn>2</mn></mfrac><mi>x</mi></math>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_3">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><msup><mi>x</mi><mn>3</mn></msup><mo>*</mo><mn>2</mn><msup><mi>x</mi><mn>5</mn></msup></mrow><mrow><mn>3</mn><msup><mi>x</mi><mn>2</mn></msup><mo>*</mo><mn>7</mn><msup><mi>x</mi><mn>4</mn></msup></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>7</mn></mfrac><msup><mi>x</mi><mn>2</mn></msup></math>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_4">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><msup><mi>m</mi><mn>4</mn></msup><mo>*</mo><msup><mi>m</mi><mn>5</mn></msup></mrow><mrow><mn>12</mn><msup><mi>m</mi><mn>6</mn></msup><mo>*</mo><mn>5</mn><msup><mi>m</mi><mn>2</mn></msup></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>2</mn><mn>15</mn></mfrac><mi>m</mi></math>
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