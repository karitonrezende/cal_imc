<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        $peso=$_POST['peso'];
        $altura=$_POST['altura'];
        $imc=$peso/pow($altura,2);
        if($imc<18.5){
            echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc.">";
            echo "<h2>Magreza</h2>"
        }
    ?>
</body>
</html>