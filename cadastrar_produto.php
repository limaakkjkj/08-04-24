<?php
require_once("./conexao.php");

$txtNomeProduto = $_POST['txtNomeProduto'];
$txtDescricaoProduto = $_POST['txtDescricaoProduto'];

$str_sql_cadastrar_Produto= "insert into `produtos` (`nome`,`descricao`) values ('$txtNomeProduto','$txtDescricaoProduto'); ";

try{
    $cadastrar_Produto = mysqli_query($conexao, $str_sql_cadastrar_Produto);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idProduto']= $ultimo_id;
    die('idProduto' . $_SESSION['idProduto']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_Produto);
}
?>