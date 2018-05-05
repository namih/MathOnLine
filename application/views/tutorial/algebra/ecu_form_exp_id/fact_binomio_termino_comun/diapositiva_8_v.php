<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/fact_binomio_termino_comun.js"></script>

<div class="container-fluid">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img src="<?php echo base_url(); ?>statics/img/tutorial/algebra/fact_binomio_termino_comun/fbtc_5.jpg">
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-justify">
        <p>Utilizando la igualdad: </p>
        <p class="text-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>(</mo><mi>a</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>b</mi><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>a</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>a</mi><mi>b</mi></math>
        </p>
        <p>
            Encuentra el resultado de los siguientes productos fácilmente:
        </p>
        <p class="text-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>12</mn><mo>(</mo><mn>12</mn><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>6</mn><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo></math> <br><br>
            12(
            <input type="number" id="number_1" style="width: 30%">
            ) + 12(
            <input type="number" id="number_2" style="width: 30%">
            )
        </p>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success" class="text-center" hidden>
            <br><br>
            <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error" class="text-center" hidden>
            <br><br>
            <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <br>
            <button type="button" class="btn btn-success" onclick="validateAnswer8()">Verificar</button>
        </div>
    </div>
</div>
