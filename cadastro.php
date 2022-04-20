<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel= "stylesheet" href="./assets/css/styles.css">
    <title>Cadastro</title>
</head>
<body>
    <header class="head">
        <a href="/">Home</a>
        <a href="/listarAlunos.php">Tabela Alunos</a>
    </header>
    <main>
        <form action="listarAlunos.php" method="post">
            <p>Your name: <input type="text" name="name"/></p>
            <p>Your age: <input type="text" name="age"/></p>
            
            <select id="sex-box" name="sexo">
                <option value="m">Masculino</option>
                <option value="f">Feminino</option>
                <option value="x">X</option>
            </select>

            <p><input type="submit" value="Enviar"/></p>
        </form>
    </main>
    <footer>
        
    </footer>
</body>
</html>

<!--
<header>

        <section>

            <figure>

                <img src="" alt="logo">

            </figure>

            <a href="/login.php?sair=1">Sair</a>

        </section>

        <section>

            <a href="/">HOME</a>

            <a href="/listaAlunos.php">Alunos</a>

            <a href="/cadastrarAluno.php">Cadastrar</a>

        </section>

    </header>
-->