var ia = 1;
var ib = 1;
var valor_a = false;
var valor_b = false;

function acierto () {
  	$('#correcta').show();
	$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
	$("#correcta").slideUp(500);
	});	
}

function error () {
  	$('#error').show();
	$("#error").fadeTo(2000, 500).slideUp(500, function(){
	$("#error").slideUp(500);
	});
}

function incrementar_3 () {
  	  	switch (ia) {
		case 1:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_1.png";
			ia++;
			break;
		case 2:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_2.png";
			ia++;
			break;
		case 3:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_3.png";
			ia++;
			break;
		case 4:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_4.png";
			ia++;
			break;
		case 5:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_5.png";
			ia++;
			break;
		case 6:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_6.png";
			ia++;
			break;
		case 7:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_7.png";
			ia++;
			break;
		case 8:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_8.png";
			ia++;
			break;
		case 9:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_9.png";
			ia++;
			break;
		case 10:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_10.png";
			ia++;
			break;	
		case 11:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>11</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_11.png";
			ia++;
			break;	
		case 12:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_12.png";
		    break;	
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_3 () {
	console.log(ia);
  	switch (ia) {
  		
		case 12:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>11</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_11.png";
			ia--;
			break;
		case 11:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_10.png";
			ia--;
			break;
		case 10:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_9.png";
			ia--;
			break;
		case 9:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_8.png";
			ia--;
			break;
		case 8:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_7.png";
			ia--;
			break;
		case 7:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_6.png";
			ia--;
			break;
		case 6:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_5.png";
			ia--;
			break;
		case 5:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_4.png";
			ia--;
			break;
		case 4:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_3.png";
			ia--;
			break;
		case 3:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_2.png";
			ia--;
			break;	
		case 2:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos_1.png";
			ia--;
			break;	
		case 1:
			document.getElementById("total").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>0</mn><mn>12</mn></mfrac></math>';
			document.getElementById("doce").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doceavos.png";
			break;	
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function fraccion_4 () {
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (numerador != '' && denominador != '') {
		if (numerador == 8 && denominador == 8) {
  			document.getElementById("vacio").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_octavos_red.png";
  			acierto();	
  		}else{
  			document.getElementById("vacio").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_octavos.png";
  			error();
  		};
  	};
}


function incrementar_5_a () {
	console.log(ia);
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
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>12</mn></mfrac></math>';
			ia++;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>15</mn></mfrac></math>';
			ia++;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>18</mn></mfrac></math>';
			ia++;
			break;
		case 6:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>21</mn></mfrac></math>';
			ia++;
			break;
		case 7:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>24</mn></mfrac></math>';
			ia++;
			break;
		case 8:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>27</mn></mfrac></math>';
			ia++;
			break;
		case 9:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>10</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>10</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>30</mn></mfrac></math>';
			ia++;
			break;
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function decrementar_5_a () {
	switch (ia) {
		
		case 10:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>27</mn></mfrac></math>';
			ia--;
			break;
		case 9:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>24</mn></mfrac></math>';
			ia--;
			break;
		case 8:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>21</mn></mfrac></math>';
			ia--;
			break;	
		case 7:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>18</mn></mfrac></math>';
			ia--;
			break;
		case 6:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>15</mn></mfrac></math>';
			ia--;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>12</mn></mfrac></math>';
			ia--;
			break;	
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>9</mn></mfrac></math>';
			ia--;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>6</mn></mfrac></math>';
			ia--;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math>';
			ia--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_5_b () {
	switch (ib) {
		case 1:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>4</mn></mfrac></math>';
			ib++;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>6</mn></mfrac></math>';
			ib++;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>8</mn></mfrac></math>';
			ib++;
			break;
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>10</mn></mfrac></math>';
			ib++;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>12</mn></mfrac></math>';
			ib++;
			break;
		case 6:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>14</mn></mfrac></math>';
			ib++;
			break;
		case 7:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>16</mn></mfrac></math>';
			ib++;
			break;
		case 8:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>18</mn></mfrac></math>';
			ib++;
			break;
		case 9:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>10</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>10</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>20</mn></mfrac></math>';
			ib++;
			break;
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}


function decrementar_5_b () {
	
	switch (ib) {
		
		case 10:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>18</mn></mfrac></math>';
			ib--;
			break;
		case 9:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>16</mn></mfrac></math>';
			ib--;
			break;
		case 8:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>14</mn></mfrac></math>';
			ib--;
			break;	
		case 7:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>12</mn></mfrac></math>';
			ib--;
			break;
		case 6:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>10</mn></mfrac></math>';
			ib--;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>8</mn></mfrac></math>';
			ib--;
			break;	
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>6</mn></mfrac></math>';
			ib--;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>4</mn></mfrac></math>';
			ib--;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>';
			ib--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}


function incrementar_6_a () {
  	switch (ia) {
		case 1:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_sextos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_sextos.png";
			ia++;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_novenos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_novenos.png";
			ia++;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_doceavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_doceavos.png";
			ia++;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>15</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_quinceavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_xv.png";
			ia++;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_dieciochoavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_dieciochoavos.png";
			ia++;
			break;
			
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_6_a () {
	switch (ia) {
		case 6:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>15</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_quinceavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_xv.png";
			ia--;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_doceavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_doceavos.png";
			ia--;
			break;	
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_novenos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_novenos.png";
			ia--;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_sextos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_sextos.png";
			ia--;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_tercios.png";
			ia--;
			break;
			
			
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_6_b () {
	switch (ib) {
		case 1:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>2</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>10</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_decimos_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_decimos.png";
			ib++;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>3</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>15</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_quinceavos_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_quinceavos.png";
			ib++;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>4</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>20</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciseis_veinteavos_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_veinteavos.png";
			ib++;
			break;
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>5</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>25</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veinte_veinticincoavos_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_veinticincoavos.png";
			ib++;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>6</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>24</mn><mn>30</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veinticuatro_treintavos_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_treintavos.png";
			ib++;
			break;
			
			
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}


function decrementar_6_b () {
	
	switch (ib) {
			
		case 6:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>10</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veinte_veinticincoavos_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_veinticincoavos.png";
			ib--;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>8</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciseis_veinteavos_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_veinteavos.png";
			ib--;
			break;	
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>6</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_quinceavos_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_quinceavos.png";
			ib--;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>4</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_decimos_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_decimos.png";
			
			ib--;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_quintos_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_quintos.png";
			ib--;
			break;
			
			
	
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_7_a () {
	
	switch (ia) {
		case 1:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>12</mn></mfrac></math>';
			document.getElementById("frac_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_doceavos_azul.png";
			document.getElementById("porcion_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_doceavos.png";
			ia++;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>15</mn><mn>18</mn></mfrac></math>';
			document.getElementById("frac_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/xv_dieciochoavos_azul.png";
			document.getElementById("porcion_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_dieciochoavos2.png";
			ia++;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>24</mn></mfrac></math>';
			document.getElementById("frac_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veinte_veinticuatroavos_azul.png";
			document.getElementById("porcion_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_veinticuatroavos.png";
			ia++;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>25</mn><mn>30</mn></mfrac></math>';
			document.getElementById("frac_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veinticinco_treintavos_azul.png";
			document.getElementById("porcion_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_treintavos.png";
			ia++;
			break;
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function decrementar_7_a () {
	switch (ia) {
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>24</mn></mfrac></math>';
			document.getElementById("frac_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veinte_veinticuatroavos_azul.png";
			document.getElementById("porcion_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_veinticuatroavos.png";
			ia--;
			break;	
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>15</mn><mn>18</mn></mfrac></math>';
			document.getElementById("frac_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/xv_dieciochoavos_azul.png";
			document.getElementById("porcion_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_dieciochoavos2.png";
			ia--;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>12</mn></mfrac></math>';
			document.getElementById("frac_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_doceavos_azul.png";
			document.getElementById("porcion_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_doceavos.png";
			ia--;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>6</mn></mfrac></math>';
			document.getElementById("frac_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cinco_sextos_azul.png";
			document.getElementById("porcion_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_sextos.png";
			ia--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_7_b () {
	switch (ib) {
		case 1:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			document.getElementById("frac_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_sextos_verde.png";
			document.getElementById("porcion_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_sextos.png";
			ib++;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			document.getElementById("frac_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_novenos_verde.png";
			document.getElementById("porcion_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_novenos.png";
			ib++;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("frac_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_doceavos_verde.png";
			document.getElementById("porcion_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_doceavos.png";
			ib++;
			break;
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>15</mn></mfrac></math>';
			document.getElementById("frac_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_quinceavos_verde.png";
			document.getElementById("porcion_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_quinceavos.png";
			ib++;
			break;
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}


function decrementar_7_b () {
	
	switch (ib) {
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("frac_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_doceavos_verde.png";
			document.getElementById("porcion_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_doceavos.png";
			ib--;
			break;	
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			document.getElementById("frac_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_novenos_verde.png";
			document.getElementById("porcion_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_novenos.png";
			ib--;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			document.getElementById("frac_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_sextos_verde.png";
			document.getElementById("porcion_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_sextos.png";
			ib--;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math>';
			document.getElementById("frac_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_verde.png";
			document.getElementById("porcion_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_tercios.png";
			ib--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function fraccion_7 () {
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (numerador != '' && denominador != '') {
		if (numerador == 9 && denominador == 6) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function incrementar_8_a () {
	
	switch (ia) {
		case 1:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>8</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>12</mn></mfrac></math>';
			ia++;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>8</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>24</mn><mn>18</mn></mfrac></math>';
			ia++;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>8</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>32</mn><mn>24</mn></mfrac></math>';
			ia++;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>8</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>40</mn><mn>30</mn></mfrac></math>';
			ia++;
			break;
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function decrementar_8_a () {
	switch (ia) {
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>8</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>32</mn><mn>24</mn></mfrac></math>';
			ia--;
			break;	
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>8</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>24</mn><mn>18</mn></mfrac></math>';
			ia--;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>8</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>12</mn></mfrac></math>';
			ia--;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>8</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>6</mn></mfrac></math>';
			ia--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_8_b () {
	switch (ib) {
		case 1:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>4</mn></mfrac></math>';
			ib++;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>6</mn></mfrac></math>';
			ib++;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>8</mn></mfrac></math>';
			ib++;
			break;
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>10</mn></mfrac></math>';
			ib++;
			break;
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}


function decrementar_8_b () {
	
	switch (ib) {
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>8</mn></mfrac></math>';
			ib--;
			break;	
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>6</mn></mfrac></math>';
			ib--;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>4</mn></mfrac></math>';
			ib--;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>';
			ib--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function fraccion_8 () {
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (numerador != '' && denominador != '') {
		if (numerador == 11 && denominador == 6) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_9_a () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if (numerador_a == 7 && denominador_a == 14) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_9_b () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if (numerador_b == 6 && denominador_b == 14) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_9_c () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (numerador_c != '' && denominador_c != '') {
		if (numerador_c == 13 && denominador_c == 14) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_10_a () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if (numerador_a == 15 && denominador_a == 20) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_10_b () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if (numerador_b == 8 && denominador_b == 20) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_10_c () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (numerador_c != '' && denominador_c != '') {
		if (numerador_c == 23 && denominador_c == 20) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_11_a () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if (numerador_a == 10 && denominador_a == 20) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_11_b () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if (numerador_b == 16 && denominador_b == 20) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_11_c () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (numerador_c != '' && denominador_c != '') {
		if (numerador_c == 26 && denominador_c == 20) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_12 () {
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (numerador != '' && denominador != '') {
		if (numerador == 10 && denominador == 13) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_13_a () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if (numerador_a == 5 && denominador_a == 20) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_13_b () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if (numerador_b == 8 && denominador_b == 20) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_13_c () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (numerador_c != '' && denominador_c != '') {
		if (numerador_c == 13 && denominador_c == 20) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_14_a () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if (numerador_a == 18 && denominador_a == 30) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_14_b () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if (numerador_b == 25 && denominador_b == 30) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_14_c () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (numerador_c != '' && denominador_c != '') {
		if (numerador_c == 43 && denominador_c == 30) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_15 () {
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (numerador != '' && denominador != '') {
		if (numerador == 9 && denominador == 6) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}


function fraccion_mixta_16 () {
	var entero = document.getElementById('entero').value;
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (entero != '' && numerador != '' && denominador != '') {
		if (entero == 1 && numerador == 1 && denominador == 2) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function decimal_17 () {
  	var decimal = document.getElementById('decimal').value;
  	  	if (decimal != '') {
			if (decimal == 10.5) {
  				acierto();
  			}else{
  				error();
  			};	
  		};
}

function fraccion_mixta_17 () {
	var entero = document.getElementById('entero').value;
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (entero != '' && numerador != '' && denominador != '') {
		if (entero == 10 && numerador == 1 && denominador == 2) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function decimal_18 () {
  	var decimal = document.getElementById('decimal').value;
  	  	if (decimal != '') {
			if (decimal == 4.666) {
  				acierto();	
  			}else{
	  			error();
  			};	
  		};
}

function fraccion_mixta_18 () {
	var entero = document.getElementById('entero').value;
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (entero != '' && numerador != '' && denominador != '') {
		if (entero == 4 && numerador == 2 && denominador == 3) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_19_a () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if (numerador_a == 2 && denominador_a == 6) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_19_b () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if (numerador_b == 3 && denominador_b == 6) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_19_c () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (numerador_c != '' && denominador_c != '') {
		if (numerador_c == 5 && denominador_c == 6) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_20_a () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if (numerador_a == 30 && denominador_a == 40) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_20_b () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if (numerador_b == 24 && denominador_b == 40 ) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_20_c () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (numerador_c != '' && denominador_c != '') {
		if (numerador_c == 54 && denominador_c == 40) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function entero_21 () {
  	var entero = document.getElementById('entero').value;
  	  	if (entero != '') {
			if (entero == 4) {
  				acierto();
  			}else{
  				error();
  			};	
  		};
}

function fraccion_21_a () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if (numerador_a == 4 && denominador_a == 8) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_21_b () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if (numerador_b == 6 && denominador_b == 8 ) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_21_c () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (numerador_c != '' && denominador_c != '') {
		if (numerador_c == 10 && denominador_c == 8) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_mixta_22a () {
	var entero_a = document.getElementById('entero_a').value;
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (entero_a != '' && numerador_a != '' && denominador_a != '') {
		if (entero_a == 2 && numerador_a == 3 && denominador_a == 6) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_mixta_22b () {
	var entero_b = document.getElementById('entero_b').value;
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (entero_b != '' && numerador_b != '' && denominador_b != '') {
		if (entero_b == 1 && numerador_b == 4 && denominador_b == 6) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_mixta_22c () {
	var entero_c = document.getElementById('entero_c').value;
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (entero_c != '' && numerador_c != '' && denominador_c != '') {
		if (entero_c == 3 && numerador_c == 7 && denominador_c == 6) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function numerador_23 () {
	var numerador_a = document.getElementById('numerador_a').value;
	var numerador_b = document.getElementById('numerador_b').value;
	var numerador_c = document.getElementById('numerador_c').value;
	var numerador_d = document.getElementById('numerador_d').value;
  	if (numerador_a != '' && numerador_b != '' && numerador_c != '' && numerador_d != '') {
		if (numerador_a == 2 && numerador_b == 2 && numerador_c == 1 && numerador_d == 3) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function numerador_a_24 () {
	var numerador_a = document.getElementById('numerador_a').value;
	var numerador_b = document.getElementById('numerador_b').value;
	var numerador_c = document.getElementById('numerador_c').value;
	var numerador_d = document.getElementById('numerador_d').value;
  	if (numerador_a != '' && numerador_b != '' && numerador_c  != '' && numerador_d != '' ) {
		if (numerador_a == 8 && numerador_b == 8 && numerador_c == 1 && numerador_d == 9) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}



function numerador_25 () {
	var numerador_a = document.getElementById('numerador_a').value;
	var numerador_b = document.getElementById('numerador_b').value;
	var numerador_c = document.getElementById('numerador_c').value;
	var numerador_d = document.getElementById('numerador_d').value;
	var numerador_e = document.getElementById('numerador_e').value;
	var numerador_f = document.getElementById('numerador_f').value;
  	if (numerador_a != '' && numerador_b != '' && numerador_c != '' && numerador_d != '' && numerador_e != '' && numerador_f != '') {
		if (numerador_a == 4 && numerador_b == 4 && numerador_c == 48 && numerador_d == 48 && numerador_e == 3 && numerador_f == 51) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function numerador_26 () {
	var numerador_a = document.getElementById('numerador_a').value;
  	var numerador_b = document.getElementById('numerador_b').value;
  	var numerador_c = document.getElementById('numerador_c').value;
   	if (numerador_a != '' && numerador_b != '' && numerador_c != '') {
		if (numerador_a == 12 && numerador_b == 1 && numerador_c == 13) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_27 () {
	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	
   	if (numerador != '' && denominador != '') {
		if (numerador == 11 && denominador == 2) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_28_a () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if (numerador_a == 4 && denominador_a == 2) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_28_b () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if (numerador_b == 3 && denominador_b == 3) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function numerador_28 () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var numerador_d = document.getElementById('numerador_d').value;
   	if (numerador_c != '' && numerador_d != '') {
		if (numerador_c == 5 && numerador_d == 4) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_28_c () {
  	var numerador_e = document.getElementById('numerador_e').value;
  	var denominador_e = document.getElementById('denominador_e').value;
  	if (numerador_e != '' && denominador_e != '') {
		if (numerador_e == 15 && denominador_e == 6) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_28_d () {
  	var numerador_f = document.getElementById('numerador_f').value;
  	var denominador_f = document.getElementById('denominador_f').value;
  	if (numerador_f != '' && denominador_f != '') {
		if (numerador_f == 8 && denominador_f == 6) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_mixta_28 () {
	var entero_g = document.getElementById('entero_g').value;
  	var numerador_g = document.getElementById('numerador_g').value;
  	var denominador_g = document.getElementById('denominador_g').value;
  	if (entero_g != '' && numerador_g != '' && denominador_g != '') {
		if (entero_g == 3 && numerador_g == 5 && denominador_g == 6) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_29_a () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if (numerador_a == 4 && denominador_a == 2) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_29_b () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if (numerador_b == 3 && denominador_b == 3) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_29_e () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	var numerador_d = document.getElementById('numerador_d').value;
  	var denominador_d = document.getElementById('denominador_d').value;
   	if (numerador_c != '' && denominador_c != '' && numerador_d != '' && denominador_d != '') {
		if (numerador_c == 5 && denominador_c == 2 && numerador_d == 4 && denominador_d == 3) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_29_c () {
  	var numerador_e = document.getElementById('numerador_e').value;
  	var denominador_e = document.getElementById('denominador_e').value;
  	if (numerador_e != '' && denominador_e != '') {
		if (numerador_e == 15 && denominador_e == 6) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_29_d () {
  	var numerador_f = document.getElementById('numerador_f').value;
  	var denominador_f = document.getElementById('denominador_f').value;
  	if (numerador_f != '' && denominador_f != '') {
		if (numerador_f == 8 && denominador_f == 6) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_mixta_29 () {
	var entero_g = document.getElementById('entero_g').value;
  	var numerador_g = document.getElementById('numerador_g').value;
  	var denominador_g = document.getElementById('denominador_g').value;
  	if (entero_g != '' && numerador_g != '' && denominador_g != '') {
		if (entero_g == 3 && numerador_g == 5 && denominador_g == 6) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function incrementar_31 () {
  	  	switch (ia) {
		case 1:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_onceavo_vnaranja.png";
			ia++;
			break;
		case 2:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_onceavos_vnaranja.png";
			ia++;
			break;
		case 3:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/tres_onceavos_vnaranja.png";
			ia++;
			break;
		case 4:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_onceavos_vnaranja.png";
			ia++;
			break;
		case 5:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cinco_onceavos_vnaranja.png";
			ia++;
			break;
		case 6:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_onceavos_vnaranja.png";
			ia++;
			break;
		case 7:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/siete_onceavos_vnaranja.png";
			ia++;
			break;
		case 8:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_onceavos_vnaranja.png";
			ia++;
			break;
		case 9:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/nueve_onceavos_vnaranja.png";
			ia++;
			break;
		case 10:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_onceavos_vnaranja.png";
			ia++;
			break;	
		case 11:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>11</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/once_onceavos_vnaranja.png";
			ia++;
			break;	
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_31 () {
	console.log(ia);
  	switch (ia) {
  		case 12:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_onceavos_vnaranja.png";
			ia--;
			break;
		case 11:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/nueve_onceavos_vnaranja.png";
			ia--;
			break;
		case 10:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_onceavos_vnaranja.png";
			ia--;
			break;
		case 9:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/siete_onceavos_vnaranja.png";
			ia--;
			break;
		case 8:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_onceavos_vnaranja.png";
			ia--;
			break;
		case 7:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cinco_onceavos_vnaranja.png";
			ia--;
			break;
		case 6:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_onceavos_vnaranja.png";
			ia--;
			break;
		case 5:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/tres_onceavos_vnaranja.png";
			ia--;
			break;
		case 4:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_onceavos_vnaranja.png";
			ia--;
			break;	
		case 3:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_onceavo_vnaranja.png";
			ia--;
			break;	
		case 2:
			document.getElementById("numerador").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>0</mn><mn>11</mn></mfrac></math>';
			document.getElementById("onceavos").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cero_onceavos_vnaranja.png";
			break;	
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function correcto_32() {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value; 
	var mostrar = document.getElementById('intro');
	if (numerador != '' && denominador != '') {
		if (numerador == 2 && denominador == 3) {
			acierto();
			mostrar.disabled = false;
		}else{
			error();
		};
	};
}

function mostrar_32 () {
	var figuras = document.getElementById('pictures');
  	var mostrar = document.getElementById('intro');
  	if (figuras.style.display == 'none') {
  		figuras.style.display = 'block';
  	} else{
  		figuras.style.display = 'none';
  		mostrar.disabled = true;
  	};
}


function incrementar_33_a () {
	console.log(ia);
	switch (ia) {
		case 1:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>8</mn></mfrac></math>';
			ia++;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>12</mn></mfrac></math>';
			
			ia++;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>16</mn></mfrac></math>';
			ia++;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>20</mn></mfrac></math>';
			ia++;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>24</mn></mfrac></math>';
			ia++;
			break;
		case 6:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>28</mn></mfrac></math>';
			ia++;
			break;
		case 7:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>32</mn></mfrac></math>';
			ia++;
			break;
		case 8:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>36</mn></mfrac></math>';
			ia++;
			break;
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function decrementar_33_a () {
	switch (ia) {
		

		case 9:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>32</mn></mfrac></math>';
			ia--;
			break;
		case 8:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>28</mn></mfrac></math>';
			ia--;
			break;	
		case 7:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>24</mn></mfrac></math>';
			ia--;
			break;
		case 6:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>20</mn></mfrac></math>';
			ia--;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>16</mn></mfrac></math>';
			ia--;
			break;	
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>12</mn></mfrac></math>';
			ia--;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>8</mn></mfrac></math>';
			ia--;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>4</mn></mfrac></math>';
			ia--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_33_b () {
	switch (ib) {
		case 1:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>12</mn></mfrac></math>';
			ib++;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>18</mn></mfrac></math>';
			ib++;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>24</mn></mfrac></math>';
			ib++;
			break;
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>30</mn></mfrac></math>';
			ib++;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>36</mn></mfrac></math>';
			ib++;
			break;
		case 6:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>42</mn></mfrac></math>';
			ib++;
			break;
		case 7:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>48</mn></mfrac></math>';
			ib++;
			break;
		case 8:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>54</mn></mfrac></math>';
			ib++;
			break;
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}


function decrementar_33_b () {
	
	switch (ib) {
		case 9:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>48</mn></mfrac></math>';
			ib--;
			break;
		case 8:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>42</mn></mfrac></math>';
			ib--;
			break;	
		case 7:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>36</mn></mfrac></math>';
			ib--;
			break;
		case 6:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>30</mn></mfrac></math>';
			ib--;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>24</mn></mfrac></math>';
			ib--;
			break;	
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>18</mn></mfrac></math>';
			ib--;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>12</mn></mfrac></math>';
			ib--;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>6</mn></mfrac></math>';
			ib--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function mismo_denominador_33 () {
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (numerador != '' && denominador != '') {
		if ((numerador == 1 && denominador == 12) || (numerador == 2 && denominador == 24) || (numerador == 3 && denominador == 36)) {
			acierto();
			document.getElementById("correcto").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_onceavo_vnaranja.png";
		}else{
			error();
			document.getElementById("correcto").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/tache.png";
		};
	};
}

function correcto_34_o () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if ((numerador_a == 15 && denominador_a == 20)) {
			acierto();
		}else{
			error();
		};
	};
}

function correcto_34_oo () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if ((numerador_b == 8 && denominador_b == 20)) {
			acierto();
		}else{
			error();
		};
	};
}

function correcto_34_ooo () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (numerador_c != '' && denominador_c != '') {
		if ((numerador_c == 7 && denominador_c == 20)) {
			acierto();
		}else{
			error();
		};
	};
}

function correcto_34_a () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if ((numerador_a == 4 && denominador_a == 12) && (numerador_b == 8 && denominador_b == 24) || (numerador_b == 12 && denominador_b == 36)) {
			acierto();
		}else{
			error();
		};
	};
}

function correcto_34_aa () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if ((numerador_b == 6 && denominador_b == 12) || (numerador_b == 12 && denominador_b == 24) || (numerador_b == 18 && denominador_b == 36)) {
			acierto();
		}else{
			error();
		};
	};
}

function correcto_34_aaa () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (numerador_c != '' && denominador_c != '') {
		if ((numerador_c ==-2 && denominador_c == 12) || (numerador_b == -4 && denominador_b == 12) || (numerador_b == -6 && denominador_b == 36)) {
			acierto();
		}else{
			error();
		};
	};
}

function correcto_34_b () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	if (numerador_a != '' && denominador_a != '') {
		if ((numerador_a == 4 && denominador_a == 8) || (numerador_b == 8 && denominador_b == 16)) {
			acierto();
		}else{
			error();
		};
	};
}

function correcto_34_bb () {
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_b != '' && denominador_b != '') {
		if ((numerador_b == 2 && denominador_b == 8) || (numerador_b == 4 && denominador_b == 16)) {
			acierto();
		}else{
			error();
		};
	};
}

function correcto_34_bbb () {
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	if (numerador_c != '' && denominador_c != '') {
		if ((numerador_c == 2 && denominador_c == 8) || (numerador_b == 4 && denominador_b == 16)) {
			acierto();
		}else{
			error();
		};
	};
}

function incrementar_35_a () {
	console.log(ia);
  	switch (ia) {
  		
		case 1:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_sextos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_sextos.png";
			ia++;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_novenos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_novenos.png";
			ia++;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_doceavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_doceavos.png";
			ia++;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>15</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_quinceavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_xv.png";
			ia++;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_dieciochoavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_dieciochoavos.png";
			ia++;
			break;
		case 6:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>21</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/catorce_veintiunavos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_veintiunavos_v.png";
			ia++;
			break;
		case 7:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciseis_veinticuatroavos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_veinticuatroavos_v.png";
			ia++;
			break;
		case 8:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>18</mn><mn>27</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_veintisieteavos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_veintisieteavos_v.png";
			ia++;
			break;
		}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_35_a () {
	switch (ia) {
		case 9:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciseis_veinticuatroavos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_veinticuatroavos_v.png";
			ia--;
			break;
		case 8:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>21</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/catorce_veintiunavos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_veintiunavos_v.png";
			ia--;
			break;
		
		case 7:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_dieciochoavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_dieciochoavos.png";
			ia--;
			break;
		case 6:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>15</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_quinceavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_xv.png";
			ia--;
			break;	
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_doceavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_doceavos.png";
			ia--;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_novenos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_novenos.png";
			ia--;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_sextos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_sextos.png";
			ia--;
			break;
			
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_tercios.png";
			break;
			
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_35_b () {
	switch (ib) {
		case 1:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>12</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_doceavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_doceavos_h.png";
			ib++;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>18</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_dieciochoavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_dieciochoavos.png";
			ib++;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_veinticuatroavos_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_veinticuatroavos.png";
			ib++;
			break;
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>30</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_treintavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_treintavos.png";
			ib++;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>6</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>36</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_treintaiseisavos_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_treintaiseisavos.png";
			ib++;
			break;
			
		case 6:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>42</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/catorce_cuarentaidosavos_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_cuarentaidosavos.png";
			ib++;
			break;
		
		case 7:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>8</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>48</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciseis_cuarentaiochoavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_cuarentaiochoavos.png";
			ib++;
			break;
			
		case 8:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>9</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>18</mn><mn>54</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_cincuentaicuatroavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_cincuentaicuatroavos.png";
			ib++;
			break;
			
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}


function decrementar_35_b () {
	
	switch (ib) {
		case 9:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>8</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>48</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciseis_cuarentaiochoavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_cuarentaiochoavos.png";
			ib--;
			break;
			
		case 8:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>42</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/catorce_cuarentaidosavos_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_cuarentaidosavos.png";
			ib--;
			break;
			
		case 7:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>6</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>36</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_treintaiseisavos_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_treintaiseisavos.png";
			ib--;
			break;	
		
		case 6:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>30</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_treintavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_treintavos.png";
			ib--;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_veinticuatroavos_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_veinticuatroavos.png";
			ib--;
			break;	
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>18</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_dieciochoavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_dieciochoavos.png";
			ib--;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>12</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_doceavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_doceavos_h.png";
			
			ib--;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>6</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_sextos_h_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h2_sextos.png";
			break;
		}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}
function incrementar_35a_a () {
	console.log(ia);
  	switch (ia) {
  		
		case 1:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>6</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_sextos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_sextos.png";
			ia++;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>9</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/tres_novenos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_novenos.png";
			ia++;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>12</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_doceavos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_doceavos.png";
			ia++;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>15</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cinco_quinceavos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_xv.png";
			ia++;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>18</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_dieciochoavos_v_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_dieciochoavos.png";
			ia++;
			break;
		case 6:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>21</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/siete_veintiunavos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_veintiunavos_v.png";
			ia++;
			break;
		case 7:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/8_24_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_veinticuatroavos_v.png";
			ia++;
			break;
		case 8:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>9</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>27</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/9_27_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_veintisieteavos_v.png";
			ia++;
			break;
		}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_35a_a () {
	switch (ia) {
		case 9:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/8_24_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_veinticuatroavos_v.png";
			ia--;
			break;
		case 8:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>21</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/siete_veintiunavos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_veintiunavos_v.png";
			ia--;
			break;
		
		case 7:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>18</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_dieciochoavos_v_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_dieciochoavos.png";
			ia--;
			break;
		case 6:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>15</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cinco_quinceavos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_xv.png";
			ia--;
			break;	
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_doceavos_azul.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_doceavos.png";
			ia--;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>9</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/tres_novenos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_novenos.png";
			ia--;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>6</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_sextos_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_sextos.png";
			ia--;
			break;
			
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/1_3_v_azul.png.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_tercios.png";
			break;
			
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_35a_b () {
	switch (ib) {
		case 1:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>8</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_octavos_h_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_octavos.png";
			ib++;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>12</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/6_12_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_doceavos.png";
			ib++;
			break;
			
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>16</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_dieciseisavos_h_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_dieciseisavos.png";
			ib++;
			break;
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>20</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_veinteavos_h_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h2_veinteavos.png";
			ib++;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>6</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_veinticuatroavos_h_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_veinticuatroavos.png";
			ib++;
			break;
			
		case 6:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>28</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/catorce_veintiochoavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_28.png";
			ib++;
			break;
		
		case 7:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>8</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>32</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciseis_treintaidosavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_32.png";
			ib++;
			break;
			
		case 8:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>9</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>18</mn><mn>36</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/18_36_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_36.png";
			ib++;
			break;
			
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}


function decrementar_35a_b () {
	
	switch (ib) {
		case 9:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>8</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>32</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciseis_treintaidosavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_32.png";
			ib--;
			break;
			
		case 8:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>28</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/catorce_veintiochoavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_28.png";
			ib--;
			break;
			
		case 7:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>6</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_veinticuatroavos_h_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_veinticuatroavos.png";
			ib--;
			break;	
		
		case 6:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>20</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_veinteavos_h_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h2_veinteavos.png";
			ib--;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>16</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_dieciseisavos_h_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_dieciseisavos.png";
			ib--;
			break;	
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>12</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/6_12_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_doceavos.png";
			ib--;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xD7;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>8</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_octavos_h_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_octavos.png";
			
			ib--;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>2</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_cuartos_v_verde.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_cuartos.png";
			break;
		}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}
function incrementar_35b_a () {
	console.log(ia);
  	switch (ia) {
  		
		case 1:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/8_12_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_12.png";
			ia++;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/12_18_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_18.png";
			ia++;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/16_24_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_24.png";
			ia++;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>30</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/20_30_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_30.png";
			ia++;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>24</mn><mn>36</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/24_36_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_36.png";
			ia++;
			break;
		case 6:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>28</mn><mn>42</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/28_42_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_42.png";
			ia++;
			break;
		case 7:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>32</mn><mn>48</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/32_48_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_48.png";
			ia++;
			break;
		case 8:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>36</mn><mn>54</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/36_54_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_54.png";
			ia++;
			break;
		}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_35b_a () {
	switch (ia) {
		case 9:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>32</mn><mn>48</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/32_48_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_48.png";
			ia--;
			break;
		case 8:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>28</mn><mn>42</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/28_42_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_42.png";
			ia--;
			break;
		
		case 7:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>24</mn><mn>36</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/24_36_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_36.png";
			ia--;
			break;
		case 6:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>30</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/20_30_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_30.png";
			ia--;
			break;	
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/16_24_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_24.png";
			ia--;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/12_18_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_18.png";
			ia--;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/8_12_v.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_12.png";
			ia--;
			break;
			
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			document.getElementById("division_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_6.png";
			document.getElementById("porcion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_tercios.png";
			break;
			
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_35b_b () {
	switch (ib) {
		case 1:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>10</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_10.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/4_10_h.png";
			ib++;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>3</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/12_18_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_dieciochoavos.png";
			ib++;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/16_24_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_24.png";
			ib++;
			break;
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>5</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>30</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/20_30_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_30.png";
			ib++;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>6</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>24</mn><mn>36</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/24_36_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_36.png";
			ib++;
			break;
			
		case 6:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>7</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>28</mn><mn>42</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/28_42_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_42.png";
			ib++;
			break;
		
		case 7:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>8</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>32</mn><mn>48</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/32_48_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_48.png";
			ib++;
			break;
			
		case 8:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>9</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>9</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>36</mn><mn>54</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/36_54_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_54.png";
			ib++;
			break;
			
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}


function decrementar_35b_b () {
	
	switch (ib) {
		case 9:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>8</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>8</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>32</mn><mn>48</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/32_48_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_48.png";
			ib--;
			break;
			
		case 8:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>7</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>28</mn><mn>42</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/28_42_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_42.png";
			ib--;
			break;
			
		case 7:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>6</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>24</mn><mn>36</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/24_36_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_36.png";
			ib--;
			break;	
		
		case 6:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>5</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>30</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/20_30_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_v_30.png";
			ib--;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>24</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/16_24_v.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_24.png";
			ib--;
			break;	
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xD7;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>18</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_dieciochoavos_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_dieciochoavos.png";
			ib--;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xD7;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>10</mn></mfrac></math>';
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/4_10_h.png";
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_10.png";
			ib--;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>5</mn></mfrac></math>';
			document.getElementById("division_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/2_5_h.png";
			document.getElementById("porcion2").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/porcion_h_5.png";
			break;
		}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

