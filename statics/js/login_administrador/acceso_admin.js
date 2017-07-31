/**
* @author María del Carmen Chávez Conde
* @param NA
* @return  Formato: [* @return tipo comentario]
* @version Versión actual del elemento
 */
 function guardar_imagen()
	{
		//comprobamos que sea una petición ajax
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
			
			if(empty($_FILES['archivo']) || $_FILES['archivo']['name']==null){
				echo "No seleccionaste archivo";
			} else {
								
				//obtener la extension del archivo
				$tipo_archivo = $_FILES['archivo']['type'];
				$extension = explode("/", $tipo_archivo);
				
				//obtenemos el archivo a subir
				$file = $_FILES['archivo']['name'];
				
				$archivo_renombrado = 'nuevo_calendario'.".".$extension[1];
				
				//comprobamos si existe un directorio para subir el archivo
				//si no es así, lo creamos
				if(!is_dir("/statics/img/calendario_uam/")) 
				mkdir("/statics/img/calendario_uam/", 0777);
				
				//comprobamos si el archivo ha subido
				if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'],"statics/img/calendario_uam/".$archivo_renombrado)) {
					sleep(1);//retrasamos la petición 1 segundos
					echo $archivo_renombrado;//devolvemos el nombre del archivo para pintar la imagen
				}	
			}
		}else{
			throw new Exception("Error Processing Request", 1);
		}
	}