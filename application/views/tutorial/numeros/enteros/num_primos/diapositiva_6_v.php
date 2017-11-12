 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_6.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/num_primos/styles_primos.css">
<div class="container-fluid">
	<div>
		<p>A continuación se muestran los enteros del 1 al 50. Vamos a marcar (dar clic) todos los números que son primos:</p>
	 	
	</div>
	<br/><br/>
	<div id="seccion" >
		<section>
			<div class="tablaDiv" id="1" onclick="color(1)">1</div>
			<div class="tablaDiv" id="2" onclick="color(2)">2</div>
			<div class="tablaDiv" id="3" onclick="color(3)">3</div>
			<div class="tablaDiv" id="4" onclick="color(4)">4</div>
			<div class="tablaDiv" id="5" onclick="color(5)">5</div>
			<div class="tablaDiv" id="6" onclick="color(6)">6</div>
			<div class="tablaDiv" id="7" onclick="color(7)">7</div>
			<div class="tablaDiv" id="8" onclick="color(8)">8</div>
			<div class="tablaDiv" id="9" onclick="color(9)">9</div>
			<div class="tablaDiv" id="10" onclick="color(10)">10</div>
		</section>
		<br />
		<section>
			<div class="tablaDiv" id="11" onclick="color(11)">11</div>
			<div class="tablaDiv" id="12" onclick="color(12)">12</div>
			<div class="tablaDiv" id="13" onclick="color(13)">13</div>
			<div class="tablaDiv" id="14" onclick="color(14)">14</div>
			<div class="tablaDiv" id="15" onclick="color(15)">15</div>
			<div class="tablaDiv" id="16" onclick="color(16)">16</div>
			<div class="tablaDiv" id="17" onclick="color(17)">17</div>
			<div class="tablaDiv" id="18" onclick="color(18)">18</div>
			<div class="tablaDiv" id="19" onclick="color(19)">19</div>
			<div class="tablaDiv" id="20" onclick="color(20)">20</div>
		</section>
		<br />
			<div class="tablaDiv" id="21" onclick="color(21)">21</div>
			<div class="tablaDiv" id="22" onclick="color(22)">22</div>
			<div class="tablaDiv" id="23" onclick="color(23)">23</div>
			<div class="tablaDiv" id="24" onclick="color(24)">24</div>
			<div class="tablaDiv" id="25" onclick="color(25)">25</div>
			<div class="tablaDiv" id="26" onclick="color(26)">26</div>
			<div class="tablaDiv" id="27" onclick="color(27)">27</div>
			<div class="tablaDiv" id="28" onclick="color(28)">28</div>
			<div class="tablaDiv" id="29" onclick="color(29)">29</div>
			<div class="tablaDiv" id="30" onclick="color(30)">30</div>
		</section>
		<br />
		<section>
			<div class="tablaDiv" id="31" onclick="color(31)">31</div>
			<div class="tablaDiv" id="32" onclick="color(32)">32</div>
			<div class="tablaDiv" id="33" onclick="color(33)">33</div>
			<div class="tablaDiv" id="34" onclick="color(34)">34</div>
			<div class="tablaDiv" id="35" onclick="color(35)">35</div>
			<div class="tablaDiv" id="36" onclick="color(36)">36</div>
			<div class="tablaDiv" id="37" onclick="color(37)">37</div>
			<div class="tablaDiv" id="38" onclick="color(38)">38</div>
			<div class="tablaDiv" id="39" onclick="color(39)">39</div>
			<div class="tablaDiv" id="40" onclick="color(40)">40</div>
		</section>
		<br />
		<section>
			<div class="tablaDiv" id="41" onclick="color(41)">41</div>
			<div class="tablaDiv" id="42" onclick="color(42)">42</div>
			<div class="tablaDiv" id="43" onclick="color(43)">43</div>
			<div class="tablaDiv" id="44" onclick="color(44)">44</div>
			<div class="tablaDiv" id="45" onclick="color(45)">45</div>
			<div class="tablaDiv" id="46" onclick="color(46)">46</div>
			<div class="tablaDiv" id="47" onclick="color(47)">47</div>
			<div class="tablaDiv" id="48" onclick="color(48)">48</div>
			<div class="tablaDiv" id="49" onclick="color(49)">49</div>
			<div class="tablaDiv" id="50" onclick="color(50)">50</div>
		</section>
	</div>
	<p>1. Marca el 1.</p>
	<p>2. De los números que quedan, marca todos los que tengan al 2 como factor, EXCEPTO el 2</p>
	<p>3. De los números que quedan, marca todos los que tengan al 3 como factor, EXCEPTO el 3</p>
	<p>4. De los números que quedan, marca todos los que tengan al 5 como factor, EXCEPTO el 5</p>
	<p>5. De los números que quedan, marca todos los que tengan al 7 como factor, EXCEPTO el 7</p>
	<p>Este método se le conoce como <b>La Coladera o Criba de Erastótenes.</b></p>
	<p><b>Reflexiona:</b></p> 
	<p>¿Por qué nos detuvimos en el número 7?</p>
	<p>	¿Por qué no pedimos que marcaras los números que tienen el 4 o el 6 como factor?</p>
	<br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="VERIFICAR" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
