<?php
require '../includes/funcoes-produtos.php';
$listaDeProdutos = lerProdutos($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos | SELECT - CRUD com PHP e MySQL </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link href="../css/style.css" rel="stylesheet"> -->
</head>

<body>

    <div class="container text-center mt-3">
        <h1>Produtos | SELECT -
            <a href="../index.php">Home</a>
        </h1>
    </div>

    <div class="container">

        <h2>Lendo e carregando todos os produtos</h2>
        <p><a class="btn btn-primary btn-lg" href="inserir.php">Inserir</a></p>

        <hr>

        <div class="row">
            <?php foreach ($listaDeProdutos as $produto) { ?>
                <article class="col-sm-6 col-lg-4">
                    <h3> <?= $produto['produto'] ?> </h3>
                    <p><b>Preço:</b> <?= formataMoeda($produto['preco']) ?> </p>
                    <p><b>Quantidade:</b> <?= $produto['quantidade'] ?> </p>
                    <p><b>Descrição:</b> <?= $produto['descricao'] ?> </p>
                    <p><b>Fabricante:</b> <?= $produto['fabricante'] ?> </p>
                
            
                <p>
                    <a href="atualizar.php?id=<?= $produto['id'] ?>">Atualizar</a>
                    <a href="excluir.php?id=<?= $produto['id'] ?>">Excluir</a>
                </p>
                </article>
            <?php } ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>