<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/aaa.css">

    <title>Calculator</title>
</head>

<body>
    <h1 class="title-1">Calculadora por digitos</h1>

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


    $button = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    $clicked = '';  

    if(isset($_POST['clicked']) && in_array($_POST['clicked'], $button)){
        $clicked = $_POST['clicked'];
    }

    ?>

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
                echo "<p class=\"error-2\">Introduce los números</p>";
            }
            else
            {
                $resultadosuma = "La suma es: " . Operaciones::sumar($num1, $num2);
                echo "<p class=\"result-2\">$resultadosuma</p>";
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
                echo "<p class=\"error-2\">Introduce los números</p>";
            }
            else
            {
                $resultadoresta = "La resta es: " . Operaciones::restar($num1, $num2);
                echo "<p class=\"result-2\">$resultadoresta</p>";
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
                echo "<p class=\"error-2\">Introduce los números</p>";
            }
            else
            {
                $resultadomultiplicar = "La multiplicación es: " . Operaciones::multiplicar($num1, $num2);
                echo "<p class=\"result-2\">$resultadomultiplicar</p>";
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
                echo "<p class=\"error-2\">Introduce los números</p>";
            }
            else
            {
                $resultadodividir = "La división es: " . Operaciones::dividir($num1, $num2);
                echo "<p class=\"result-2\">$resultadodividir</p>";
            }
        ?>
    <?php endif; ?>

    <!-- Crear el formulario -->
    <form method="post" class="form-2">
        <input class="input-2" type="number" name="num1" placeholder="Digite un número">
        <input class="input-2" type="number" name="num2" placeholder="Digite un número">
        <div class="operaciones-2">
            <input class="input-2" type="submit" name="sumar" value="Sumar">
            <input class="input-2" type="submit" name="restar" value="Restar">
            <input class="input-2" type="submit" name="multiplicar" value="Multiplicar">
            <input class="input-2" type="submit" name="dividir" value="Dividir">
        </div>
    </form>
    
    <div class="volver-2">
        <a href=<?php echo "./index.php";?>>Volver</a>
    </div>

    <footer class="foot">
        <p class="p-foot">
            <a class="a-foot" href="
            <?php echo "./index.php"; ?>">Inicio</a>
            <a class="a-foot" href="
            <?php echo "./calculator.php"; ?>">Calculadora</a>
            <a class="a-foot" href="
            <?php echo "./calculatordigit.php"; ?>">Calculadora digitando</a>
        </p>
        <p class="by">    
            <a href="#">By Gerónimo Quiroga ☕ - Linea de Profundización II 📓</a>
        </p>
    </footer>

</body>

</html>