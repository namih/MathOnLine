<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>
            Reescribe la siguiente expresión:
        <div style="display: inline-block">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mrow><mo>-</mo><mfrac><mn>2</mn><mn>3</mn></mfrac></mrow></msup><mo>&#xA0;</mo><mo>=</mo></math>
            1/[(
            <span style="white-space: nowrap; font-size:larger; display: inline-block">
                <sup>
                    <input type="number" id="potencia" style="width: 40px;">
                </sup>
                &radic;
                <span style="text-decoration:overline; margin-left: -5px">
                    <input type="number" id="numero" style="width: 100px;">
                </span>
            </span>
            )
            <sup>
                <input type="number" id="potencia2" style="width: 40px;">
            </sup>
            ]
            =
        </div>
        <div style="display: inline-block">
            <input type="number" id="answer" class="form-control" placeholder="Con 5 decimales" readonly>
        </div>
        </p>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success" class="text-center" hidden>
            <br><br>
            <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error" class="text-center" hidden>
            <br><br>
            <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
        </div>

        <button type="button" class="btn btn-success" onclick="validateSqrt3(0.62996)">Verificar</button>
        <!--<button type="button" class="btn btn-primary" onclick="generateExamplesSqrt()">Otro ejemplo</button>-->
    </div>
</div>