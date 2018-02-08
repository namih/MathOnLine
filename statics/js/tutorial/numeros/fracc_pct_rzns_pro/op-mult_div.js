function fraccion_1 () {
  	var numerador = document.getElementById('numerador_a').value;
  	var denominador = document.getElementById('denominador_a').value;
  	if (numerador != '' && denominador != '') {
		if (numerador == 10 && denominador == 3) {
  			
  			acierto();	
  		}else{
  			
  			error();
  		};
  	};
}
