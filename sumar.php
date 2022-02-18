<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="result">
    <?php

    #Definimos una clase donde estaran las operaciones
    class Operaciones
    {
        #Definimos una función sumar
        public static function sumar($num1, $num2)
        {
            if(empty($num1) || empty($num2))
            {
                return "Introduce los números";
            }
            else
            {
                return $num1 + $num2;
            }
        }
        #Definimos una función restar
        public static function restar($num1, $num2)
        {
            return $num1 - $num2;
        }
        #Definimos una función multiplicar
        public static function multiplicar($num1, $num2)
        {
            return $num1 * $num2;
        }
        #Definimos una función dividir
        public static function dividir($num1, $num2)
        {
            return $num1 / $num2;
        }
    }
    ?>
</body>

</html>