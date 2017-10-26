<script type="text/javascript" charset="utf-8">
	
	var correcta;
	
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
	<p align="justify">Encuentra la fracción equivalente.</p>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<div>
		  <h1>AQUIIIII ME QUEDE XD</h1>
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
</div>
