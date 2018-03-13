<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>
            Sea A la masa de radio-226 en el tiempo t (t=0 corresponde a hace 500 años). Queremos saber para qué t sucede que <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi><mo>&#x2009;</mo><mo>=</mo><mo>&#x2009;</mo><mo>(</mo><mfrac bevelled="true"><mn>1</mn><mn>2</mn></mfrac><mo>)</mo><msub><mi>A</mi><mn>0</mn></msub></math>. Sin embargo no conocemos k. Cuando calculemos k, escribiremos la fórmula para la vida media <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2009;</mo><mo>(</mo><mfrac bevelled="true"><mn>1</mn><mn>2</mn></mfrac><mo>)</mo><msub><mi>A</mi><mn>0</mn></msub></math> y calcularemos t.
        </p>

        <p>
            Primero tenemos que calcular k. Como sabemos que después de 500 años tenemos 80.4% de la masa original, es decir, cuando t=500, A=0.804 <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>A</mi><mn>0</mn></msub></math>.
        </p>

        <p>
            Sustituimos esos valores en la fórmula:
        </p>

        <p class="text-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>804</mn><mo>&#xA0;</mo><msub><mi>A</mi><mn>0</mn></msub><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msub><mi>A</mi><mn>0</mn></msub><mo>&#xA0;</mo><msup><mi>e</mi><mrow><mi>k</mi><mo>(</mo><mn>500</mn><mo>)</mo></mrow></msup></math>
        </p>

        <p>
            Dividimos entre <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>A</mi><mn>0</mn></msub></math>:
        </p>

        <p class="text-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>804</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>e</mi><mrow><mn>500</mn><mi>k</mi></mrow></msup></math>
        </p>

        <p>
            y obtenemos una ecuación exponencial.
        </p>
    </div>
</div>
