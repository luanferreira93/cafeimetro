<?php
include 'conecta.php';
include 'head_menu.php';
include 'cafe_banco.php';
?>

<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <?php
            $cafes = listacafe($conexao);
            foreach($cafes as $cafe){
            ?>
        <tr>
            <td><?= $cafe['nome_cafe'] ?></td>
            <td><?= $cafe['descricao'] ?></td>
            <td><?= $cafe['nome_tipo'] ?></td>
            <td>
                <form name="form_altera" action="cafe_form_edita.php" method="POST">
                    <input type="hidden" name="id" value="<?= $cafe['id'] ?>">
                    <button class="btn btn-primary">Editar</button>
                </form>
            </td>
            <td>
            <form name="form_remove" action="cafe_form_remove.php" method="POST">
                    <input type="hidden" name="id" value="<?= $cafe['id'] ?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
    <?php
            }
    ?>
    </tr>
    </tbody>

</table>
<?php
include 'footer.php';
?>