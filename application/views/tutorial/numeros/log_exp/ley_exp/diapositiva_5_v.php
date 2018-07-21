<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Utilizando la propiedad 1:
        <br><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>a</mi><mi>m</mi></msup><mi>*</mi><msup><mi>a</mi><mi>n</mi></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>a</mi><mrow><mi>m</mi><mo>+</mo><mi>n</mi></mrow></msup></math>
        <br><br>simplifica las siguientes expresiones:
        <br><br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><msup><mi>y</mi><mn>2</mn></msup><mo>*</mo><msup><mi>x</mi><mn>5</mn></msup><mo>=</mo></math>
            <input type="text" id="base1_user_1" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power1_user_1" class="form-control" style="width: 80px; display: inline-block;"></sup>
            <input type="text" id="base2_user_1" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power2_user_1" class="form-control" style="width: 80px; display: inline-block;"></sup>

            <input type="hidden" id="base1_correct_1" value="x" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power1_correct_1" value="7" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="base2_correct_1" value="y" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power2_correct_1" value="2" class="form-control" style="width: 80px; display: inline-block;">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_1" class="text-center" hidden>
                <br><br>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_1" class="text-center" hidden>
                <br><br>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mn>2</mn></msup><msup><mi>n</mi><mn>2</mn></msup><mo>*</mo><msup><mi>m</mi><mn>4</mn></msup><msup><mi>n</mi><mn>5</mn></msup><mo>=</mo></math>
            <input type="text" id="base1_user_2" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power1_user_2" class="form-control" style="width: 80px; display: inline-block;"></sup>
            <input type="text" id="base2_user_2" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power2_user_2" class="form-control" style="width: 80px; display: inline-block;"></sup>

            <input type="hidden" id="base1_correct_2" value="m" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power1_correct_2" value="6" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="base2_correct_2" value="n" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power2_correct_2" value="7" class="form-control" style="width: 80px; display: inline-block;">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_2" class="text-center" hidden>
                <br><br>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_2" class="text-center" hidden>
                <br><br>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>g</mi><mn>5</mn></msup><msup><mi>h</mi><mn>2</mn></msup><mo>*</mo><msup><mi>h</mi><mn>5</mn></msup><mo>=</mo></math>
            <input type="text" id="base1_user_3" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power1_user_3" class="form-control" style="width: 80px; display: inline-block;"></sup>
            <input type="text" id="base2_user_3" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power2_user_3" class="form-control" style="width: 80px; display: inline-block;"></sup>

            <input type="hidden" id="base1_correct_3" value="g" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power1_correct_3" value="5" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="base2_correct_3" value="h" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power2_correct_3" value="7" class="form-control" style="width: 80px; display: inline-block;">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_3" class="text-center" hidden>
                <br><br>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_3" class="text-center" hidden>
                <br><br>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mn>2</mn></msup><mi>n</mi><mo>*</mo><mi>m</mi><msup><mi>n</mi><mn>5</mn></msup><mo>=</mo></math>
            <input type="text" id="base1_user_4" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power1_user_4" class="form-control" style="width: 80px; display: inline-block;"></sup>
            <input type="text" id="base2_user_4" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power2_user_4" class="form-control" style="width: 80px; display: inline-block;"></sup>

            <input type="hidden" id="base1_correct_4" value="m" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power1_correct_4" value="3" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="base2_correct_4" value="n" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power2_correct_4" value="6" class="form-control" style="width: 80px; display: inline-block;">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success_4" class="text-center" hidden>
                <br><br>
                <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error_4" class="text-center" hidden>
                <br><br>
                <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
            </div>
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="text-center">
            <br>
            <button type="button" class="btn btn-success" onclick="validateMultipleBaseAndPowerCheckBox3()">Verificar</button>
        </div>

    </div>
</div>