<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Utilizando la propiedad 1:
        <br><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>a</mi><mi>m</mi></msup><mi>*</mi><msup><mi>a</mi><mi>n</mi></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>a</mi><mrow><mi>m</mi><mo>+</mo><mi>n</mi></mrow></msup></math>
        <br><br>indica cuál o cuáles de las siguientes expresiones son correctas:
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><msup><mi>x</mi><mn>2</mn></msup><msup><mi>y</mi><mn>3</mn></msup><mo>*</mo><mn>3</mn><msup><mi>y</mi><mn>2</mn></msup><mo>=</mo><mn>6</mn><msup><mi>x</mi><mn>2</mn></msup><msup><mi>y</mi><mn>5</mn></msup></math>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_1" class="text-center" hidden>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_1" class="text-center" hidden>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_2" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><msup><mi>m</mi><mn>3</mn></msup><msup><mi>n</mi><mn>4</mn></msup><mo>*</mo><mn>4</mn><msup><mi>m</mi><mn>4</mn></msup><msup><mi>n</mi><mn>3</mn></msup><mo>=</mo><mn>7</mn><msup><mi>m</mi><mn>7</mn></msup><msup><mi>n</mi><mn>7</mn></msup></math>
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
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><msup><mi>p</mi><mn>2</mn></msup><mi>q</mi><mo>*</mo><mn>6</mn><msup><mi>q</mi><mn>2</mn></msup><mi>p</mi><mo>=</mo><mn>24</mn><msup><mi>p</mi><mn>3</mn></msup><msup><mi>q</mi><mn>3</mn></msup></math>
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
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>12</mn><msup><mi>a</mi><mn>4</mn></msup><msup><mi>b</mi><mn>5</mn></msup><mo>*</mo><mn>7</mn><msup><mi>a</mi><mn>5</mn></msup><msup><mi>b</mi><mn>4</mn></msup><mo>=</mo><mn>84</mn><msup><mi>a</mi><mn>9</mn></msup><msup><mi>b</mi><mn>9</mn></msup></math>
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