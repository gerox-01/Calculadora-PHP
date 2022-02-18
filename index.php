<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles.css">

    <title>Calculator</title>
</head>

<body>
    <?php

    #Incluimos el archivo de las operaciones
    include './sumar.php';

    #Definir las dos variables enteras
    $num1;
    $num2;
    $sumar;
    $restar;
    $multiplicar;
    $dividir;

    ?>

    <!-- Crear el formulario -->
    <form method="post">
        <input type="number" name="num1" placeholder="Introduce el primer número">
        <input type="number" name="num2" placeholder="Introduce el segundo número">
        <input type="submit" name="sumar" value="Sumar">
        <input type="submit" name="restar" value="Restar">
        <input type="submit" name="multiplicar" value="Multiplicar">
        <input type="submit" name="dividir" value="Dividir">
    </form>


    <!-- Evitar los warning de Key con php -->
    
    
    <?php if(isset($_REQUEST['sumar'])): ?>
        <?php  
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $sumar = $_REQUEST['sumar'];             
        ?>
        <br>
        <?php
            if(empty($num1) && empty($num2))
            {
                echo "Introduce los números";
            }
            else
            {
                echo "La suma es: " . Operaciones::sumar($num1, $num2);
            }
        ?>
    <?php endif; ?>

    <?php if(isset($_REQUEST['restar'])): ?>
        <?php  
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $restar = $_REQUEST['restar'];             
        ?>
        <br>
        <?php
            if(empty($num1) && empty($num2))
            {
                echo "Introduce los números";
            }
            else
            {
                echo "La resta es: " . Operaciones::restar($num1, $num2);
            }
        ?>
    <?php endif; ?>

    <?php if(isset($_REQUEST['multiplicar'])): ?>
        <?php  
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $multiplicar = $_REQUEST['multiplicar'];             
        ?>
        <br>
        <?php
            if(empty($num1) && empty($num2))
            {
                echo "Introduce los números";
            }
            else
            {
                echo "La multiplicación es: " . Operaciones::multiplicar($num1, $num2);
            }
        ?>
    <?php endif; ?>

    <?php if(isset($_REQUEST['dividir'])): ?>
        <?php  
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $dividir = $_REQUEST['dividir'];             
        ?>
        <br>
        <?php
            if(empty($num1) && empty($num2))
            {
                echo "Introduce los números";
            }
            else
            {
                echo "La división es: " . Operaciones::dividir($num1, $num2);
            }
        ?>
    <?php endif; ?>
    

</body>

</html>