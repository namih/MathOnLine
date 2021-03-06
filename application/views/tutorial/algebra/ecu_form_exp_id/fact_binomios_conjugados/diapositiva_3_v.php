<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/areas.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<div class="container-fluid">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img src="<?php echo base_url(); ?>statics/img/tutorial/algebra/fact_binomios_conjugados/fbc_3.jpg">
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-justify">
        <p>
            Encuentra dos maneras de expresar el área de la figura azul
        </p>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>9</mn><msup><mi>z</mi><mn>2</mn></msup><mo>+</mo><mn>4</mn></math>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_2" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mi>z</mi><mo>(</mo><mn>2</mn><mo>+</mo><mn>3</mn><mi>z</mi><mo>)</mo></math>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_3" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>(</mo><mn>3</mn><mi>z</mi><mo>-</mo><mn>2</mn><mo>)</mo><mo>(</mo><mn>3</mn><mi>z</mi><mo>+</mo><mn>2</mn><mo>)</mo></math>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_4" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>9</mn><msup><mi>z</mi><mn>2</mn></msup><mo>-</mo><mn>4</mn></math>
        </div>

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
