<?php
include 'conecta.php';
include 'cafe_banco.php';
include 'head_menu.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$tipo_id = $_POST['tipo_id'];

$adicinou = adiciona_cafe($conexao,$nome,$descricao,$tipo_id);

if($adicinou){
?>
    <h1 class="text-success">Café adicionado com sucesso!.</h1>
<?php
}else{
?>
    <h1 class="text-sucess">Erro. Não foi possivel adiconar o café.</h1>
<?php
}
include 'footer.php';
?>