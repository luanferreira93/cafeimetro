<?php
include 'conecta.php';
include 'head_menu.php';
include 'cafe_banco.php';

$cafes = listacafe($conexao);
?>
<h1>Novo consumo</h1>
<form action="consumo_adiciona.php" method="POST">
    <table class="table">
        <tr>
            <td>Data</td>
            <td>
                <input class="form-control" type="date" name="data">
            </td>
        </tr>
        <tr>
            <td>Hora</td>
            <td>
                <input class="form-control" type="time" name="hora">
            </td>
        </tr>
        <tr>
            <td>Quantidade</td>
            <td>
                <input class="form-control" type="number" name="qtd" min="0" placeholder="ml">
            </td>
        </tr>
        <tr>
            <td>Cafe</td>
            <td>
                <select class="form-control" name="tipo_id">
                    <?php
                    foreach ($cafes as $cafe) {
                    ?>
                        <option value="<?= $cafe['id'] ?>"><?= $cafe['nome_cafe'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Preço</td>
            <td>
                <input class="form-control" type="number" name="preco" min="0.00" max="999.99" step="0.01" placeholder="R$">
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Adicionar consumo</button></td>
        </tr>
    </table>
</form>
<?php
include 'footer.php';
?>