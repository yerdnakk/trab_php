<?php
    include('functions.php');
    $produtos = mostrar_todos();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
    <?php include('tema/header-scripts.php'); ?>
</head>
<body>
    <?php include('tema/header.php'); ?>
    <div class="container-fluid">
        <h1>Base de produtos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do produto</th>
                    <th>Valor do produto</th>
                    <th>Marca do produto</th>
                    <th>Quantidade</th>
                    <th>Valor total em estoque</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($produtos as $produto):
                        echo '
                            <tr>
                                <td>'.$produto['id'].'</td>
                                <td>'.$produto['nome_produto'].'</td>
                                <td>'.$produto['valor_produto'].'</td>
                                <td>'.$produto['marca_produto'].'</td>
                                <td>'.$produto['quant'].'</td>
                                <td>'.$produto['valor_total'].'</td>
                                <td class="text-right">
                                    <a class="btn btn-primary" href="update.php?id='.$produto['id'].'">Alterar</a>
                                    <a class="btn btn-danger" href="delete.php?id='.$produto['id'].'">Deletar</a>
                                </td>
                            </tr>
                        ';
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>