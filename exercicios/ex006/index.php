<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //capturando os dados do formulário retroalimentado 
      
       
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method = "get">
        <label for="v1">valor 1</label>
        <input type="number" name="v1" id="v1" value = "<?$valor1?>">
        <label for="v2">valor 2</label>
        <input type="number" name="v2" id="v2" value = "<? $valor2?>">
        <input type="submit" value="somar">
        </form>

    </main>
    
    <section id = "resultado">
        <h2>resultado da soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p> A soma entre os valores $valor1 e $valor2 é <strong>igual a $soma</estrong></p>"
        ?>
    </section>
</body>
</html>