<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_tcp_form_gener.js"></script>
<div class="container-fluid">
  <div id="ejercicio1">
    <p>Identifica si el trinomio es un TCP. Verifica que el término que contiene a <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> es EL DOBLE producto de la raíz del coeficiente de <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup></math> por la raíz del término independiente.</p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
    <form method="post" action="#">
        <table>
          <td align="left">
            <input type="checkbox" id="1" /> Si es un TCP<br />
            <input type="checkbox" id="2" /> No es un TCP<br /><br />
          </td>
        </table>
      </form>
	   <input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" />
     <input type="button" class="btn btn-success btn-sm" value="MÁS EJERCICIOS" onclick="TCP()" ><br /><br />
  </div>
  <div id="ejercicio2" style='display:none;'>
    <p>Identifica si el trinomio es un TCP. Verifica que el término que contiene a <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> es EL DOBLE producto de la raíz del coeficiente de <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup></math> por la raíz del término independiente.</p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>5</mn><mi>x</mi><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>6</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
    <form method="post" action="#">
        <table>
          <td align="left">
            <input type="checkbox" id="3" /> Si es un TCP<br />
            <input type="checkbox" id="4" /> No es un TCP<br /><br />
          </td>
        </table>
      </form>
     <input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" />
     <input type="button" class="btn btn-success btn-sm" value="MÁS EJERCICIOS" onclick="TCP1()" ><br /><br />
  </div>
  <div id="ejercicio3" style='display:none;'>
    <p>Identifica si el trinomio es un TCP. Verifica que el término que contiene a <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> es EL DOBLE producto de la raíz del coeficiente de <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup></math> por la raíz del término independiente.</p>
    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>6</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>9</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
    <form method="post" action="#">
        <table>
          <td align="left">
            <input type="checkbox" id="5" /> Si es un TCP<br />
            <input type="checkbox" id="6" /> No es un TCP<br /><br />
          </td>
        </table>
      </form>
     <input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
  </div>
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>