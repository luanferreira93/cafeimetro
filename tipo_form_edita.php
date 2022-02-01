<?php
include 'conecta.php';
include 'tipo_banco.php';
include 'head_menu.php';
$id = $_POST['id'];
$tipo =buscaTipo($conexao,$id);
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
<?php
include 'footer.php';
?>