<?php
require_once("./conexao.php");

$txtNomeObjetivo_Smart = $_POST['txtNomeObjetivo_Smart'];
$txtDescricaoObjetivo_Smart = $_POST['txtDescricaoObjetivo_Smart'];

$str_sql_cadastrar_Objetivo_Smart= "insert into `objetivos_smart` (`nome`,`descricao`) values ('$txtNomeObjetivo_Smart','$txtDescricaoObjetivo_Smart'); ";

try{
    $cadastrar_Objetivo_Smart = mysqli_query($conexao, $str_sql_cadastrar_Objetivo_Smart);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idObjetivo_Smart']= $ultimo_id;
    die('idObjetivo_Smart' . $_SESSION['idObjetivo_Smart']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_Objetivo_Smart);
}
?>