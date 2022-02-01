<?php
include 'conecta.php';
include 'tipo_banco.php';
include 'head_menu.php';
$id = $_POST['id'];
$tipo =buscaTipo($conexao,$id);

$vinculo = vinculoTipoCafe($conexao,$id);
$msg = (!$vinculo == 0)?"<b>ATENÇÃO</b>!<br/>Existem Cafés associados a este tipo<br/>Se você confirmar a operação, todos os cafés associados a este tipo serão alterados.":"";
?>
<h1>Altera Tipo</h1>
<form action="tipo_edita.php" method="POST">
    <input type="hidden" name="id" value="<?= $tipo['id'] ?>">
    <table class="table">
        <tr>
            <td>Tipo</td>
            <td>
                <textarea class="form-control" type="text" name="nome"><?= $tipo['nome']?></textarea>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Altera</button></td>
        </tr>
    </table>
</form>
<div id="msg-vinculo-cafe">
<p class="text-danger"><?=$msg?></p>
</div>
<?php
include 'footer.php';
?>