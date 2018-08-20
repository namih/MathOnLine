<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>
    <h1>Hola switch</h1>
    <button onclick="var_x()" type="button" class="btn btn-danger">Danger</button>
  </body>
  <script type="text/javascript">
  var x = 1;
  var y = 1;
    function var_x(){
      switch (x) {
        case 1:
        switch (y) {
          case 1:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " +y)
            console.log("Hereeeeeeeee");
            break;
          case 2:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 3:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 4:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 5:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
        }
        x++;
        console.log("El valor de X es en case 1: "+ x);
        break;
        case 2:
        switch (y) {
          case 1:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " +y)
            break;
          case 2:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 3:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 4:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 5:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
        }
        x++;
        console.log("El valor de X es en case 2: "+ x);
        break;
        case 3:
        switch (y) {
          case 1:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " +y)
            break;
          case 2:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 3:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 4:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 5:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
        }
        x++;
        console.log("El valor de X es en case 3: "+ x);
        break;
        case 4:
        switch (y) {
          case 1:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " +y)
            break;
          case 2:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 3:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 4:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 5:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
        }
        x++;
        console.log("El valor de X es en case 4: "+ x);
        break;
        case 5:
        switch (y) {
          case 1:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " +y)
            break;
          case 2:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 3:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 4:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
          case 5:
            console.log("El valor de X es: "+ x +" y el valor de Y es: " + y);
            break;
        }
        x++;
        console.log("El valor de X es en case 5: "+ x);
        break;
      }
    }
  </script>
</html>
