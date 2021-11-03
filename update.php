<?php
    include('functions.php');
    if (isset($_POST['alterar'])){
        $valor_total = $_POST['valor_produto'] * $_POST['quant'];
        alterar($_POST['nome_produto'], $_POST['valor_produto'], $_POST['marca_produto'], $_POST['quant'], $valor_total, $_POST['id']);
    } elseif (isset($_POST['voltar'])){
        header('Location: index.php');
    }
    $user = (isset($_GET['id'])) ? mostrar($_GET['id']) : false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base de Produtos</title>
    <?php include('tema/header-scripts.php'); ?>
</head>
<body>
    <?php include('tema/header.php'); ?>
    <div class="container-fluid">
        <?php if ($user != false){ ?>
            <h1>Alterar</h1>
            <form action="" method="post" class="form">
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nome_produto">Nome do Produto</label>
                        <input type="text" name="nome_produto" id="nome_produto" class="form-control" value="<?= $user["nome_produto"] ?>">
                        <br>
                    </div>
                    <div class="col-md-6">
                        <label for="valor_produto">Valor do Produto</label>
                        <input type="number" name="valor_produto" id="valor_produto" class="form-control" value="<?= $user["valor_produto"] ?>">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="marca_produto">Marca do Produto</label>
                        <input type="text" name="marca_produto" id="marca_produto" class="form-control" value="<?= $user["marca_produto"] ?>">
                    <br>
                    </div>
                    <div class="col-md-6">
                        <label for="quant">Quantidade</label>
                        <input type="number" name="quant" id="quant" class="form-control" value="<?= $user["quant"] ?>">
                        <br>
                    </div>
                </div>
                <button name="alterar" class="btn btn-primary">Alterar</button>
                <button name="voltar" class="btn btn-primary">Voltar</button>
            </form>   
        <?php }else{ ?>  
            <h1>Produto não encontrado.</h1>
        <?php } ?> 
    </div>
</body>
</html>