<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Rest</title>
</head>
<body>
    <h1>Uso de Rest</h1>
    <script>
        function sumar(a, b, ...c){
            let resultado = a + b;
            c.forEach(function(n){
                resultado += n;
            });
            return resultado;
        }
      console.log(sumar(1, 2));
      console.log(sumar(1, 2, 3));
      console.log(sumar(1, 2, 3, 4)); 
      console.log(sumar(100, 100, 100, 100)); 
    </script>
</body>
</html>