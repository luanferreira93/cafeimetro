<?php
include 'head_menu.php';
include 'conecta.php';
include 'consumo_banco.php';
?>
<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <?php
            $consumos= listaConsumo($conexao);
            foreach ($consumos as $consumo) {
            ?>
        <tr>
            <td><?= $consumo['data_consumo'] ?></td>
            <td><?= $consumo['hora'] ?></td>
            <td><?= $consumo['dia_semana'] ?></td>
            <td><?= $consumo['cafe_nome'] ?></td>
            <td><?= $consumo['qtd'] ?>ml</td>
            <td>R$<?=number_format($consumo['preco'],2,',','.'); ?></td>
            <td>
                <form name="form_remove" action="consumo_remove.php" method="POST">
                    <input type="hidden" name="id" value="<?= $consumo['id'] ?>">
                    <button class="btn btn-danger">Remove</button>
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