<?php

    $alunos = ['Bianca ', 'Claudia ', 'Luiza ','Marcos ', 'Michele ','Pedro ', 'Sávio'];
    
    function listar_alunos(){
        return $GLOBALS["alunos"];
    }
        //echo "$nome_aluno  "."$idade_pessoa";
        // precisam pesquisar como se cria objetos no php usando ARRAY
        // fazer o vetor de alunos como um objeto, no qual vocês vão 
        // colocar nome, idade e sexo nesse objeto
        // e criar um vetor de objeto aluno;

    function connect(){

        $server = '127.0.0.1';
        $username = 'root';
        $password = '';
        $dataBase= 'newbanck';

        $link  = mysqli_connect($server, $username, $password, $dataBase);
    
        if (mysqli_connect_errno()) {
            echo ["mysqli_connect_errno ". mysqli_connect_errno()];
        }
        else{
            return $link;
        }
    }
    function listar(){

        $link= connect();
        $result = mysqli_query($link, "SELECT nome, idade, sexo FROM alunos", MYSQLI_USE_RESULT);
        
        return $result;
        mysqli_close($link);

    }
    var_dump(listar());
?>