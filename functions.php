<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('connect.php');
session_start();

function formatcode($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

function mostrar_todos(){
    global $link;
    $data = array();
    $stmt = $link-> prepare('SELECT * FROM produtos');
    $stmt-> execute();
    $result = $stmt-> get_result();
    if($result->num_rows === 0):
        $_SESSION['message'] = array('type'=>'danger', 'msg'=>'Não há nenhum registro.');
    else:
        while($row = $result-> fetch_assoc()){
            $data[] = $row;
        }
    endif;
    $stmt->close();
    return $data;
}

function mostrar($id = NULL) {
    global $link;
    $stmt = $link->prepare('SELECT * FROM produtos WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    return $row;
}

function inserir($nome_produto = NULL, $valor_produto = NULL, $marca_produto = NULL, $quant = NULL, $valor_total){
    global $link;
    $stmt = $link->prepare('INSERT INTO produtos (nome_produto, valor_produto, marca_produto, quant, valor_total) VALUES (?, ?, ?, ?, ?)');
    $stmt->bind_param('sisii', $nome_produto, $valor_produto, $marca_produto, $quant, $valor_total);
    $stmt->execute();
    $stmt->close();
    $_SESSION['message'] = array('type'=>'success', 'msg'=>'Produto adicionado com sucesso!');
    header('Location: index.php');
    exit();
}

function alterar($nome_produto = NULL, $valor_produto = NULL, $marca_produto = NULL, $quant = NULL, $valor_total, $id){
    global $link;
    $stmt = $link->prepare('UPDATE produtos SET nome_produto = ?, valor_produto = ?, marca_produto = ?, quant = ?, valor_total = ? WHERE id = ?');
    $stmt->bind_param('sisiii', $nome_produto, $valor_produto, $marca_produto, $quant, $valor_total, $id);
    $stmt->execute();
    if($stmt->affected_rows === 0):
        $_SESSION['message'] = array('type'=>'danger', 'msg'=>'Você não fez alterações.');
    else:
        $_SESSION['message'] = array('type'=>'success', 'msg'=>'Alterações feitas com sucesso!');
    endif;
    $stmt->close();
}

function deletar($id){
    global $link;
    $stmt = $link->prepare('DELETE FROM produtos WHERE id =?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
    $_SESSION['message'] = array('type'=>'success', 'msg'=>'Produto deletado com sucesso!');
    header('Location: index.php');
    exit();
}
