<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Utilizando la Propiedad 1:
        <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>a</mi><mi>m</mi></msup><mi>*</mi><msup><mi>a</mi><mi>n</mi></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>a</mi><mrow><mi>m</mi><mo>+</mo><mi>n</mi></mrow></msup></math>
        indica cuál o cuáles de las siguientes expresiones son correctas:

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
            <input type="checkbox" name="answer[]" id="answer_1">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mi>x</mi><msup><mn>2</mn><mn>2</mn></msup><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mn>2</mn><mn>3</mn></msup></math>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
            <input type="checkbox" id="answer_2">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>3</mn><mn>3</mn></msup><mi>x</mi><mn>3</mn><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mn>3</mn><mn>4</mn></msup></math>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
            <input type="checkbox" id="answer_3">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>7</mn><mn>9</mn></msup><mi>x</mi><msup><mn>7</mn><mrow><mn>11</mn><mo>&#xA0;</mo></mrow></msup><mo>=</mo><mo>&#xA0;</mo><msup><mn>7</mn><mn>10</mn></msup></math>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
            <input type="checkbox" id="answer_4">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>8</mn><mn>7</mn></msup><mi>x</mi><msup><mn>8</mn><mn>6</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msup><mn>8</mn><mn>13</mn></msup></math>
        </div>

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