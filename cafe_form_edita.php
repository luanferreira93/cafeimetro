<?php
include 'conecta.php';
include 'cafe_banco.php';
include 'head_menu.php';
include 'tipo_banco.php';

$id = $_POST['id'];
$cafe = buscaCafeID($conexao, $id);
$tipos = listaTipo($conexao);
?>
<h1>Altera Café</h1>
<form action="cafe_edita.php" method="POST" id="formCafe">
    <input type="hidden" name="id" value="<?= $cafe['id'] ?>">
    <table class="table">
    <span class="text-danger" id="msg-erro"></span>
        <tr>
            <td><span class="text-danger">* </span>Nome</td>
            <td>
                <textarea class="form-control" type="text" name="nome" id="nome"><?= $cafe['nome'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td><span class="text-danger">* </span>Descrição</td>
            <td>
                <textarea class="form-control" name="descricao" id="descricao"><?= $cafe['descricao'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td><span class="text-danger">* </span>Tipo</td>
            <td>
                <select class="form-control" name="tipo_id" id="">
                    <?php
                    foreach ($tipos as $tipo) {
                        $seleciona = ($cafe['tipo_id'] == $tipo['id'])?"selected='selected'":'';
                    ?>
                        <option value="<?= $tipo['id'] ?>" <?=$seleciona?>><?= $tipo['nome'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Salvar</button></td>
        </tr>
    </table>
</form>
<script src="./js/cafeimetro.js"></script>
<?php
include 'footer.php';
?>