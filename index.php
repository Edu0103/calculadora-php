<?php
    $n1 = 0;
    $n2 = 0;
    $result = 0;
    $calc = "somar";

    if(isset($_POST['calcular'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['calcular'];

        $result = $n1 + $n2;

        if($calc == '-'){
            $result = $n1 - $n2;
        }
        else if($calc == '*'){
    
            $result = $n1 * $n2;
        }
        else if($calc == '/'){
        
                $result = $n1 / $n2;
            
        }
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
        <input type="submit" value="+" name="calcular">
        <input type="submit" value="-" name="calcular">
        <input type="submit" value="*" name="calcular">
        <input type="submit" value="/" name="calcular">
        <br><br>
        
        <p>Resultado da operacao: <?= $result ?> </p>
    </form>

</body>
</html>