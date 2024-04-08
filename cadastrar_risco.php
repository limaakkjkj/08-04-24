<?php
require_once("./conexao.php");

$txtNomeRisco = $_POST['txtNomeRisco'];
$txtDescricaoRisco = $_POST['txtDescricaoRisco'];

$str_sql_cadastrar_Risco= "insert into `riscos` (`nome`,`descricao`) values ('$txtNomeRisco','$txtDescricaoRisco'); ";

try{
    $cadastrar_Risco = mysqli_query($conexao, $str_sql_cadastrar_Risco);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRisco']= $ultimo_id;
    die('idRisco' . $_SESSION['idRisco']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_Risco);
}
?>