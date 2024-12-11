<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cantor = $_POST['cantor'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];
    $descricao = $_POST['descricao'];
    $newsletter = isset($_POST['newsletter']) ? 'Sim' : 'Não';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Dados do Cadastro</h1>
        <nav>
            <ul>
                <li><a href="index.html">Página Inicial</a></li>
                <li><a href="desenvolvedores.html">Desenvolvedores</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Informações recebidas:</h2>
        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>E-mail:</strong> <?php echo $email; ?></p>
        <p><strong>Cantor favorito:</strong> <?php echo $cantor; ?></p>
        <p><strong>Gênero musical favorito:</strong> <?php echo $genero; ?></p>
        <p><strong>Data de Nascimento:</strong> <?php echo $nascimento; ?></p>
        <p><strong>Por que gosta desse cantor:</strong> <?php echo $descricao; ?></p>
        <p><strong>Receber novidades sobre cantores:</strong> <?php echo $newsletter; ?></p>
    </main>

    <footer>
        <p>IFRN Campus Santa Cruz | Trabalho de Autoria Web | Prof. Marcelo Figueiredo Barbosa Júnior</p>
        <p>Componentes:Luiz fernando de olivera araujo, Marina da silva Menezes</p>
    </footer>

</body>
</html>
