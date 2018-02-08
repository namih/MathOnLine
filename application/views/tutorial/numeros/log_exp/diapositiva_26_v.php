<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Utilizando la propiedad 1:
        <br><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>a</mi><mi>m</mi></msup><mi>*</mi><msup><mi>a</mi><mi>n</mi></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>a</mi><mrow><mi>m</mi><mo>+</mo><mi>n</mi></mrow></msup></math>
        <br><br>simplifica las siguientes expresiones:
        <br><br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><msup><mi>x</mi><mn>4</mn></msup><mo>&#xA0;</mo><mo>*</mo><mo>&#xA0;</mo><msup><mi>x</mi><mn>5</mn></msup><mo>&#xA0;</mo><mo>=</mo></math>
            <input type="number" id="num_user_1" class="form-control" style="width: 80px; display: inline-block;">
            <input type="text" id="base_user_1" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power_user_1" class="form-control" style="width: 80px; display: inline-block;"></sup>
            <input type="hidden" id="num_correct_1" value="x" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="base_correct_1" value="x" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power_correct_1" value="8" class="form-control" style="width: 80px; display: inline-block;">
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><msup><mi>x</mi><mn>5</mn></msup><mo>&#xA0;</mo><mo>*</mo><mo>&#xA0;</mo><mn>10</mn><msup><mi>x</mi><mn>9</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math>
            <input type="number" id="num_user_2" class="form-control" style="width: 80px; display: inline-block;">
            <input type="text" id="base_user_2" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power_user_2" class="form-control" style="width: 80px; display: inline-block;"></sup>
            <input type="hidden" id="num_correct_2" value="7" value="x" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="base_correct_2" value="7" value="c" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power_correct_2" value="20" value="18" class="form-control" style="width: 80px; display: inline-block;">
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>c</mi><mn>5</mn></msup><mo>&#xA0;</mo><mo>*</mo><mo>&#xA0;</mo><mn>7</mn><msup><mi>c</mi><mn>8</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math>
            <input type="number" id="num_user_3" class="form-control" style="width: 80px; display: inline-block;">
            <input type="text" id="base_user_3" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power_user_3" class="form-control" style="width: 80px; display: inline-block;"></sup>
            <input type="hidden" id="num_correct_3" value="7" value="x" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="base_correct_3" value="7" value="h" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power_correct_3" value="20" value="15" class="form-control" style="width: 80px; display: inline-block;">
        </div>
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>6</mn><mi>a</mi><mo>&#xA0;</mo><mo>*</mo><mo>&#xA0;</mo><mn>7</mn><mi>a</mi><mo>&#xA0;</mo><mo>=</mo></math>
            <input type="number" id="num_user_4" class="form-control" style="width: 80px; display: inline-block;">
            <input type="text" id="base_user_4" class="form-control" style="width: 80px; display: inline-block;">
            <sup><input type="number" id="power_user_4" class="form-control" style="width: 80px; display: inline-block;"></sup>
            <input type="hidden" id="num_correct_4" value="7" value="x" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="base_correct_4" value="7" value="x" class="form-control" style="width: 80px; display: inline-block;">
            <input type="hidden" id="power_correct_4" value="20" value="20" class="form-control" style="width: 80px; display: inline-block;">
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