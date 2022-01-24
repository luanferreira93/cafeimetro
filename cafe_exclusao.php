<?php
include 'conecta.php';
include 'cafe_banco.php';
include 'head_menu.php';
$id = $_POST['id'];
$removeu = removeCafe($conexao,$id);
if($removeu){
?>
    <h1 class="text-success">Exlusão feita com sucesso!</h1>
<?php
}else{
?>
    <h1 class="text-sucess">Erro. Não foi possivel excluir o café.</h1>
<?php
}
include 'footer.php';
?>
