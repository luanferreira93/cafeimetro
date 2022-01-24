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
    <h1 class="text-success">Alteração feita com sucesso!</h1>
<?php
}else{
?>
    <h1 class="text-sucess">Erro. Não foi possivel fazer alterção</h1>
<?php
}
include 'footer.php';
?>

