<?php
require_once("./conexao.php");

$txtNomeStakeholders = $_POST['txtNomeStakeholders'];
$txtDescricaoStakeholders = $_POST['txtDescricaoStakeholders'];

$str_sql_cadastrar_stakeholders= "insert into `stakeholders` (`nome`,`descricao`) values ('$txtNomeStakeholders','$txtDescricaoStakeholders'); ";

try{
    $cadastrar_stakeholders = mysqli_query($conexao, $str_sql_cadastrar_stakeholders);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idStakeholders']= $ultimo_id;
    die('idStakeholders' . $_SESSION['idStakeholders']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_stakeholders);
}
?>