<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/areas.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<style>
    .square {
        width: 150px;
        height: 100px;
        background-color: red;
    }

    .rotate-90 {
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
    }
</style>
<div class="container-fluid">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height:350px;">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <img id="cuadro_1" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/fact_binomio_termino_comun/cuadro_azul_1.png" style="z-index: 1; position: absolute">
                <br><br>
                <img id="cuadro_2" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/fact_binomio_termino_comun/cuadro_x.jpg" style="z-index: 1; position: absolute">
                <br><br>
                <img id="cuadro_3" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/fact_binomio_termino_comun/cuadro_x2.jpg" style="z-index: 1; position: absolute">
                <br><br>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-justify">
        <p>
            ¿Cuánto mide el LADO del cuadrado rojo?
        </p>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mi>x</mi></math>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_2" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_3" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup></math>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_4" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>+</mo><mi>x</mi></math>
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
