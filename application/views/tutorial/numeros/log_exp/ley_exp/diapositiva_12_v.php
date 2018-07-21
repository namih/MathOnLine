<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Ahora utiliza la propiedad 1 y 2 para simplificar. Indica cuál o cuáles de las siguientes expresiones son correctas:
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1" value="true">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><msup><mn>2</mn><mn>6</mn></msup><mo>*</mo><msup><mn>2</mn><mn>3</mn></msup></mrow><msup><mn>2</mn><mn>2</mn></msup></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>128</mn></math>
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
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mstyle displaystyle="true"><msup><mn>2</mn><mn>7</mn></msup><mo>*</mo><msup><mn>2</mn><mn>2</mn></msup><mo>*</mo><mn>2</mn></mstyle><msup><mn>2</mn><mn>5</mn></msup></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>64</mn></math>
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
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><msup><mn>3</mn><mn>7</mn></msup><mo>*</mo><msup><mn>3</mn><mn>9</mn></msup><mo>*</mo><mn>3</mn></mrow><mrow><msup><mn>3</mn><mn>11</mn></msup><mo>*</mo><msup><mn>3</mn><mn>5</mn></msup></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mn>3</mn></math>
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
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mstyle displaystyle="true"><msup><mn>3</mn><mn>13</mn></msup><mo>*</mo><msup><mn>3</mn><mn>4</mn></msup><mo>*</mo><msup><mn>3</mn><mn>6</mn></msup></mstyle><mrow><msup><mn>3</mn><mn>8</mn></msup><mo>*</mo><mn>3</mn><mo>*</mo><msup><mn>3</mn><mn>11</mn></msup></mrow></mfrac><mo>=</mo><mo>&#x2009;</mo><mn>27</mn></math>
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