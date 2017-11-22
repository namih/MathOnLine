var ia = 1;
var ib = 1;

function incrementar_5_a () {
	
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
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function decrementar_5_a () {
	switch (ia) {
			
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
		
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}


function decrementar_5_b () {
	
	switch (ib) {
			
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
			ia++;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			ia++;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			ia++;
			break;
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>15</mn></mfrac></math>';
			ia++;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>18</mn></mfrac></math>';
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
			ia--;
			break;
		case 5:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			ia--;
			break;	
		case 4:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			ia--;
			break;
		case 3:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			ia--;
			break;
		case 2:
			document.getElementById("frac1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math>';
			document.getElementById("res1").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math>';
			ia--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}