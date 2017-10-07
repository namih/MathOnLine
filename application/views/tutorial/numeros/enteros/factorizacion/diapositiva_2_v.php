<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<style>
	table{
		width:50px;
		height:50px;
	}
	table td{
		background-color:yellow;
		padding:10px;
		margin:10px;
		border:1px solid #ccc;
	}
</style>
<script>
function createTable(){
	$(box).empty(); 
	mytable = $('<table></table>').attr({ id: "basicTable" });
	var rows = new Number($("#rowcount").val());
	var cols = new Number($("#columncount").val());
	
	
	if (rows ==0 && cols ==0){
		alert("Favor de colocar la base y altura deseada");
	}else{
	if(rows*cols ==12){
	var tr = [];
	for (var i = 0; i < rows; i++) {
		var row = $('<tr></tr>').attr({ class: ["class1", "class2", "class3"].join(' ') }).appendTo(mytable);
		for (var j = 0; j < cols; j++) {
			$('<td></td>').text(" ").appendTo(row); 
		}
		 		 
	}
	console.log("TTTTT:"+mytable.html());
	mytable.appendTo("#box");	       
 }else{
 	alert("Los números ingresados no corresponden al area solicitada.");
 }
 }
 
}
</script>
<div class="container">


<div>
		<p> Tengo que construir un rectangulo cuya area sea 12 unidades cuadradas y solamente puedo utilizar números enteros para la medida de su base y de su altura. ¿ De cuántas maneras lo puedo hacer?. Recuerda que el área del rectángulo se obtiene  multiplicando su base por su altura.</p>
	 	<p>Coloca el número correspondiente en la base y la altura para obtener el area igual a 12.</p>
	
</div>
Base : <input type="text" id="columncount" />
Altura : <input type="text" id="rowcount" />
<input type="button"  class="btn btn-success btn-sm" onclick="createTable();" value="Create Table" />
<br/><br/><br />
<div   class="col-md-6  col-xs-12" id="box" align="center">
</div>	
<div   class="col-md-6  col-xs-12" id="tab" align="center">
	<table border="2" id="tab">
			<tr>
				<td background="red" width="20" height="20">
				</td>
				<td>
				</td>
			</tr>	
		</table>	
</div>
	
</div>
