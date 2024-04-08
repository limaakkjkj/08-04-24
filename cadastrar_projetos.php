<?php
require_once("./conexao.php");

$txtNomeProjetos = $_POST['txtNomeProjetos'];
$txtDescricaoProjetos = $_POST['txtDescricaoProjetos'];

$str_sql_cadastrar_Projetos= "insert into `projetos` (`nome`,`descricao`) values ('$txtNomeProjetos','$txtDescricaoProjetos'); ";

try{
    $cadastrar_Projetos = mysqli_query($conexao, $str_sql_cadastrar_Projetos);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idProjetos']= $ultimo_id;
    die('idProjeto' . $_SESSION['idProjetos']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_Projetos);
}
?>