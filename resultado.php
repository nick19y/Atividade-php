<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Resultado</h2>
    <h4>Opção escolhida: <?= $_POST["opcao"]?></h4>
    <h4>Valor do 1º parâmetro: <?= $_POST["parametro1"]  ?></h4>
    <h4>Valor do 2º parâmetro: <?= $_POST["parametro2"]  ?></h4>
    <h4>Resultado:
    <?php 
    // criar condição para executar a função
    include "funcoes.php";
        if($_POST['opcao'] == 'Função 1'){
            echo retornarNome($_POST["parametro1"], $_POST["parametro2"]);
        }
        else if($_POST['opcao'] == 'Função 2'){
            echo somarValores($_POST["parametro1"], $_POST["parametro2"]);
        }
        else if($_POST['opcao'] == 'Função 3'){
            echo verificarAposentadoria($_POST["parametro1"], $_POST["parametro2"]);
        }
        else if($_POST['opcao'] == 'Função 4'){
            echo calcularAreaRetangulo($_POST["parametro1"], $_POST["parametro2"]);
        }
        else if($_POST['opcao'] == 'Sobre'){
            header("Location: sobre.php");
        }
    ?>
    </h4>
    <a href="formulario.php">Voltar para formulário</a>
</body>
</html>