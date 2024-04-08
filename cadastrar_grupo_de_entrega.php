<?php
require_once("./conexao.php");

$txtNomeGrupodeEntrega = $_POST['txtNomeGrupodeEntrega'];
$txtDescricaoGrupodeEntrega = $_POST['txtDescricaoGrupodeEntrega'];

$str_sql_cadastrar_GrupodeEntrega= "insert into `grupos_de_entregas` (`nome`,`descricao`) values ('$txtNomeGrupodeEntrega','$txtDescricaoGrupodeEntrega'); ";

try{
    $cadastrar_GrupodeEntrega = mysqli_query($conexao, $str_sql_cadastrar_GrupodeEntrega);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idGrupodeEntrega']= $ultimo_id;
    die('idGrupodeEntrega' . $_SESSION['idGrupodeEntrega']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_GrupodeEntrega);
}
?>