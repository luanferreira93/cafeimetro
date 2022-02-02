<?php
include 'conecta.php';
include 'tipo_banco.php';
include 'head_menu.php';

$nome = $_POST['nome'];
$tipoExiste = tipo_existe($conexao, $nome);

if ($tipoExiste == 0) {
    $adicinou = adiciona_tipo($conexao, $nome);
    if ($adicinou) {
?>
        <h1 class="text-success">Tipo adicionado com sucesso!.</h1>
    <?php
    } else {
    ?>
        <h1 class="text-sucess">Erro. Não foi possível adicionar o tipo.</h1>
    <?php
    }
} else {
    ?>
    <h1 class="text-danger">"<?=$nome?>" já esta cadastrado.</h1>
<?php
}
include 'footer.php';
?>