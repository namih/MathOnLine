<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div>
		<p>Una liga de 16 equipos de boliche cuenta con $8,000 para dar premios. El equipo que quede en el último lugar recibirá $275, el penúltimo recibirá un poco más, el equipo siguiente más que en el penúltimo, y así sucesivamente hasta llegar el primer lugar, de tal manera que haya la misma diferencia entre dos equipos consecutivos.</p>
		<p>¿Cuánto recibirá el primer lugar?</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mi>16</mi></msub><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /></p>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
	</div>
 </div>		
