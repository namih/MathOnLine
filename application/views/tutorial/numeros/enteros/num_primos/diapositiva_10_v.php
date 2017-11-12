<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_10.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/num_primos/styles_primos.css">
<div class="container-fluid">
	<div>
		<p>Usa el método anterior <b>(la coladera de Eratóstenes)</b> para encontrar todos los números primos desde 51 hasta 100.</p>
	 	
	</div>
	<br/><br/>
	<div id="seccion" >
		<section>
			<div class="tablaDiv" id="51" onclick="color(51)">51</div>
			<div class="tablaDiv" id="52" onclick="color(52)">52</div>
			<div class="tablaDiv" id="53" onclick="color(53)">53</div>
			<div class="tablaDiv" id="54" onclick="color(54)">54</div>
			<div class="tablaDiv" id="55" onclick="color(55)">55</div>
			<div class="tablaDiv" id="56" onclick="color(56)">56</div>
			<div class="tablaDiv" id="57" onclick="color(57)">57</div>
			<div class="tablaDiv" id="58" onclick="color(58)">58</div>
			<div class="tablaDiv" id="59" onclick="color(59)">59</div>
			<div class="tablaDiv" id="60" onclick="color(60)">60</div>
		</section>
		<br />
		<section>
			<div class="tablaDiv" id="61" onclick="color(61)">61</div>
			<div class="tablaDiv" id="62" onclick="color(62)">62</div>
			<div class="tablaDiv" id="63" onclick="color(63)">63</div>
			<div class="tablaDiv" id="64" onclick="color(64)">64</div>
			<div class="tablaDiv" id="65" onclick="color(65)">65</div>
			<div class="tablaDiv" id="66" onclick="color(66)">66</div>
			<div class="tablaDiv" id="67" onclick="color(67)">67</div>
			<div class="tablaDiv" id="68" onclick="color(68)">68</div>
			<div class="tablaDiv" id="69" onclick="color(69)">69</div>
			<div class="tablaDiv" id="70" onclick="color(70)">70</div>
		</section>
		<br />
		<section>
			<div class="tablaDiv" id="71" onclick="color(71)">71</div>
			<div class="tablaDiv" id="72" onclick="color(72)">72</div>
			<div class="tablaDiv" id="73" onclick="color(73)">73</div>
			<div class="tablaDiv" id="74" onclick="color(74)">74</div>
			<div class="tablaDiv" id="75" onclick="color(75)">75</div>
			<div class="tablaDiv" id="76" onclick="color(76)">76</div>
			<div class="tablaDiv" id="77" onclick="color(77)">77</div>
			<div class="tablaDiv" id="78" onclick="color(78)">78</div>
			<div class="tablaDiv" id="79" onclick="color(79)">79</div>
			<div class="tablaDiv" id="80" onclick="color(80)">80</div>
		</section>
		<br />
		<section>
			<div class="tablaDiv" id="81" onclick="color(81)">81</div>
			<div class="tablaDiv" id="82" onclick="color(82)">82</div>
			<div class="tablaDiv" id="83" onclick="color(83)">83</div>
			<div class="tablaDiv" id="84" onclick="color(84)">84</div>
			<div class="tablaDiv" id="85" onclick="color(85)">85</div>
			<div class="tablaDiv" id="86" onclick="color(86)">86</div>
			<div class="tablaDiv" id="87" onclick="color(87)">87</div>
			<div class="tablaDiv" id="88" onclick="color(88)">88</div>
			<div class="tablaDiv" id="89" onclick="color(89)">89</div>
			<div class="tablaDiv" id="90" onclick="color(90)">90</div>
		</section>
		<br />
		<section>
			<div class="tablaDiv" id="91" onclick="color(91)">91</div>
			<div class="tablaDiv" id="92" onclick="color(92)">92</div>
			<div class="tablaDiv" id="93" onclick="color(93)">93</div>
			<div class="tablaDiv" id="94" onclick="color(94)">94</div>
			<div class="tablaDiv" id="95" onclick="color(95)">95</div>
			<div class="tablaDiv" id="96" onclick="color(96)">96</div>
			<div class="tablaDiv" id="97" onclick="color(97)">97</div>
			<div class="tablaDiv" id="98" onclick="color(98)">98</div>
			<div class="tablaDiv" id="99" onclick="color(99)">99</div>
			<div class="tablaDiv" id="100" onclick="color(100)">100</div>
		</section>
	</div>
	<p>Empezamos marcando los múltiplos de 2</p>
	<p>¿Hasta qué número debes considerar como factores en este caso?</p>
	<br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
