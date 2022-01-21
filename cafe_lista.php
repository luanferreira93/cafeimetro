<?php
include 'conecta.php';
include 'head_menu.php';
include 'cafe_banco.php';
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
            $cafes = listacafe($conexao);
            foreach($cafes as $cafe){
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