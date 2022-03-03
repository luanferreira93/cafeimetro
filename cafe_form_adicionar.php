<?php
include 'conecta.php';
include 'head_menu.php';
include 'tipo_banco.php';

$tipos = listaTipo($conexao);
?>
<h1>Adiciona Café</h1>
<form id="formCafe" method="POST" action="cafe_adiciona.php">
    <table class="table">
        <span class="text-danger" id="msg-erro"></span>
        <tr>
            <td><span class="text-danger">* </span>Nome</td>
            <td>
                <input class="form-control" type="text" name="nome" id="nome">
            </td>
        </tr>
        <tr>
            <td><span class="text-danger">* </span>Descrição</td>
            <td>
                <textarea class="form-control" name="descricao" id="descricao"></textarea>
            </td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td>
                <select class="form-control" name="tipo_id">
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
<script src="./js/cafeimetro.js"></script>
<?php
include 'footer.php';
?>