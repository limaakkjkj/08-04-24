<?php
require_once("./conexao.php");

$txtNomeLinhadoTempo = $_POST['txtNomeLinhadoTempo'];
$txtDescricaoLinhadoTempo = $_POST['txtDescricaoLinhadoTempo'];

$str_sql_cadastrar_LinhadoTempo= "insert into `linhas_do_tempo` (`nome`,`descricao`) values ('$txtNomeLinhadoTempo','$txtDescricaoLinhadoTempo'); ";

try{
    $cadastrar_LinhadoTempo = mysqli_query($conexao, $str_sql_cadastrar_LinhadoTempo);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idLinhadoTempo']= $ultimo_id;
    die('idLinhadoTempo' . $_SESSION['idLinhadoTempo']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_LinhadoTempo);
}
?>