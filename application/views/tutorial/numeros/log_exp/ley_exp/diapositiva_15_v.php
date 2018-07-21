<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Junto con las propiedades 1 y 2, utilizar la Propiedad 3 para simplificar:
        <br><br>
        <div class="text-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mfenced><msup><mi>a</mi><mi>m</mi></msup></mfenced><mi>n</mi></msup><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><mo>(</mo><msup><mi>a</mi><mi>n</mi></msup><msup><mo>)</mo><mi>m</mi></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>a</mi><mrow><mi>m</mi><mo>*</mo><mi>n</mi></mrow></msup></math>
        </div>
        <br>
        Indica cuál o cuáles de las siguientes expresiones son correctas:
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mfenced><msup><mi>a</mi><mn>2</mn></msup></mfenced><mn>2</mn></msup><mo>*</mo><msup><mfenced><msup><mi>a</mi><mn>4</mn></msup></mfenced><mn>3</mn></msup><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>a</mi><mn>16</mn></msup></math>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_1" class="text-center" hidden>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_1" class="text-center" hidden>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_2" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mfenced><msup><mi>m</mi><mn>4</mn></msup></mfenced><mn>3</mn></msup><mo>*</mo><msup><mfenced><msup><mi>m</mi><mn>3</mn></msup></mfenced><mn>4</mn></msup><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>m</mi><mn>24</mn></msup></math>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_2" class="text-center" hidden>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_2" class="text-center" hidden>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_3" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><msup><mfenced><msup><mi>y</mi><mn>4</mn></msup></mfenced><mn>3</mn></msup><msup><mfenced><msup><mi>y</mi><mn>6</mn></msup></mfenced><mn>2</mn></msup></mfrac><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><mn>1</mn></math>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_3" class="text-center" hidden>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_3" class="text-center" hidden>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_4" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><msup><mfenced><msup><mi>p</mi><mn>6</mn></msup></mfenced><mn>3</mn></msup><msup><mfenced><msup><mi>p</mi><mn>2</mn></msup></mfenced><mn>9</mn></msup></mfrac><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><mn>1</mn></math>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_4" class="text-center" hidden>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_4" class="text-center" hidden>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="text-center">
            <br>
            <button type="button" class="btn btn-success" onclick="validateMultipleCheckBox()">Verificar</button>
        </div>

    </div>

</div>