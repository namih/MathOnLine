<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/areas.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<div class="container-fluid">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height:250px;">
        <img class="drag" id="cuadro_1" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/ecu_form_exp_id/cuadro_7_7.png">
        <img class="drag" id="cuadro_2" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/ecu_form_exp_id/cuadro_7_y.png">
        <img class="drag" id="cuadro_3" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/ecu_form_exp_id/cuadro_y_7.png">
        <img class="drag" id="cuadro_4" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/ecu_form_exp_id/cuadro_y_y.png">
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-justify">
        <p>
            Encuentra dos maneras de escribir el área del cuadrado completo
        </p>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>y</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>7</mn></math>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_2" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>(</mo><mi>y</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>7</mn><msup><mo>)</mo><mn>2</mn></msup></math>
        </div>
        <br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_3" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>y</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>14</mn><mi>y</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>49</mn></math>
        </div>
        <br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_4" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>y</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>y</mi></math>
        </div>
        <br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success" class="text-center" hidden>
            <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error" class="text-center" hidden>
            <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="text-center">
            <br>
            <button type="button" class="btn btn-success" onclick="validateMultipleCheckBox()">Verificar</button>
        </div>
    </div>
</div>
