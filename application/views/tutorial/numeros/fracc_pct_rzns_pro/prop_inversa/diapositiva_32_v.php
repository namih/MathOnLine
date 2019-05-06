<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
    <p>La ecuación que relaciona la velocidad () con el tiempo que tarda el automóvil en recorrer 350 kimólemtros es:</p>
    <form method="post" action="#">
        <table>
            <td align="left">
                <input type="checkbox" id="1" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>350</mn><mi>x</mi></math><br />
                <input type="checkbox" id="2" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>350</mn><mi>x</mi></mfrac></math><br />
                <input type="checkbox" id="3" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>100</mn><mo>(</mo><mn>3</mn><mo>.</mo><mn>5</mn><mo>)</mo></math><br /><br />
            </td>
        </table>
    </form>
    <p>La gráfica de la función que acabas de escribir es:</p>
    <form method="post" action="#">
        <table>
            <td align="left">
                <input type="checkbox" id="4" /> Una línea recta que pasa por el origen<br />
                <input type="checkbox" id="5" /> Una línea recta que no pasa por el origen<br />
                <input type="checkbox" id="6" /> Una hipérbola<br /><br />
            </td>
        </table>
    </form>
    <p>La relación entre la velocidad y el tiempo del recorrido es:</p>
    <form method="post" action="#">
        <table>
            <td align="left">
                <input type="checkbox" id="7" /> Directamente proporcional<br />
                <input type="checkbox" id="8" /> Inversamente proporcional<br /><br />
            </td>
        </table>
    </form>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>