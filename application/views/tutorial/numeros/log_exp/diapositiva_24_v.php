<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Utilizando la propiedad 1:
        <br><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>a</mi><mi>m</mi></msup><mi>x</mi><msup><mi>a</mi><mi>n</mi></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>a</mi><mrow><mi>m</mi><mo>+</mo><mi>n</mi></mrow></msup></math>
        <br><br>simplifica las siguientes expresiones:
        <br><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>7</mn></msup><mo>*</mo><mi>x</mi><mo>=</mo><mspace linebreak="newline"/><msup><mi>c</mi><mn>9</mn></msup><mo>*</mo><msup><mi>c</mi><mn>9</mn></msup><mo>=</mo><mspace linebreak="newline"/><msup><mi>h</mi><mn>7</mn></msup><mo>*</mo><msup><mi>h</mi><mn>8</mn></msup><mo>=</mo><mspace linebreak="newline"/><msup><mi>x</mi><mn>9</mn></msup><mo>*</mo><msup><mi>x</mi><mn>11</mn></msup><mo>=</mo></math>


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