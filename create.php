<?php
    include('functions.php');
    if (isset($_POST['btnInsert'])) :
        inserir($_POST['nome_produto'], $_POST['valor_produto'], $_POST['marca_produto'], $_POST['quant']);
    endif;
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
        <h1><em class="fa fa-plus-circle"></em> Inserir</h1>
        <form action="" method="post" class="form">
        <div class="row">
            <div class="col-md-6">
                    <label for="nome_produto">Nome do Produto</label>
                    <input type="text" name="nome_produto" id="nome_produto" class="form-control" value="">
                    <br>
                </div>
                <div class="col-md-6">
                    <label for="valor_produto">Valor do Produto</label>
                    <input type="number" name="valor_produto" id="valor_produto" class="form-control" value="">
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="marca_produto">Marca do Produto</label>
                    <input type="text" name="marca_produto" id="marca_produto" class="form-control" value="">
                    <br>
                </div>
                <div class="col-md-6">
                    <label for="quant">Quantidade</label>
                    <input type="number" name="quant" id="quant" class="form-control" value="">
                    <br>
                </div>
            </div>
            <button name="btnInsert" class="btn btn-primary">Inserir Produto</button>
        </form>  
    </div>
</body>
</html>