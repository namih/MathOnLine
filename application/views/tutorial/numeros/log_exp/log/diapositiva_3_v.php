<style>
    .divicion{
        width: 104%;
        border-bottom: 2px #678 solid;
        margin-bottom: 2px;
        margin-top: -8px;
    }

    .caja-divicion{
        display: inline-block;
    }

    .resultado{
        margin-top: -5px;
        position: absolute;
        margin-left: 17px;
    }
</style>
<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>
            Utiliza una calculadora para resolver la siguiente expresión, haciendo cambio de base:
        </p>
        <br>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-4 col-xs-4">
                <math xmlns="http://www.w3.org/1998/Math/MathML">
                    <msub>
                        <mi>log</mi>
                        <mn>3</mn>
                    </msub>
                    <mo>&#xA0;</mo>
                    <mn>16</mn>
                    <mo>&#xA0;</mo>
                    <mo>=</mo>
                    <mo>&#x2009;</mo>
                </math>
            </div>
            <div class="caja-divicion" style="padding-left: 25px; margin-top:-20px">
                <p>
                    ln
                    <input id="numerador" type="number">
                </p>
                <div class="divicion"></div>
                <p>
                    ln
                    <input id="denominador" type="number">
                </p>
            </div>
            <div class="caja-divicion resultado">
                <p>
                    =
                    <input id="answer_user" type="number">
                </p>

            </div>
        </div>
        <br><br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success" class="text-center" hidden>
            <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error" class="text-center" hidden>
            <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="text-center">
        <br>
        <button type="button" class="btn btn-success" onclick="ln2Inputs()">Verificar</button>
    </div>
</div>