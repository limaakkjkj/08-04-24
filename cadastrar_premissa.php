<?php
require_once("./conexao.php");

$txtNomePremissa = $_POST['txtNomePremissa'];
$txtDescricaoPremissa = $_POST['txtDescricaoPremissa'];

$str_sql_cadastrar_Premissa= "insert into `premissas` (`nome`,`descricao`) values ('$txtNomePremissa','$txtDescricaoPremissa'); ";

try{
    $cadastrar_Premissa = mysqli_query($conexao, $str_sql_cadastrar_Premissa);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idPremissa']= $ultimo_id;
    die('idPremissa' . $_SESSION['idPremissa']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_Premissa);
}
?>