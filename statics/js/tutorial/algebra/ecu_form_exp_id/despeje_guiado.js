var numerator = 1;

function agregar_secuencia_1 () {
	console.log(numerator);
	var instruction	 = document.getElementById("instruction");
	var secuencia = document.getElementById("secuencia");
	var parrafo = document.createElement("h4");
	switch(numerator) {
		case 1:
			parrafo.innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>120</mn><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>34</mn></math>';
			parrafo.id='secuencia_'+numerator;
			secuencia.appendChild(parrafo);
			instruction.innerHTML = 'Se reducen los términos semejantes.';
			numerator++;
        break;
        case 2:
			parrafo.innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>154</mn></math>';
			parrafo.id='secuencia_'+numerator;
			secuencia.appendChild(parrafo);
			instruction.innerHTML = 'Se despeja la incógnita.';
			numerator++;
        break;
        case 3:
			parrafo.innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mn>154</mn><mo>/</mo><mn>2</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>77</mn></math>';
			parrafo.id='secuencia_'+numerator;
			secuencia.appendChild(parrafo);
			instruction.innerHTML = 'Resuelto';
			numerator++;
        break;
	} 
}

function eliminar_secuencia_1 () {
	console.log(numerator);
	var instruction	 = document.getElementById("instruction");
	switch(numerator) {
		case 2:
			$('#secuencia_'+(numerator-1)).remove();
			instruction.innerHTML = 'Se hace la transposición de términos.';
			numerator--;
        break;
		case 3:
			$('#secuencia_'+(numerator-1)).remove();	
			instruction.innerHTML = 'Se reducen los términos semejantes.';
			numerator--;
        break;
        case 4:
			$('#secuencia_'+(numerator-1)).remove();	
			instruction.innerHTML = 'Se despeja la incógnita.';
			numerator--;
        break;
        
	} 
}