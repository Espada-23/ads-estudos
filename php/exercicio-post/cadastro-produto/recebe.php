<?php

$nome = $_POST['nome'] ?? '';
$preco = $_POST['preco'] ?? '';
$descricao = $_POST['descricao'] ?? '';

if($nome == '' || $preco == '' || $descricao == ''){
    echo "Preencha todos os campos!";
}elseif(!is_numeric($preco)){
    echo "O preço deve ser um número válido!";
}else{
    echo "O produto $nome foi cadastrado com sucesso!<br><br>";
    echo "Produto: $nome<br>";
    echo "Preço: $preco<br>";
    echo "Descrição: $descricao";
}