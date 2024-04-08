<?php
require_once("./conexao.php");

$txtNomeRestricao = $_POST['txtNomeRestricao'];
$txtDescricaoRestricao = $_POST['txtDescricaoRestricao'];

$str_sql_cadastrar_Restricao= "insert into `restricoes` (`nome`,`descricao`) values ('$txtNomeRestricao','$txtDescricaoRestricao'); ";

try{
    $cadastrar_Restricao = mysqli_query($conexao, $str_sql_cadastrar_Restricao);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRestricao']= $ultimo_id;
    die('idRestricao' . $_SESSION['idRestricao']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_Restricao);
}
?>