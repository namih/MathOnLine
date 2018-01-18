function correcto() {
	$('#correcta').show();
	$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
		$("#correcta").slideUp(500);
	});
}

function error() {
	$('#error').show();
	$("#error").fadeTo(2000, 500).slideUp(500, function(){
		$("#error").slideUp(500);
	});
}

function fraction_left () {
	var x = document.getElementById('var_x').value;
	var num_x = x * 1;
	var den_x = x * 5;
	document.getElementById('equation_l').innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>'+x+'</mi><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mi>'+x+'</mi><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>'+num_x+'</mi><mi>'+den_x+'</mi></mfrac></math>';
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}
	
function fraction_right () {
	var y = document.getElementById('var_y').value;
	var num_y = y * 2;
	var den_y = y * 4;
	document.getElementById('equation_r').innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>'+num_y+'</mi><mi>'+den_y+'</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mstyle displaystyle="true"><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mi>'+y+'</mi></mstyle><mstyle displaystyle="true"><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mi>'+y+'</mi></mstyle></mfrac></math>';
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function show_second_2 () {
	document.getElementById('first').style.display = 'none';
	document.getElementById('second').style.display = 'inline';
}

function show_third_2 () {
	document.getElementById('second').style.display = 'none';
	document.getElementById('third').style.display = 'inline';
}