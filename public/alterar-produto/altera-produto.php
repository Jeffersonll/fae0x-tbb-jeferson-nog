<?php $classMain="container"; include(__DIR__ . "/../../partes/cabecalho.php");
      include(__DIR__ . "/../../banco/conexao.php");
      include(__DIR__ . "/../../banco/banco-produto.php");

$uploaddir = __DIR__ . '/../../assets/imagens/';

$produtos = listaProdutos($conexao);


foreach ($produtos as $produto) {
    $produtoImagen = $produto['imagem'];
}

unlink($uploaddir.$produtoImagen);

$id_produto = $_POST["id"];
$nome = mysqli_real_escape_string($conexao ,$_POST["nome"]);
$preco = mysqli_real_escape_string($conexao ,$_POST["preco"]);
$descricao = mysqli_real_escape_string($conexao ,$_POST["descricao"]);
$id_categoria = mysqli_real_escape_string($conexao ,$_POST['id_categoria']);
$quantidade = mysqli_real_escape_string($conexao ,$_POST['quantidade']);
$imagem = $_FILES['imagem'];
$imagemNome = rand(999, 999999)."_".$imagem['name'];

$uploadfile = $uploaddir . basename($imagemNome);

if (!move_uploaded_file($imagem['tmp_name'], $uploadfile)) {
    echo "error de upload de arquivo!";
}

if(alteraProduto($conexao, $id_produto, $nome, $imagemNome, $preco, $descricao, $id_categoria, $quantidade)) { ?>
    <p class="text-success">O produto <?= $nome; ?>, <?= $preco; ?> alterado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto <?= $nome; ?> não foi alterado: <?= $msg ?></p>
<?php
}
?>

<?php include(__DIR__ . "/../../partes/rodape.php"); ?>
