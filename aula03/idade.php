<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // '>' maior
    // '<' menor
    // '>=' maior ou igual
    // '<=' menor ou igual
    
    if($idade >= 18){
        echo $nome.', de '.$idade.' anos, é maior de idade';
    }else{
        echo $nome.', de '.$idade.' anos, é menor de idade';
    }
?>