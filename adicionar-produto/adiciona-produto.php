<?php $classMain = "container"; include("cabecalho.php");
      include("conexao.php");
      include("banco-produto.php"); ?>

<?php

$nome = mysqli_real_escape_string($conexao ,$_POST["nome"]);
$preco = mysqli_real_escape_string($conexao ,$_POST["preco"]);
$descricao = mysqli_real_escape_string($conexao ,$_POST["descricao"]);
$id_categoria = mysqli_real_escape_string($conexao ,$_POST['id_categoria']);
$quantidade = mysqli_real_escape_string($conexao ,$_POST['quantidade']);
$imagem = $_FILES['imagem'];
$imagemNome = rand(999, 999999)."_".$imagem['name'];

$uploaddir = __DIR__ . '../assets/imagens/';
$uploadfile = $uploaddir . basename($imagemNome);

if (move_uploaded_file($imagem['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.";
} else {
    echo "error de upload de arquivo!";
}


if(insereProduto($conexao, $nome, $imagemNome, $preco, $descricao , $id_categoria, $quantidade)) { ?>
    <p class="text-success">O produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
