<?php
    include './lib/Banco.php';
    $alunos = listar_alunos();

    /*
    Definition and Usage
        The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.

        This function returns true if the variable exists and is not NULL, otherwise it returns false.

        Note: If multiple variables are supplied, then this function will return true only if all of the variables are set.

        Tip: A variable can be unset with the unset() function.    
    */
    //Verifica se as variárives estão declaradas.
    if(isset(($_POST['name'])) && isset($_POST['age']) && isset($_POST['sexo'])){

        $name = htmlspecialchars($_POST['name']);
        $age = (int)$_POST['age'];

        $gender = htmlspecialchars($_POST['sexo']);

        $people = array('nome' => $name,'idade'=> $age,'sexo'=> $gender);
        array_push($alunos,$people);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel= "stylesheet" href="./assets/css/styles.css">
    <title>ListarAlunos</title>
</head>
<body>
    <header class="head">
        <a href="/">Home</a>
        <a href="/cadastro.php">Cadastrar</a>
        <style>
            table, th, td {
                border:1px solid black;
            }
        </style>
    </header>
    <main>
        <table>
            <tr>
                <th>Nome</th>
                <th>idade</th>
                <th>Sexo</th>
            </tr>
            <!--Uma forma de montar a tabela de forma meio desogranizada mais da para montar-->
            <!-- <tr>
                <td>
                    </?php
                        for($i=0; $i<count($alunos); $i++){
                            echo '<li>'.$alunos[$i]['nome'].'</li>';
                        }
                    /?>
                </td>
                <td>
                    </?php
                        for($i=0; $i<count($alunos); $i++){
                            echo '<li>'.$alunos[$i]['idade'].'</li>';
                        }
                    ?>
                </td>
                <td>
                    </?php
                        for($i=0; $i<count($alunos); $i++){
                            echo '<li>'.$alunos[$i]['sexo'].'</li>';
                       }
                    ?>
                </td>
            </tr> -->
            <?php
                for($i = 0; $i<count($alunos); $i++){
                    echo '<tr>';
                    echo '<td>' . $alunos[$i]['nome'].'</td>';
                    echo '<td>' . $alunos[$i]['idade'].'</td>';
                    echo '<td>' . $alunos[$i]['sexo'].'</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </main>    
    <footer>

    </footer>
</body>
</html>