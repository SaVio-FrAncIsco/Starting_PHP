<?php
    include './lib/Banco.php';
    $alunos = listar_alunos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <title>ListarAlunos</title>
</head>
<body>
    <header>
        <a href="/">Home</a>
        <a href="/listarAlunos.php">Alunos</a>
        <style>
            table, th, td {
                border:1px solid black;
            }
        </style>
    </header>
    <main>
        <table style="width:50%">
            <tr>
                <th>Nome</th>
                <th>idade</th>
                <th>Sexo</th>
            </tr>
            <tr>
                <td>
                    <?php

                        for($i=0; $i<count($alunos); $i++){

                            echo '<li>'.$alunos[$i]['nome'].'</li>';
                        }
                    ?>
                </td>
                <td>
                    <?php

                        for($i=0; $i<count($alunos); $i++){

                            echo '<li>'.$alunos[$i]['idade'].'</li>';
                        }
                    ?>
                </td>
                <td>
                    <?php

                        for($i=0; $i<count($alunos); $i++){

                            echo '<li>'.$alunos[$i]['sexo'].'</li>';
                        }
                    ?>
                </td>
            </tr>
        </table>
    </main>    
    <footer>

    </footer>
</body>
</html>