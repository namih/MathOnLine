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
</script>
<div class="container-fluid">
		<p align="justify">Un jugador cuyos tiros hacia la portería NINGUNO resulta tiro a gol, obtendría una puntuación de:</p>
		<div align="justify" class="col-xs-12 col-sm-12 col-lg-12">
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">a) 10%</label>
			</div>
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">b) 100%</label>
			</div>
			<div class="radio">
				<label><input onclick="correcto()" type="radio" name="optradio">c) 0%</label>
			</div>
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">d) 1%</label>
			</div
		</div>
		
	</div>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>