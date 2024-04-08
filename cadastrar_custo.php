<?php
require_once("./conexao.php");

$txtNomeCusto = $_POST['txtNomeCusto'];
$txtDescricaoCusto = $_POST['txtDescricaoCusto'];

$str_sql_cadastrar_Custo= "insert into `custos` (`nome`,`descricao`) values ('$txtNomeCusto','$txtDescricaoCusto'); ";

try{
    $cadastrar_Custo = mysqli_query($conexao, $str_sql_cadastrar_Custo);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idCusto']= $ultimo_id;
    die('idCusto' . $_SESSION['idCusto']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_Custo);
}
?>