<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a class="voltar" href="index.php">voltar</a>
<a href="contato.php">pagina de contatos </a>
<h1>lista de produtos</h1>
<ol>
    <?php
    for($i = 0 ; $i < 3; $i++)
    {
        echo"<li>item $i</li>";
    }
    ?>
    </ol>
</body>
</html>