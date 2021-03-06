<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="./css/aaa.css">

    
    <title>Calculadora</title>
</head>

<body>
    <h1 class="title-1">Calculadora con botones</h1>

    <?php

    $buttons = [1, 2, 3, '+', 4, 5, 6, '-', 7, 8, 9, '*', 'C', 0, '.', '/', '=']; 
    $clicked = ''; 
    $stored = '';


    if (isset($_POST['clicked']) && in_array($_POST['clicked'], $buttons)) {
        $clicked = $_POST['clicked'];
    }


    if (isset($_POST['stored'])) {

        $stored = $_POST['stored'];

        if(preg_match('~^(?:[\d.]+[*/+-]?)+$~', $stored, $out)) {
            $stored = $out[0];
        }
    }

    $display = $stored . $clicked; //display the value and operators and answer

    //Reset-C- condition
    try {
        if ($clicked == 'C') {
            $display = '';
        } elseif ($clicked == '=') {
            $display .= eval("return $stored;");
        }
    } catch (\Throwable $th) {
        $display = 'Incorrect operation';
    }

    ?>

    <form action="" method="POST" class="form-calc">
        <table>
            <tr class="display-calc">
                <td colspan="4"><?php echo $display; ?></td>
            </tr>
            <?php foreach (array_chunk($buttons, 4) as $chunk) : ?>
                <tr>
                    <?php foreach ($chunk as $button) : ?>
                        <td<?php echo sizeof($chunk) != 4 ? " colspan=\"4\"" : ""; ?>><button class="button-calc" name="clicked" value="<?php echo $button; ?>"><?php echo $button; ?></button></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <input type="hidden" name="stored" value="<?php echo $display; ?>">
        <?php
            if ($clicked == '=') {
                echo "<input type=\"hidden\" name=\"clicked\" value=\"\">";
            }
        ?>
    </form>

    <div class="volver">
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
            <a href="#">By Ger??nimo Quiroga ??? - Linea de Profundizaci??n II ????</a>
        </p>
    </footer>

</body>

</html>