<?php
include 'conecta.php';
include 'tipo_banco.php';
include 'head_menu.php';
$id = $_POST['id'];
$tipo = buscaTipo($conexao,$id)
?>
<h1>Excluir Tipo</h1>
<form action="tipo_exclusao.php" method="POST">
    <input type="hidden" name="id" value="<?= $tipo['id'] ?>">
    <table class="table">
        <tr>
            <td>Tipo</td>
            <td>
                <textarea readonly class="form-control" type="text" name="nome"><?=$tipo['nome']?></textarea>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-danger" type="submit">Excluir</button></td>
        </tr>
    </table>
</form>
<?php
include 'footer.php';
?>