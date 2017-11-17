var ia = 1;
function incrementar_5__a () {
	switch (ia) {
		case 1:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>6</mn></mfrac></math>';
			ia++;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>9</mn></mfrac></math>';
			ia++;
			break;
		
		
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function decrementar_5__a () {
	switch (ia) {
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>6</mn></mfrac></math>';
			ia--;
			break;
		
	}