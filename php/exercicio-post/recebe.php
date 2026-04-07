<?php

$nome = $_POST['nome'] ?? '';
$idade = $_POST['idade'] ?? '';

if($nome == '' || $idade == ''){
    echo "Preencha todos os campos!";
}else{
echo "O usuário $nome foi cadastrado.<br>";
echo "A idade de $nome é $idade anos.";
}