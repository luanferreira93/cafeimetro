<?php
include 'conecta.php';
include 'cafe_banco.php';
include 'head_menu.php';
include 'tipo_banco.php';

$tipos = listaTipo($conexao);
?>
<h1>Adiciona Café</h1>
<form action="cafe_edita.php" method="POST">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td>
                <input class="form-control" type="text" name="nome">
            </td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td>
                <textarea class="form-control" name="descricao"></textarea>
            </td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td>
                <select class="form-control" name="tipo_id" id="">
                    <?php
                    foreach ($tipos as $tipo) {
                    ?>
                        <option value="<?= $tipo['id'] ?>"><?= $tipo['nome'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Adicionar</button></td>
        </tr>
    </table>
</form>
<?php
include 'footer.php';
?>