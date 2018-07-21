<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        Utilizando la Propiedad 2:
        <br><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><msup><mi>a</mi><mi>m</mi></msup><msup><mi>a</mi><mi>n</mi></msup></mfrac><mo>=</mo><msup><mi>a</mi><mrow><mi>m</mi><mo>-</mo><mi>n</mi></mrow></msup></math>, si a es distinto de 0,
        <br><br>indica cuál o cuáles de las siguientes expresiones son correctas:
        <br><br>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <input type="checkbox" name="answer[]" id="answer_1" value="false">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><msup><mi>x</mi><mn>5</mn></msup><msup><mi>y</mi><mn>3</mn></msup></mrow><mrow><mn>2</mn><mi>x</mi></mrow></mfrac><mo>=</mo><mn>4</mn><msup><mi>x</mi><mn>3</mn></msup><msup><mi>y</mi><mn>3</mn></msup></math>
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
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mstyle displaystyle="true"><mn>18</mn></mstyle><mstyle displaystyle="true"><msup><mstyle displaystyle="true"><mi>p</mi></mstyle><mn>20</mn></msup></mstyle><msup><mstyle displaystyle="true"><mi>q</mi></mstyle><mn>12</mn></msup></mrow><mrow><mn>40</mn><msup><mi>p</mi><mn>6</mn></msup><msup><mi>q</mi><mn>7</mn></msup></mrow></mfrac><mo>=</mo><mfrac><mn>9</mn><mn>20</mn></mfrac><msup><mi>p</mi><mn>14</mn></msup><msup><mi>q</mi><mn>5</mn></msup></math>
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
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>21</mn><msup><mi>s</mi><mn>3</mn></msup><msup><mi>t</mi><mn>8</mn></msup></mrow><mrow><mstyle displaystyle="true"><mn>14</mn></mstyle><msup><mstyle displaystyle="true"><mi>t</mi></mstyle><mn>5</mn></msup><mstyle displaystyle="true"><msup><mstyle displaystyle="true"><mi>s</mi></mstyle><mn>2</mn></msup></mstyle></mrow></mfrac><mo>=</mo><mfrac><mn>3</mn><mn>2</mn></mfrac><mi>s</mi><msup><mi>t</mi><mn>3</mn></msup></math>
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
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>12</mn><msup><mi>x</mi><mn>9</mn></msup><msup><mi>y</mi><mn>13</mn></msup></mrow><mrow><mn>32</mn><msup><mi>y</mi><mn>2</mn></msup><msup><mi>x</mi><mn>5</mn></msup></mrow></mfrac><mo>=</mo><mfrac><mn>3</mn><mn>8</mn></mfrac><msup><mi>x</mi><mn>4</mn></msup><msup><mi>y</mi><mn>11</mn></msup></math>
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