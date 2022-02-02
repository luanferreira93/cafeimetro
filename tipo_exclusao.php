<?php
include 'conecta.php';
include 'tipo_banco.php';
include 'head_menu.php';
$id = $_POST['id'];
$removeu = removeTipo($conexao,$id);
if($removeu){
?>
    <h1 class="text-success">Exclusão feita com sucesso!</h1>
    <h2 class="text-success">O tipo:<?=$_POST['nome']?> foi removido.</h2>
<?php
}else{
?>
    <h1 class="text-sucess">Erro. Não foi possivel excluir o Tipo.</h1>
<?php
}
include 'footer.php';
?>
