<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>
            Ahora ya podemos escribir la fórmula para la vida media y resolver para t:
        </p>

        <p>
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced><mfrac><mn>1</mn><mn>2</mn></mfrac></mfenced><msub><mi>A</mi><mn>0</mn></msub><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msub><mi>A</mi><mn>0</mn></msub><mo>&#xA0;</mo><msup><mi>e</mi><mrow><mo>-</mo><mn>0</mn><mo>.</mo><mn>000436</mn><mi>t</mi></mrow></msup></math>
        </p>

        <p>
            Dividimos entre <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>A</mi><mn>0</mn></msub></math> otra vez:
        </p>

        <p class="text-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><msup><mi>e</mi><mrow><mo>-</mo><mn>0</mn><mo>.</mo><mn>000436</mn><mi>t</mi></mrow></msup></math>
        </p>

        <p>
            Para calcular t, introducimos logaritmos naturales:
        </p>

        <p class="text-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>ln</mi><mfenced><mfrac><mn>1</mn><mn>2</mn></mfrac></mfenced><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mi>ln</mi><mfenced open="[" close="]"><msup><mi>e</mi><mrow><mo>-</mo><mn>0</mn><mo>.</mo><mn>000436</mn><mi>t</mi></mrow></msup></mfenced><mspace linebreak="newline"/><mi>ln</mi><mfenced><mfrac><mn>1</mn><mn>2</mn></mfrac></mfenced><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mo>-</mo><mn>0</mn><mo>.</mo><mn>000436</mn><mi>t</mi></math>
        </p>

        <p>
            y
        </p>

        <p class="text-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><mrow><mi>ln</mi><mfenced><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle></mfenced></mrow><mrow><mo>-</mo><mn>0</mn><mo>.</mo><mn>000436</mn></mrow></mfrac></math>
        </p>

        <p>
            es decir:
        </p>

        <p class="text-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mn>1590</mn></math>
        </p>

        <p>
            La vida media del radio-226 es aproximadamente 1590 años.
        </p>
    </div>
</div>
