<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<style>
	table{
		width:50px;
		height:50px;
	}
	table td{
		background-color:#27AE60;
		padding:10px;
		margin:10px;
		border:1px solid #ccc;
	}
</style>
<script>
function createTable(){
	 
	mytable = $('<table></table>').attr({ id: "basicTable" });
	var rows = new Number($("#rowcount").val());
	var cols = new Number($("#columncount").val());
	var tr = [];
	for (var i = 0; i < rows; i++) {
		var row = $('<tr></tr>').attr({ class: ["class1", "class2", "class3"].join(' ') }).appendTo(mytable);
		for (var j = 0; j < cols; j++) {
			$('<td></td>').text(".").appendTo(row); 
		}
		 		 
	}
	console.log("TTTTT:"+mytable.html());
	mytable.appendTo("#box");	       
  
}
</script>
<div class="container">


<div>
		<p> Tengo que construir un rectangulo cuya area sea 12 unidades cuadradas y solamente puedo utilizar números enteros para la medida de su base y de su altura. ¿ De cuántas maneras lo puedo hacer?. Recuerda que el área del rectángulo se obtiene  multiplicando su base por su altura.</p>
	 	<p>Coloca el número correspondiente en la base y la altura.</p>
	
</div>
Base:<input type="text" id="columncount" />
Altura:<input type="text" id="rowcount" />
<input type="button" onclick="createTable();" value="Create Table" />
<div id="box" align="center">
</div>	
	
</div>
