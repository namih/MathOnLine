function createTable(){
	$(box).empty(); 
	mytable = $('<table></table>').attr({ id: "basicTable" });
	var rows = new Number($("#rowcount").val());
	var cols = new Number($("#columncount").val());


	if (rows ==0 && cols ==0){
		error("Favor de colocar la base y altura deseada");
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
			error("Los números ingresados no corresponden al área solicitada.");
		}
	}

}


function correcto(texto) {
		$('#correcta').text(texto);
		$('#correcta').show();
		$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
			$("#correcta").slideUp(500);
		});
}
function error(texto) {
		$('#error').text(texto);
		$('#error').show();
		$("#error").fadeTo(2000, 500).slideUp(500, function(){
			$("#error").slideUp(500);
		});
	}


















