function createTable(){
	$(box).empty(); 
	mytable = $('<table></table>').attr({ id: "basicTable" });
	var rows = new Number($("#rowcount").val());
	var cols = new Number($("#columncount").val());

	
	if(isNaN(rows)||isNaN(cols)){
		alert("Favor de ingresar solo números.");
	}else{
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
	

}

function verificar(){
	var base = [1,2,3,4,6,12];
	var altura = [1,2,3,4,6,12];
	
	var base1 = new Number($("#base1").val());
	 
	alert(base1);
	
	
}


















