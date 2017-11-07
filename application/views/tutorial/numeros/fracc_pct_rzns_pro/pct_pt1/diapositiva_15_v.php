<script type="text/javascript" charset="utf-8">
	function correcto() {
		$('#correcta').show();
		$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
			$("#correcta").slideUp(500);
		});
	}
	
	function error() {
		$('#error').show();
		$("#error").fadeTo(2000, 500).slideUp(500, function(){
			$("#error").slideUp(500);
		});
	}
	
	function validar() {
		var porcentaje = document.getElementById('porcentaje').value;
		var numerador = document.getElementById('numerador').value;
		if (porcentaje == 10 && numerador == 10) {
			correcto();
		} else {
			error();
		};
	}
</script>
<div class="container-fluid">
	<p align="justify">Escribe el porcentaje que está sombreado en cada rectángulo. Supón que el rectángulo completo representa al 100%. Escribe tambien la fracción equivalente al porcentaje.</p>
	<img width="50%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/10_percent.png" />
	<h3><input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="porcentaje">% = <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="numerador"> / 100</h3>	
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>