<?php

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.id_categoria = c.id");
    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}

function insereProduto($conexao, $nome, $imagemNome, $preco, $descricao, $id_categoria, $quantidade) {
    $query = "insert into produtos (nome, imagem, preco, descricao, quantidade, id_categoria) values ('$nome', '$imagemNome', '$preco', '$descricao','$quantidade', '$id_categoria')";
    return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id_produto, $nome, $imagemNome, $preco, $descricao, $id_categoria, $quantidade) {
    $query = "update produtos set nome = '{$nome}', imagem = '{$imagemNome}', preco = {$preco}, descricao = '{$descricao}', quantidade = {$quantidade}, id_categoria = {$id_categoria} where id = {$id_produto}";
    echo $query;
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id_produto) {
    $uploaddir = __DIR__ . '/imagens/';
    $produtos = listaProdutos($conexao);

    foreach ($produtos as $produto) {
        $produtoImagen = $produto['imagem'];
    }

    unlink($uploaddir.$produtoImagen);

    $query = "delete from produtos where id = {$id_produto}";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id_produto) {
    $query = "select * from produtos where id = {$id_produto}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
