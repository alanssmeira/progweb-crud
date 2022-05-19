<?php
// funcoes-fabricantes.php

require "conecta.php";

function lerProdutos($conexao){
   $sql = "SELECT id, nome, preco, quantidade, descricao, fabricante_id FROM produtos ORDER BY nome";

   $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

   $produtos = [];
   while ($produto = mysqli_fetch_assoc($resultado)) {
       array_push($produtos, $produto);
   }

   return $produtos;
}


function inserirProdutos($conexao, $nome){
    
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function lerUmFabricante($conexao, $id){

    // Montagem do comando SQL com o parâmetro id
    $sql = "SELECT id, nome FROM fabricantes WHERE id = $id";

    // Execução do comando e armazenamento do resultado
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    // Retornando para fora da função o resultado como array assoc.
    return mysqli_fetch_assoc($resultado);
}

function atualizarFabricante($conexao, $id, $nome){
    $sql = "UPDATE fabricantes SET nome ='$nome' WHERE id = $id";

    mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
}

function excluirFabricante($conexao, $id){
    $sql = "DELETE FROM fabricantes WHERE id = $id";
    mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
}