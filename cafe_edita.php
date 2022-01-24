<?php
include 'conecta.php';
include 'cafe_banco.php';
include 'head_menu.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$tipo_id = $_POST['tipo_id'];

$alterou = alteraCafe($conexao,$id,$nome,$descricao,$tipo_id);
if($alterou){
?>
    <p class="text-success">Alteração feita com sucesso!.</p>
<?php
}else{
?>
    <p class="text-danger">Erro. Não foi possivel fazer as alterações.</p>
<?php
}
include 'footer.php';
?>

