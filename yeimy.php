<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #B299DC;
        }

        button{
            border-radius: 3px;
            border-color: #FF9EB6;
            margin: 3px;
        }

        button::hover{
            background-color: #F9EAFF;
            color: #B299DC;
        }
    </style>
</head>

<body>
    
    <?php
        
        #Create list of buttons to be displayed
        $listbutton = [1,2,3 ,'+',4,5,6,'-',7,8,9,'*',0,'C','.','/','='];
        #Creaye variable to store the value of the button clicked
        $click = '';
        
        #Check if the button clicked is in the list of buttons
        if(isset($_POST['click'])){
            #If the button clicked is in the list of buttons, store the value of the button clicked
            if(in_array($_POST['click'], $listbutton, strict:true)){
                #Assign the value of the button clicked to the variable $click
                $click = $_POST['click'];
            }
        }
        
        #Store the value of the button clicked
        $storage = '';

        #Check if the storage variable is empty
        if(isset($_POST['storage'])){
            #Validate the value of the storage variable with the function preg_match 
            if(preg_match('~^(?:[\d.]+[*/+-]?)+$~', $_POST['storage'], $out)){
                #If the storage variable is not empty, store the value of the storage variable
                $storage = $out[0];
            }
        }

        #Create variable to store the value of the button clicked and the value of the storage variable
        $display = $storage.$click;

        // $displayed;

        #Check if the button clicked is equal to C
        if($click == 'C'){
            #If the button clicked is equal to C, set the value of the display variable to empty
            $display = '';
        }
        
        #Check if the button clicked is equal to =
        if($click == '=' && preg_match('~^\d*\.?\d+(?:[*/+-]\d*\.?\d+)*$~',$storage)){
            #If the button clicked is equal to =, evaluate the value of the storage variable
            $display .= eval("return $storage;");
            // $display = $displayed;
        }

    ?>

    <!-- Create form with method POST -->
    <form method="POST">
        <!-- Create table to display the buttons -->
        <table>
            <!-- Create a row for each button -->
            <?php
                echo "<tr>";
                echo "<td colspan=\"4\">$display</td>";
                echo "</tr>";
            ?>
            <tr>
                <!-- Create a column for each button -->
                <?php echo "<td><button name=\"click\" value=$listbutton[0]>1</button></td>" ?>
                <?php echo "<td><button name=\"click\" value=2>2</button></td>" ?>
                <?php echo "<td><button name=\"click\" value=3>3</button></td>" ?>
                <?php echo "<td><button name=\"click\" value=+>+</button></td>" ?>                
            </tr>
            <tr>
                <td><button name="click" value=4>4</button></td>
                <td><button name="click" value=5>5</button></td>
                <td><button name="click" value=6>6</button></td>
                <td><button name="click" value="-">-</button></td>
            </tr>
            <tr>
                <td><button name="click" value=7>7</button></td>
                <td><button name="click" value=8>8</button></td>
                <td><button name="click" value=9>9</button></td>
                <td><button name="click" value="*">*</button></td>
            </tr>
            <tr>
                <td><button name="click" value=0>0</button></td>
                <td><button name="click" value=".">.</button></td>
                <td><button name="click" value="/">/</button></td>
                <td><button name="click" value="C">C</button></td>
            </tr>
        </table>
        <button name="click" value="=" style="width: 110px;">=</button>
        <?php
            echo "<input type=\"hidden\" name=\"storage\" value=\"$display\">";
        ?>
    </form>

    <input value=1 placeholder="prueba">

</body>
</html>