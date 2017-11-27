var ia = 1;
var ib = 1;


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
  			$('#correcta').show();
			$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
			$("#correcta").slideUp(500);
			});	
  		}else{
  			document.getElementById("vacio").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_octavos.png";
  			$('#error').show();
			$("#error").fadeTo(2000, 500).slideUp(500, function(){
			$("#error").slideUp(500);
			});
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
			ia++;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_novenos_azul.png";
			ia++;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_doceavos_azul.png";
			ia++;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>15</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_xv_azul.png";
			ia++;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_dieciochoavos_azul.png";
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
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/diez_xv_azul.png";
			ia--;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_doceavos_azul.png";
			ia--;
			break;	
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/seis_novenos_azul.png";
			ia--;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_sextos_azul.png";
			ia--;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math>';
			document.getElementById("quince_v").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_azul.png";
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
			ib++;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>3</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>15</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_xv_verde.png";
			ib++;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>4</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>20</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciséis_veinteavos_verde.png";
			ib++;
			break;
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>5</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>25</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veinte_veinticincoavos_verde.png";
			ib++;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xD7;</mo><mn>4</mn></mrow><mrow><mn>6</mn><mo>&#xD7;</mo><mn>5</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>24</mn><mn>30</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veinticuatro_treintavos_verde.png";
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
			ib--;
			break;
		case 5:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>8</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciséis_veinteavos_verde.png";
			ib--;
			break;	
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>6</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/doce_xv_verde.png";
			ib--;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>4</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_decimos_verde.png";
			ib--;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>';
			document.getElementById("quince_h").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_quintos_verde.png";
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
			ia++;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>15</mn><mn>18</mn></mfrac></math>';
			ia++;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>24</mn></mfrac></math>';
			ia++;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>25</mn><mn>30</mn></mfrac></math>';
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
			ia--;
			break;	
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>15</mn><mn>18</mn></mfrac></math>';
			ia--;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>12</mn></mfrac></math>';
			ia--;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>6</mn></mfrac></math>';
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
			ib++;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>6</mn></mfrac></math>';
			ib++;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			ib++;
			break;
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>15</mn></mfrac></math>';
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
			ib--;
			break;	
		case 4:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			ib--;
			break;
		case 3:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			ib--;
			break;
		case 2:
			document.getElementById("frac2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math>';
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
  			
  			$('#correcta').show();
			$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
			$("#correcta").slideUp(500);
			});	
  		}else{
  			
  			$('#error').show();
			$("#error").fadeTo(2000, 500).slideUp(500, function(){
			$("#error").slideUp(500);
			});
  		};
  	};
}
