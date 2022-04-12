<?php
    //echo "$nome_aluno  "."$idade_pessoa";
    // precisam pesquisar como se cria objetos no php usando ARRAY
    // fazer o vetor de alunos como um objeto, no qual vocês vão 
    // colocar nome, idade e sexo nesse objeto
    // e criar um vetor de objeto aluno;

    //Vetor global
    //$alunos = ['Bianca ', 'Claudia', 'Luiza ','Marcos ', 'Michele ','Pedro ', 'Sávio','Wisley'];
    
    $alunos=[]; //array  de alunos vazios
    $pessoa = array('nome' => 'Bianca','idade'=>18,'sexo'=>'f');
    array_push($alunos,$pessoa); // função para colocar um elemento em um vetor
            // vetor onde se vai ser realizar o push
            // quais elementos vão ser colocados dentro do vetor
    $pessoa = array('nome' => 'Claudia','idade'=>18,'sexo'=>'f');
    array_push($alunos,$pessoa);
    $pessoa = array('nome' => 'Luiza','idade'=>18,'sexo'=>'f');
    array_push($alunos,$pessoa);
    $pessoa = array('nome' => 'Marcos','idade'=>18,'sexo'=>'m');
    array_push($alunos,$pessoa);
    $pessoa = array('nome' => 'Michele','idade'=>18,'sexo'=>'f');
    array_push($alunos,$pessoa);
    $pessoa = array('nome' => 'Pedro','idade'=>18,'sexo'=>'m');
    array_push($alunos,$pessoa);
    $pessoa = array('nome' => 'Sávio','idade'=>18,'sexo'=>'m');
    array_push($alunos,$pessoa);
    $pessoa = array('nome' => 'Wisley','idade'=>18,'sexo'=>'m');
    array_push($alunos,$pessoa);

    //print_r($alunos)

    function listar_alunos(){
        return $GLOBALS["alunos"];
    }
    function connect(){

        $server = '127.0.0.1';
        $username = 'root';
        $password = '';
        $dataBase= 'newbanck';

        $link  = mysqli_connect($server, $username, $password, $dataBase);
    
        if (mysqli_connect_errno()) {
            return ['mysqli_connect_errno: '. mysqli_connect_errno()];
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
    //var_dump(listar());
?>