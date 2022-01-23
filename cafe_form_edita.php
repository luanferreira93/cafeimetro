<?php
include 'conecta.php';
include 'cafe_banco.php';
include 'head_menu.php';
$id = $_POST['id'];
$cafe = buscaCafeID($conexao, $id);
?>
<h1>Altera Café</h1>
<form action="cafe-edita.php" method="POST">
    <input type="hidden" name="id" value="<?= $cafe['id'] ?>">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td>
                <textarea class="form-control" type="text" name="nome"><?= $cafe['nome'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td>
                <textarea class="form-control" name="descricao"><?= $cafe['descricao'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td>
                <select class="form-control" name="tipo_id" id="">
                    <option value="<?= $cafe['tipo_id'] ?>"></option>
                </select>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Salvar</button></td>
        </tr>
    </table>
</form>
<?php
include 'footer.php';
?>