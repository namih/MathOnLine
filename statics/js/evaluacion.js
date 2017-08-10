var arrayEvaluacion=[];

        var inicio=0;
        var timeout=0;
     
        function empezarDetener(elemento){
            if(timeout==0){
                // empezar el cronometro
                elemento.value="Detener";
     
                // Obtenemos el valor actual
                inicio=new Date().getTime();
     
                // Guardamos el valor inicial en la base de datos del navegador
                localStorage.setItem("inicio",inicio);
     
                // iniciamos el proceso
                funcionando();
            }else{
                // detemer el cronometro
                elemento.value="Empezar";
                clearTimeout(timeout);
     
                // Eliminamos el valor inicial guardado
                localStorage.removeItem("inicio");
                timeout=0;
            }
        }
     
        function funcionando(){
            // obteneos la fecha actual
            var actual = new Date().getTime();
     
            // obtenemos la diferencia entre la fecha actual y la de inicio
            var diff=new Date(actual-inicio);
     
            // mostramos la diferencia entre la fecha actual y la inicial
            var result=LeadingZero(diff.getUTCHours())+":"+LeadingZero(diff.getUTCMinutes())+":"+LeadingZero(diff.getUTCSeconds());
            document.getElementById('crono').innerHTML = result;
     
            // Indicamos que se ejecute esta función nuevamente dentro de 1 segundo
            timeout=setTimeout("funcionando()",1000);
        }
     
        /* Funcion que pone un 0 delante de un valor si es necesario */
        function LeadingZero(Time){
            return (Time < 10) ? "0" + Time : + Time;
        }
     
        window.onload=function(){
            if(localStorage.getItem("inicio")!=null){
                // Si al iniciar el navegador, la variable inicio que se guarda
                // en la base de datos del navegador tiene valor, cargamos el valor
                // y iniciamos el proceso.
                inicio=localStorage.getItem("inicio");
                document.getElementById("boton").value="Detener";
                funcionando();
            }
        }

  function agregaRespuesta(idRespuesta){
    var res = idRespuesta.split("_");
    //console.log(idRespuesta);
    arrayEvaluacion[res[0]]['answer_select']=arrayEvaluacion[res[0]]['answers'][res[1]]['key'];
    arrayEvaluacion[res[0]]['answer_is_correct']=arrayEvaluacion[res[0]]['answers'][res[1]]['is_correct'];
    console.log(arrayEvaluacion);
  }        

  function evaluarTema() {
    empezarDetener('Detener');
    var cronometro=$('#crono').text();
    //var cronometro='01:30:59';
    var arrayCrono = cronometro.split(":");
    var tiempo = Number(arrayCrono[0]*3600)+Number(arrayCrono[1]*60)+Number(arrayCrono[2]);
    //console.log(cronometro);
    var arrayResultado;

    arrayResultado={tiempo:tiempo,evaluacion:arrayEvaluacion};
    console.log(arrayResultado);
  }