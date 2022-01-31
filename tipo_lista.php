<?php
include 'conecta.php';
include 'tipo_banco.php';
include 'head_menu.php';
?>
<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <?php
            $tipos = listaTipo($conexao);
            arsort($tipos);
            foreach ($tipos as $tipo) {
            ?>
        <tr>
            <th><?= $tipo['nome'] ?></th>
            <td>
                <form name="form_altera" action="tipo_form_edita.php" method="POST">
                    <input type="hidden" name="id" value="<?= $tipo['id'] ?>">
                    <button class="btn btn-primary">Editar</button>
                </form>
            </td>
            <td>
                <form name="form_remove" action="tipo_form_remove.php" method="POST">
                    <input type="hidden" name="id" value="<?= $tipo['id'] ?>">
                    <button class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    <?php
            }
    ?>
    </tr>
    </tbody>
<?php
include 'footer.php';
?>