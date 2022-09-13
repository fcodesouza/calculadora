<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>

<body>
    <div class="conteiner">
        <div class="superior">
            <h1>calculadora</h2>
        </div>

        <div>
            <?php
            error_reporting(0);
    
            $n1 = $_POST ['num1'];
            $n2 = $_POST['num2'];
            $resultadoalculo = $_POST['operacao'];
            
            if (!empty($resultadoalculo)) {
                if ($resultadoalculo == '+')
                    $resultado = $n1 + $n2;
            
                else if ($resultadoalculo == '-')
                    $resultado = $n1 - $n2;
                
                else if ($resultadoalculo == '*')
                    $resultado = $n1 * $n2;
    
                else
                    $resultado = $n1 / $n2;
                }
                
        ?>

            <form action="index.php" method="post">

                <h2>Primeiro Número:</h2> <input name="num1" type="text" class="caixas"><br>
                <h2>Segundo Número:</h2> <input name="num2" type="text" class="caixas"><br>

                <br />

                <div>
                    <input type="submit" name="operacao" value="+">
                    <input type="submit" name="operacao" value="-">
                    <input type="submit" name="operacao" value="*">
                    <input type="submit" name="operacao" value="/">
                </div>

            </form>

            <h2>O resultado é:

                <?php
                    echo $resultado;
            ?>

            </h2>
        </div>

    </div>
</body>

</html>