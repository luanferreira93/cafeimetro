<?php
include 'conecta.php';
include 'head_menu.php';
?>


<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tipo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            $query = 'SELECT * FROM cafe';
            $resultado = mysqli_query($conexao, $query);
            while ($cafe = mysqli_fetch_assoc($resultado)) {
            ?>
        <tr>
            <td><?= $cafe['nome'] ?></td>
            <td><?= $cafe['descricao'] ?></td>
            <td><?= $cafe['tipo_id'] ?></td>
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