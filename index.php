<?php
    $n1 = 0;
    $n2 = 0;
    $result = 0;
    $soma = 'somar';
    $sub = 'sub';
    $mult = 'mult';
    $divi = 'divi';

    if(isset($_POST['somar'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['somar'];

        $result = $n1 + $n2;
    }
    else if(isset($_POST['sub'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['sub'];

        $result = $n1 - $n2;
    }
    else if(isset($_POST['mult'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['mult'];

        $result = $n1 * $n2;
    }
    else if(isset($_POST['divi'])){
            $n1 = (int)$_POST['n1'];
            $n2 = (int)$_POST['n2'];
            $calc = $_POST['divi'];
    
            $result = $n1 / $n2;
        
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        Primeiro numero <br>
        <input type="number" name="n1" value= <?= $n1 ?> required > <br>
        Segundo numero  <br>
        <input type="number" name="n2" value= <?= $n2 ?> required  > <br>
        <input type="submit" value="+" name="somar">
        <input type="submit" value="-" name="sub">
        <input type="submit" value="*" name="mult">
        <input type="submit" value="/" name="divi">
        <br><br>
        
        <p>Resultado da operação: <?= $result ?> </p>
    </form>

</body>
</html>