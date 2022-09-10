<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <h1>Avaliação Prática de PW 2</h1>
    <h2>Professor Giovani Guarnieri</h2>
    <h3>Desenvolvimento de Software</h3>
    <form action="resultado.php" method="POST">
        <fieldset>
            <legend>
                Formulário de Escolha
            </legend>
            
            <label for="opcao">Opção</label>
            <select name="opcao" id="opcao">
                <option value="">Escolha uma opção</option>
                <option value="Função 1">Função 1</option>
                <option value="Função 2">Função 2</option>
                <option value="Função 3">Função 3</option>
                <option value="Função 4">Função 4</option>
                <option value="Sobre">Sobre</option>
            </select>
            <br>

            <label for="parametro1"> 1º Parâmetro</label>
            <input type="text" id="parametro1" name="parametro1">
            <br>

            <label for="parametro2"> 2º Parâmetro</label>
            <input type="text" id="parametro2" name="parametro2">
            <br>
            

            <button type="reset">Limpar</button>
            <button type="submit">Enviar</button>

        </fieldset>
    </form>
</body>
</html>