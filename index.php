<?php
    include './lib/Banco.php';
    $alunos= listar_alunos();
    $alunoEsp= $GLOBALS["alunos"][6];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel= "stylesheet" href="./assets/css/style.css">
    <title>HOME</title>
</head>
<body>
    <header>
        <a href="/">Home</a>
        <a href="/listarAlunos.php">Tabela Alunos</a>
        <a href="/cadastro.php">Cadastrar</a>
    </header>
    <main>
        Hello!!
    <?php

        echo "<p>".$alunos[6]['nome']."</p>";
    
    ?>
    </main>
    
</body>
</html>