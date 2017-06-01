<DOCTYPE html>  
<html lang="es">  
    <head>  
        <meta charset="utf-8"/>  
        <title>Verificar Nombre de usuario</title>  
        <link rel="shortcut icon" href="favicon"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>  
    <body>  
        <header>  
            <h1>Verificación en OnBlur</h1>
        </header>  
        <div class="container">
        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        	  <div class="form-group has-feedback col-md-6  col-xs-12" id="usuario">
				  <label for="usr">Nombre de usuario</label>
				  <input onblur="usuario()" type="text" class="form-control" id="user">
				  <span id="error" class="glyphicon glyphicon-remove form-control-feedback" style="display: none"></span>
				</div>
				<div class="form-group" id="correo">
				  <label for="pwd">Email:</label>
				  <input type="password" class="form-control" id="email">
				</div>
				<div class="form-group">
					<button onclick="licenciaturas()" type="button" class="btn btn-default">Cargar Licenciaturas UAM Iztapalapa</button>
				</div>
				 <div class="form-group">
				 	<label for="sel1">Select list:</label>
				 	<select onchange="id_carrera()" class="form-control" id="sel1">
				 		<option>Licenciatura</option>
				 	</select>
				 </div>
				 <div id="display">
				 	
				 </div>
        </div>
        <script>
        
        	function id_carrera () {
			  var seleccion = document.getElementById('sel1');
			  alert(seleccion.value);
			}
        	        
        	function licenciaturas () {
        		var datos = {unidad:4};
        		$.ajax({
        			type:'post',
					url: "http://localhost/MathOnLine/index.php/Test_models_c/lista_lic",
					data: {datos:datos},
					datatype: 'json',
					cache: false,
					success: function(msj) {  
						var json = JSON.parse(msj);
						var sel = document.getElementById('sel1');
						for(var i = 0; i < json.length; i++) {
						    var opt = document.createElement('option');
						    opt.innerHTML = json[i];
						    opt.text = json[i]['degree'];
						    opt.value = json[i]['id_degree'];
						    sel.appendChild(opt);
						}
					},
					error: function(msj) {
						alert('Failure: '+msj);
					}
				});
			}
        
        
        
        
        
        	function usuario () {
        		document.getElementById('user').style.borderColor = '';
        		document.getElementById("error").style.display= 'none';
        		
			  var nombre_usuario = document.getElementById('user').value;
			  
			  var datos = {user_name: nombre_usuario}
			  
			  if (nombre_usuario != '') {
			  	$.ajax({
					type:'post',
					url: "http://localhost/MathOnLine/index.php/Test_models_c/nombre_usuario_disponible",
					data: {datos:datos},
					datatype: 'json',
					cache: false,
					success: function(msj) {
						if (msj == 'SI') {
							document.getElementById('user').style.borderColor = 'green';
						} else{
							var usuario = document.getElementById("usuario");
							usuario.className += " has-error";
							document.getElementById("error").style.display= 'inline';
							document.getElementById('user').value = '';
							document.getElementById('user').placeholder = 'Nombre de usuario invalido';
						};
					},
					error: function(msj) {
						alert('Failure: '+msj);
					}
				});
			  };
			}
        </script>
        <footer>  
            <h2>FOOTER</h2>  
            <p>Aqui todo el contenido del footer</p>  
        </footer>  
    </body>  
</html>