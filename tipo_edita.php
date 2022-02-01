<?php
include 'conecta.php';
include 'tipo_banco.php';
include 'head_menu.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$alterou = alteraTipo($conexao,$nome,$id);

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