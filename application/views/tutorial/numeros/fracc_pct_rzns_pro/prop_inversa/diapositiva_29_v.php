<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
    <p>Realiza la gráfica de la funcion <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>6.25</mn><mi>x</mi></math> en tu cuaderno.</p>
    <p>La gráfica es:</p>
    <form method="post" action="#">
        <table>
            <td align="left">
                <input type="checkbox" id="1" /> Una hipérbola<br />
                <input type="checkbox" id="2" /> Una línea recta que pasa por el origen<br />
                <input type="checkbox" id="3" /> Una línea recta que no pasa por el origen<br /><br />
            </td>
        </table>
    </form>
    <p>La relación entre el número de paletas y el precio es:</p>
    <form method="post" action="#">
        <table>
            <td align="left">
                <input type="checkbox" id="4" /> Directamente proporcional<br />
                <input type="checkbox" id="5" /> Inversamente proporcional<br /><br />
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