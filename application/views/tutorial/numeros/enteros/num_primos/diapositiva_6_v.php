<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/num_primos/styles_primos.css">
<div class="panel-body">
	<div>
		<p>A continuación se muestran los enteros del 1 al 50. Vamos a marcar (dar clic) todos los números que son primos:</p>
	 	
	</div>
	<br/><br/>
	<div id="seccion" >
		<section>
			<div class="tablaDiv">1</div>
			<div class="tablaDiv">2</div>
			<div class="tablaDiv">3</div>
			<div class="tablaDiv">4</div>
			<div class="tablaDiv">5</div>
			<div class="tablaDiv">6</div>
			<div class="tablaDiv">7</div>
			<div class="tablaDiv">8</div>
			<div class="tablaDiv">9</div>
			<div class="tablaDiv">10</div>
		</section>
		<br /><br />
		<section>
			<div class="tablaDiv">11</div>
			<div class="tablaDiv">12</div>
			<div class="tablaDiv">13</div>
			<div class="tablaDiv">14</div>
			<div class="tablaDiv">15</div>
			<div class="tablaDiv">16</div>
			<div class="tablaDiv">17</div>
			<div class="tablaDiv">18</div>
			<div class="tablaDiv">19</div>
			<div class="tablaDiv">20</div>
		</section>
		<br /><br />
		<section>
			<div class="tablaDiv">21</div>
			<div class="tablaDiv">22</div>
			<div class="tablaDiv">23</div>
			<div class="tablaDiv">24</div>
			<div class="tablaDiv">25</div>
			<div class="tablaDiv">26</div>
			<div class="tablaDiv">27</div>
			<div class="tablaDiv">28</div>
			<div class="tablaDiv">29</div>
			<div class="tablaDiv">30</div>
		</section>
		<br /><br />
		<section>
			<div class="tablaDiv">31</div>
			<div class="tablaDiv">32</div>
			<div class="tablaDiv">33</div>
			<div class="tablaDiv">34</div>
			<div class="tablaDiv">35</div>
			<div class="tablaDiv">36</div>
			<div class="tablaDiv">37</div>
			<div class="tablaDiv">38</div>
			<div class="tablaDiv">39</div>
			<div class="tablaDiv">40</div>
		</section>
		<br /><br />
		<section>
			<div class="tablaDiv">41</div>
			<div class="tablaDiv">42</div>
			<div class="tablaDiv">43</div>
			<div class="tablaDiv">44</div>
			<div class="tablaDiv">45</div>
			<div class="tablaDiv">46</div>
			<div class="tablaDiv">47</div>
			<div class="tablaDiv">48</div>
			<div class="tablaDiv">49</div>
			<div class="tablaDiv">50</div>
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
</div>
